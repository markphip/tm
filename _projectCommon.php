<?php

# <modeling variables>
$PR = "dsdp/tm";
$projectName = "Target Management";

$isEMFserver = (preg_match("/^emf(?:\.torolab\.ibm\.com)$/", $_SERVER["SERVER_NAME"]));
$isBuildServer = (preg_match("/^(dsdp|build)\.eclipse\.org$/", $_SERVER["SERVER_NAME"])) || $isEMFserver;
$isBuildDotEclipseServer = $_SERVER["SERVER_NAME"] == "build.eclipse.org";
$isWWWserver = (preg_match("/^(?:www.|)eclipse.org$/", $_SERVER["SERVER_NAME"]));
$isEclipseCluster = (preg_match("/^(?:www.||download.|download1.|build.)eclipse.org$/", $_SERVER["SERVER_NAME"]));
$debug = (isset ($_GET["debug"]) && preg_match("/^\d+$/", $_GET["debug"]) ? $_GET["debug"] : -1);
$writableRoot = ($isBuildServer ? $_SERVER["DOCUMENT_ROOT"] . "/dsdp/includes/" : "/home/data/httpd/writable/dsdp/");
$writableBuildRoot = $isBuildDotEclipseServer ? "/opt/public/dsdp" : "/home/www-data";

$rooturl = "http://" . $_SERVER["HTTP_HOST"] . "/$PR";
$downurl = ($isBuildServer ? "" : "http://www.eclipse.org");
$bugurl = "https://bugs.eclipse.org";

# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/
# Optional: defaults to system theme 
#$theme = "Lazarus";
if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText)$/", $_GET["skin"], $regs))
{
	$theme = $regs[1];
}
else
{
	$theme = "Lazarus";
}

/* projects/components in cvs */
/* "proj" => "cvsname" */
#$cvsprojs = array (); /* should always be empty */
$cvsprojs = array (
	"rse" => "org.eclipse.tm.rse"
);

/* sub-projects/components in cvs for projects/components above (if any) */
/* "cvsname" => array("shortname" => "cvs-subname") */
$cvscoms = array(
	"org.eclipse.tm.core" => array (
		"terminal" => "terminal",
		"discovery" => "discovery"
		/* add more here */
	)
);

/* Readable Project names: "bugzilla component" => "shortname" */
$projects = array(
	"RSE" => "rse",
	#"TCF" => "tcf",
	"Terminal" => "terminal",
	#"Core" => "discovery",
);

$bugcoms = array_flip($projects);
$bugcoms = preg_replace("/ /", "%20", $bugcoms);

$extraprojects = array(); //components with only downloads, no info yet, "prettyname" => "directory"
$nodownloads = array("coordinated","jcrm","temporality", "emf4net"); //components with only information, no downloads, or no builds available yet, "projectkey"
$nonewsgroup = array(); //components without newsgroup
$nomailinglist = array(); //components without mailinglist
#$incubating = $projects; // ALL components are incubating
$incubating = array("tcf"); //Only TCF is incubating for now
$hasmoved = array(
	"query" => "emf", "transaction" => "emf", "validation" => "emf",
	"eodm" => "mdt", "ocl" => "mdt",
	"jet" => "m2t", "jeteditor" => "m2t"); // components which have moved, and to where
$nomenclature = "Component"; //are we dealing with "components" or "projects"?

include_once $_SERVER["DOCUMENT_ROOT"] . "/dsdp/includes/scripts.php";

$regs = null;
$proj = (isset($_GET["project"]) && preg_match("/^(" . join("|", $projects) . ")$/", $_GET["project"], $regs) ? $regs[1] : getProjectFromPath($PR));
$projct= preg_replace("#^/#", "", $proj);

$buildtypes = array(
	"R" => "Release",
	"S" => "Stable",
	"I" => "Integration",
	"M" => "Maintenance",
	"N" => "Nightly"
);
# </modeling variables>

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("Target Management", 	"/tm/index.php");
	#$Nav->addCustomNav("About", 		"/tm/about.php", 	 "_self", 2);
	#$Nav->addCustomNav("Downloads", 	"/tm/downloads.php", "_self", 2);
	#$Nav->addCustomNav("Getting Started", "/tm/tutorial/index.php",  "_self", 2);
	#$Nav->addCustomNav("Development", 	"/tm/development/index.php", "_self", 2);

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<div id="branding">
<h1><a href="http://eclipse.org/tm/">Target Management (RSE)</a></h1>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Target Management", 	"/tm");
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.tm", "_self", 1);
	#$Nav->addCustomNav("About", "/tm/tm-new/about", "_self", 2);
	#$Nav->addCustomNav("Team", "/tm/tm-new/team",	"_self", 2);
	$Nav->addCustomNav("Team", "/tm/development/contributors.php",	"_self", 2);
	#$Nav->addCustomNav("Demos", "/tm/tm-new/demos", "_self", 2);
	#$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/DSDP/TM", "_self", 2); 

	$Nav->addNavSeparator("Users", "", "_self", 2);
	$Nav->addCustomNav("Getting Started", "/tm/tutorial/index.php", "_self", 2);
	$Nav->addCustomNav("Downloads", "http://download.eclipse.org/tm/downloads/index.php", "_self", 2);
	$Nav->addCustomNav("FAQ (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ", "_self", 2);
	$Nav->addCustomNav("Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.dsdp.tm", "_self", 2);
	$Nav->addCustomNav("Bugs", "/tm/bugs", "_self", 2);

	$Nav->addNavSeparator("Integrators", "", "_self", 2);
	$Nav->addCustomNav("API Plan", "/tm/development/plan.php", "_self", 2);
	$Nav->addCustomNav("Documents", "/tm/doc/", "_self", 2);
	#$Nav->addCustomNav("Release Notes", "/$PR/news/relnotes.php?project=$proj&amp;version=HEAD", "_self", 2);
	#$Nav->addCustomNav("Legal", "dsdp/tm/development/tm-log.csv", "_self", 2);

	$Nav->addNavSeparator("Contributors", "/tm/development/contributors.php", "_self", 2);
	$Nav->addCustomNav("Contributing (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/tm-dev", "_self", 2);
	$Nav->addCustomNav("CVS", "/tm/development/cvs_setup.php", "_self", 2);
	$Nav->addCustomNav("Development Tools", "/tm/development/", "_self", 2);
	$Nav->addCustomNav("Search CVS", "/$PR/searchcvs.php?q=file%3A+org.eclipse.tm%25%2F" . "+days%3A+7", "_self", 2);

	$collist = "%26query_format%3Dadvanced&amp;column_changeddate=on&amp;column_bug_severity=on&amp;column_priority=on&amp;column_rep_platform=on&amp;column_bug_status=on&amp;column_product=on&amp;column_component=on&amp;column_version=on&amp;column_target_milestone=on&amp;column_short_short_desc=on&amp;splitheader=0";
	#$Nav->addCustomNav("Open Bugs", "$bugurl/bugs/colchange.cgi?rememberedquery=product%3D" . $projectName . (isset ($bugcoms[$proj]) ? "%26component=$bugcoms[$proj]" : "") . "%26bug_status%3DNEW%26bug_status%3DASSIGNED%26bug_status%3DREOPENED%26order%3Dbugs.bug_status%2Cbugs.target_milestone%2Cbugs.bug_id" . $collist, "_self", 2);

#$App->AddExtraHtmlHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"/dsdp/includes/common.css\"/>\n");
unset ($bugcoms);
?>
