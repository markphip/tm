<?php
//error_reporting(E_ALL); ini_set("display_errors", true);
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/classes/projects/projectInfoData.class.php");
require_once("/home/data/httpd/eclipse-php-classes/system/dbconnection_foundation_ro.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/smartconnection.class.php");

// ----------------------------------------------------------------------------
// PHOENIX STUFF

$App 	= new App();
$Nav	= new Nav();
$Menu 	= new Menu();
include($App->getProjectCommon());

$pageTitle 		= "Project Plan - ";
$pageAuthor		= "Bjorn Freeman-Benson";

$Nav->setLinkList(array()); // empty Nav

// ----------------------------------------------------------------------------
// BEGIN CODE

// Start Output Buffering
ob_start();
?>
<style>
h2 {
	border-bottom: 2px solid gray;
}
h3 {
	border-bottom: 1px dotted gray;
}
</style>
<?php
/*
 * Must have a ?projectid=xxx
 */
preg_match('/^([a-z.0-9\-_]+)$/', $_REQUEST['projectid'], $matches);
if(!isset($matches[1])) {
	?><span style="background-color: #FFCCCC; font-weight: bold; font-size: 150%">Error: unable to display project plan without a ?projectid=xxx</span><?php
} else {
$projectid = $matches[1];

$project = new ProjectInfoData($projectid);

$pageTitle .= $projectid;

function report_bugzillas( $param ) {
	$url = '' . $param;
	$url = trim( $url );
	if( !$url ) {
		?><ul><li><em>no items</em></li></ul><?php
		return;
	}
	if( substr($url,0,25) == 'https://bugs.eclipse.org/' ) {
		$url = 'https://bugs.eclipse.org/' . substr($url,25);
	} elseif( substr($url,0,24) == 'http://bugs.eclipse.org/' ) {
		$url = 'http://bugs.eclipse.org/' . substr($url,24);
	} else {
	 	?><ul><li><span style="background-color: #FFCCCC; font-weight: bold; font-size: 150%;">Error: url is not a bugs.eclipse.org url</span></li></ul><?php
	 	return;
	}
	$url = $url . "&ctype=rdf";
	$url = $url . "&columnlist=bug_id,short_desc,target_milestone,bug_status";
	/*
	 * For some reason, simplexml doesn't handle the RDF with namespaces,
	 * so we just remove all the namespace stuff here.
	 */
	$text = file_get_contents( $url );
	$text = preg_replace( "/bz:/", '', $text );
	$text = preg_replace( "/rdf:/", '', $text );
	$text = preg_replace( "/nc:/", '', $text );
	/* */
	$rdf = simplexml_load_string( $text );
//	echo "<pre>url=/"; print_r($url);
//	echo "/<br>text=/"; print_r($text); 
//	echo "/<br>rdf=/"; print_r($rdf);
//	echo "/</pre>"; 

	?><ul><?php
    foreach( $rdf->result->bugs->Seq->li as $each ) {
    	$status_begin = '';
    	$status_end = '';
    	if( $each->bug->bug_status == 'RESOLVED'
    	 || $each->bug->bug_status == 'VERIFIED'
    	 || $each->bug->bug_status == 'CLOSED' ) {
    		$status_begin = '<strike>';
    		$status_end = '</strike>';
    	}
    	?><li><?= $each->bug->short_desc ?> 
    	[<a href="http://bugs.eclipse.org/<?= $each->bug->id ?>"><?= $each->bug->id ?></a>]
    	<?= $status_begin ?>(target milestone: <?= $each->bug->target_milestone ?>)
    	<?= $status_end ?></li><?php
    }
	?></ul><?php
}

function show_error_page( $errormsg, $projectid ) {
	$leaders = array();

	$dbc = new DBConnectionFoundation();
	$dbh = $dbc->connect();
	$result = mysql_query("
		SELECT DISTINCT(People.PersonID), FName, LName
			FROM PeopleProjects, Projects, People
			WHERE PeopleProjects.Relation in ('PL','PD')
				AND InactiveDate is NULL
				AND People.PersonID = PeopleProjects.PersonID
				AND Projects.ProjectID = PeopleProjects.ProjectID
				AND Projects.ProjectID = '$projectid'
			ORDER BY LName", $dbh);
	while( $row = mysql_fetch_assoc($result) ) {
		$leaders[] = $row['FName'] . ' ' . $row['LName'];
	}

	if( count($leaders) == 0 ) {
		$leaderstr = "project leader(s)";
	} else {
		if( count($leaders) == 1 ) {
			$leaderstr = "project leader (" . $leaders[0] . ")";
		} else {
			$t1 = array_pop( $leaders );
			$leaderstr = "project leaders (" . implode( ", ", $leaders ) . " and " . $t1 . ")";
		}
	}
	?><div style="margin-top: 60px; margin-left: 50px; width: 400px"><center><img src="/projects/images/no-plan.jpg"><p>
	<div style="margin-top: 40px; margin-bottom: 60px">
	Unable to display the <?= $projectid ?> project plan because
	<?= $errormsg ?><p>
	The project team and <?= $leaderstr ?> are responsible for the project plan.
	You can contact them via the <a href="http://www.eclipse.org/mail/">project's developer mailing list</a>.
	</div></center></div><?php
}

/*
 * If the parameter is a projectid only, look up the url in the meta-data database
 */
if( isset($_REQUEST['planURL']) ) {
	$url = $_REQUEST['planURL'];
} else {
	$url = $project->projectplanurls[0];
}
/*
 * Verify that the url is pointing to eclipse.org to prevent cross-site attacks
 */
if( preg_match("/^\w+:/", $url) && substr($url,0,23) != 'http://www.eclipse.org/'  ) {
	if( isset($_REQUEST['planURL']) ) {
		show_error_page( 'the specified URL (' . $url . ') does not refer to an http://www.eclipse.org/ page.', $projectid );
	} else {
		show_error_page( 'the project meta-data "projectplanurl" (' . $url . ') does not refer to an http://www.eclipse.org/ page.', $projectid );
	}
} else {
	if( substr($url,0,5) != 'http:' )
		$url = $_SERVER['DOCUMENT_ROOT'] . $url;
/*
 * If the request is for raw format
 */
if( isset($_REQUEST['raw']) ) {
$contents = @file_get_contents( $url );
?>
<div style="margin-left: 10px; margin-top: 10px">
<b>Location: </b><?= $url ?><br>
<b>Meta-data Tag: </b>projectplanurl<br>
<b>Raw: </b><p>
<pre>
<?= htmlspecialchars($contents) ?>
</pre>
</div>
<?php
} else {
/*
 * Load the XML file
 */
$xml = @simplexml_load_file( $url );
if( $xml === false 
 || !isset($xml->themes_and_priorities->theme) ) {
 	$contents = @file_get_contents( $url );
 	if( !$contents ) {
 		show_error_page( 'the project meta-data "projectplanurl" (' . $url . ') points to an empty file.', $projectid );
 	} else {
 		if( preg_match( "/&(?<!amp;)/", $contents ) ) {
 			show_error_page( 'the file appears to have at least one naked &amp;s in bugzilla urls: &amp;s must be escaped as &amp;amp; to be valid XML.', $projectid );
 		} else {
	 		show_error_page( 'the file is not a valid project plan XML file. See <a href="http://wiki.eclipse.org/Development_Resources/Project_Plan">the documentation</a> for details.', $projectid );
 		}
	}
} else {
$projectname = $project->projectnames[0];

// ----------------------------------------------------------------------------
// OUTPUT
?>
<div id="maincontent">
<div id="midcolumn">

<h1>Project Plan for 
<a href="http://www.eclipse.org/projects/project_summary.php?projectid=<?= $projectid ?>"><span
style="font-size: 140%"><?= $projectname ?></span></a>, version <?= $xml->release->attributes()->version ?></h1>
<h2>Introduction</h2>
<?= $xml->introduction ?>
<h2>Release Deliverables</h2>
<?= $xml->release_deliverables ?>
<h2>Release Milestones</h2>
<p><?= $xml->release_milestones->preamble ?></p>
<table border="1" align="center">
<?php
foreach ($xml->release_milestones->milestone as $milestone ) {
	?><tr><td><b><?= $milestone->attributes()->milestone ?></b></td>
	 <td><?= $milestone->attributes()->date ?></td>
	 <td><?= $milestone ?></td></tr>
<?php
}
?>
</table>
<p><?= $xml->release_milestones->postamble ?></p>
<h2>Target Environments</h2>
<?= $xml->target_environments ?>
<h3>Internationalization</h3>
<?= $xml->target_environments->internationalization ?>
<h2>Compatibility With Previous Releases</h2>
<?= $xml->compatibility_with_previous_releases ?>

<h2>Themes and Priorities</h2>
<p><?= $xml->themes_and_priorities->preamble ?></p>
<?php
$list = array();
for( $i = 0; isset($xml->themes_and_priorities->theme[$i]); $i++ ) {
	$list[] = $xml->themes_and_priorities->theme[$i];
}
foreach( $list as $plan_theme ) {
	?><h3><?= $plan_theme->attributes()->name ?></h3>
	<?php
	if( $plan_theme->description != null ) {
		?><p style="margin-top: -6px"><?= $plan_theme->description ?></p>
		<?php
	}
	?>
	<ul><?php 
	?><li><b>Committed</b><ul><?php echo "\n";
	if( $plan_theme->committed->attributes()->bugzilla != null ) {
		report_bugzillas( $plan_theme->committed->attributes()->bugzilla );
	} else {
		if( trim($plan_theme->committed) ) {
			echo $plan_theme->committed;
		} else {
			?><ul><li><em>no items</em></li></ul><?php
		}
	}
	?></ul></li><li><b>Proposed</b><ul><?php echo "\n";
	if( $plan_theme->proposed->attributes()->bugzilla != null ) {
		report_bugzillas( $plan_theme->proposed->attributes()->bugzilla );
	} else {
		if( trim($plan_theme->proposed) ) {
			echo $plan_theme->proposed;
		} else {
			?><ul><li><em>no items</em></li></ul><?php
		}
	}
	?></ul></li><li><b>Deferred</b><ul><?php echo "\n";
	if( $plan_theme->deferred->attributes()->bugzilla != null ) {
		report_bugzillas( $plan_theme->deferred->attributes()->bugzilla );
	} else {
		if( trim($plan_theme->deferred) ) {
			echo $plan_theme->deferred;
		} else {
			?><ul><li><em>no items</em></li></ul><?php
		}
	}
	?></ul></li></ul><?php  echo "\n";
}

$idx = 0;
foreach( $xml->appendix as $appendix ) {
	$appidx = substr("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $idx, 1);
	?><h2>Appendix <?= $appidx ?>. <?= $appendix->attributes()->name ?></h2>
	<?= $xml->appendix ?>
	<?php
}
?>
<?php
}// if( $xml === false )
?>
<div style="float: right; text-align: right"><a href="?projectid=<?= $projectid ?>&raw=1">view raw xml of project plan</a><br>
<a href="/projects/dev_process/project-status-infrastructure.php">from project meta-data key "projectplanurl"</a></div>
<?php
}// if( !raw )
}// if( !cross site attack )
}// if( !$url )
?>

</div> <!-- midcolumn -->
</div> <!-- maincontent -->
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$pageKeywords = '';
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>