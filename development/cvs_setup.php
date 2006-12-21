<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# project_sets.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-07-03
	#
	# Description: Eclipse Team Project Sets for TM development
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Repository and Team Project Sets";
	$pageKeywords	= "DSDP, Target Management, Team, Development, Project Set, psf, workspace";
	$pageAuthor		= "Martin Oberhuber";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<a name="projectsets"></a>
		<p>When you want to work on RSE code obtained from our 
		CVS Repositories, the simplest way to set up your workspace
		is to import our team project sets.</p>
		
		<p>Simply pick the project set below that is appropriate
		for your use, save it to a local disk and in Eclipse choose
		<b>File &gr; Import &gt; Team &gr; Team Project Set</b>.
		Since committers with write access to the repository need
		a different repository setup, there are specific project
		sets for committers.</p>
		
		<p>Once you have obtained a project set, a project named
		<b>www-tm-development</b> will also be part of your workspace.
		This project holds the web pages you are just reading, 
		including the team project sets themselves. So when you want
		to update your workspace e.g. because you have been informed
		that new plugins have been added, just synchronize the 
		www-tm-development project with the repository, and then
		import the proper team project set from your local workspace
		(there is no need to go back to the web page again).</p>
		
		<p>For more details on Team Project Sets, see the
		<a href="http://help.eclipse.org/help32/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">
		Eclipse Workbench documentation.</a></p>
		
		<table border=1>
		  <tr><th>Project Set Contents</th><th>Anonymous Access</th><th>Committer Access</th></tr>
		  <tr>
		    <td>Core RSE plugins, including examples, docs and all subsystem implementations</td>
		    <td><a href="rse-anonymous.psf">rse-anonymous.psf</a></td>
		    <td><a href="rse-committer.psf">rse-committer.psf</a></td>
		  </tr>
		  <tr>
		    <td>RSE feature projects, tests and release engineering support projects</td>
		    <td><a href="rse-releng-anonymous.psf">rse-releng-anonymous.psf</a></td>
		    <td><a href="rse-releng-committer.psf">rse-releng-committer.psf</a></td>
		  </tr>
		  <tr>
		    <td>Discovery component</td>
		    <td><a href="discovery-anonymous.psf">discovery-anonymous.psf</a></td>
		    <td><a href="discovery-committer.psf">discovery-committer.psf</a></td>
		  </tr>
		  <tr>
		    <td>Terminal component</td>
		    <td><a href="terminal-anonymous.psf">terminal-anonymous.psf</a></td>
		    <td><a href="terminal-committer.psf">terminal-committer.psf</a></td>
		  </tr>
		  <tr>
		    <td>Complete workspace, including all four project sets above</td>
		    <td><a href="tm-all-anonymous.psf">tm-all-anonymous.psf</a></td>
		    <td><a href="tm-all-committer.psf">tm-all-committer.psf</a></td>
		  </tr>
		  <tr>
		    <td>TM Orbit contribution (Jakarta ORO and Commons Net)</td>
		    <td><a href="tm-orbit-anonymous.psf">tm-orbit-anonymous.psf</a></td>
		    <td><a href="tm-orbit-committer.psf">tm-orbit-committer.psf</a></td>
		  </tr>
		  
		</table>
		
		<a name="viewcvs"></a>
		<h2>WWW viewcvs access</h2>
		<p>Our repositories can also be accessed over the internet 
		through the viewcvs interface:</p>
		<ul>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=DSDP_Project">TM Core Repository</a>, 
		    holding re-usable core components without further dependencies like
		    third party libraries (Apache Jakarta Commons Net, Jakarta-ORO),
		    Discovery components and Terminal view.</li>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE Repository</a>,
		    holding the Remote System Explorer (RSE) framework including services, subsystems,
		    UI components, examples, tests, documentation and all release engineering
		    support projects.</li>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/www/dsdp/tm/?cvsroot=Eclipse_Website">TM Website Repository</a>,
		    holding the project web pages.</li>
		</ul>

		<a name="manual"></a>
		<h2>Direct manual access to our Repositories</h2>
		<p>Finally, if you want to manually browse our repositories in the
		Eclipse CVS Repository Explorer or a similar CVS browser, here is
		how to access them:</p>
		<table border=1>
		  <tr><th> &nbsp; </th><th>Repository</th><th>Module path</th></tr>
		  <tr>
		    <td>TM Core Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/dsdp</td>
		    <td>org.eclipse.tm.core</td>
		  </tr>
		  <tr>
		    <td>RSE Main Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/dsdp</td>
		    <td>org.eclipse.tm.rse</td>
		  </tr>
		  <tr>
		    <td>TM Website Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/org.eclipse</td>
		    <td>www/dsdp/tm</td>
		  </tr>
		</table>

		<a name="changelogs"></a>
		<h2>Change Logs</h2>
		<p>The TM project maintains change logs for the latest modifications
		to the repositories. Unfortunately, these need to be separate for the
		Core and RSE repositories due to technical constraints:</p>
		<ul>
		  <li><a href="http://download.eclipse.org/dsdp/tm/downloads/drops/N-changelog/index.html">RSE Main Changelog</a></li>
		  <li><a href="http://download.eclipse.org/dsdp/tm/downloads/drops/N-changelog/core/index.html">Core Components Changelog</a></li>
		</ul>
		
		<a name="notifications"></a>
		<h2>Commit Notifications</h2>
		<p>You can subscribe to the 
		  <a href="https://dev.eclipse.org/mailman/listinfo/dsdp-tm-cvs-commit">dsdp-tm-cvs-commit</a>
		  mailing list to receive notification E-Mails for new checkins.</p>

		<a name="cvsbackground"></a>
		<h2>Background information on CVS and Eclipse</h2>
		<ul>
		  <li>See <a href="http://wiki.eclipse.org/index.php/CVS_Howto">
			Using Eclipse with CVS</a> for instructions on how to use
			Eclipse with CVS.</li>
		</ul>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
