<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# project_sets.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-07-03
	#
	# Description: Eclipse Team Project Sets for TM development
	# dwd - updated for Git
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Repository and Team Project Sets";
	$pageKeywords	= "Device, Remote, Target Management, Team, Development, Project Set, psf, workspace";
	$pageAuthor		= "David Dykstal";
	
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
		<p>
		When you want to work on RSE code obtained from our 
		Git Repositories, the simplest way will be to set up your workspace
		using our team project sets. These are currently being
		constructed for our Git repository and will be available from 
		this page.
		</p>
		
		<!--
		<p>Simply pick the project set below that is appropriate
		for your use, save it to a local disk and in Eclipse choose
		<b>File &gt; Import &gt; Team &gt; Team Project Set</b>.</p>
		
		<p>For most contributors, we recommend using <b>
		<a href="rse-anonymous.psf">rse-anonymous.psf</a></b>.
		Since the RSE code is located on three different repositories,
		importing this project set will ask you three times for 
		your user and password information. Use
		<ul><li>User: <b>anonymous</b></li>
		    <li>Password: <b>your.email@your.provider</b></li>
		</ul>
		After entering this three times during import, Eclipse will 
		not ask you again. 
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
		    <td>Discovery component (archived)</td>
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
		
		-->
		
		<p>
		For more details on Team Project Sets and Git, see the
		<a href="http://wiki.eclipse.org/EGit/New_and_Noteworthy/1.1#Team_Project_Set_Support">Team Project Set Support</a>
		of the 
		<a href="http://wiki.eclipse.org/EGit/New_and_Noteworthy/1.1">EGit 1.1 New and Noteworthy</a>
		document.
		</p>
		
		<!--
		<a name="viewcvs"></a>
		<h2>WWW viewcvs access</h2>
		<p>Our repositories can also be accessed over the internet 
		through the viewcvs interface:</p>
		<ul>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=Tools_Project">TM Core Repository</a>, 
		    holding re-usable core components without further dependencies like
		    third party libraries (Apache Commons Net, Jakarta-ORO),
		    Discovery components and Terminal view.</li>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=Tools_Project">RSE Repository</a>,
		    holding the Remote System Explorer (RSE) framework including services, subsystems,
		    UI components, examples, tests, documentation and all release engineering
		    support projects.</li>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.orbit/?cvsroot=Tools_Project">Orbit Repository</a>,
		    holding the TM contributions to Orbit, namely bundled versions of Apache
		    Commons Net 1.4.1 and Jakarta ORO 2.0.8.</li>
		  <li><a href="http://dev.eclipse.org/viewcvs/index.cgi/www/tm/?cvsroot=Eclipse_Website">TM Website Repository</a>,
		    holding the project web pages.</li>
		</ul>
		-->

		<!--
		<a name="manual"></a>
		<h2>Direct access to our Repositories</h2>
		<p>You can find the relevant repositories at these locations:</p>
		<table border=1>
		  <tr><th> &nbsp; </th><th>Repository</th><th>Module path</th></tr>
		  <tr>
		    <td>TM Core Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/tools</td>
		    <td>org.eclipse.tm.core</td>
		  </tr>
		  <tr>
		    <td>RSE Main Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/tools</td>
		    <td>org.eclipse.tm.rse</td>
		  </tr>
		  <tr>
		    <td>Orbit Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/tools</td>
		    <td>org.eclipse.orbit</td>
		  </tr>
		  <tr>
		    <td>TM Website Repository</td>
		    <td>:pserver:dev.eclipse.org:/cvsroot/org.eclipse</td>
		    <td>www/tm</td>
		  </tr>
		</table>
		-->

		<a name="manual"></a>
		<h2>Direct access to the TM repository</h2>
		<p>Our repository can be viewed at
		<a href="http://git.eclipse.org/c/tm/org.eclipse.tm.git/">http://git.eclipse.org/c/tm/org.eclipse.tm.git/</a>.
		There you will also find the URLs for cloning the repository if you desire to do so.
		</p>

		<!--
		<a name="changelogs"></a>
		<h2>Change Logs</h2>
		<p>The TM project maintains change logs for the latest modifications
		to the repositories. Unfortunately, these need to be separate for the
		Core and RSE repositories due to technical constraints:</p>
		<ul>
		  <li><a href="http://download.eclipse.org/tm/downloads/drops/N-changelog/index.html">RSE Main Changelog</a></li>
		  <li><a href="http://download.eclipse.org/tm/downloads/drops/N-changelog/core/index.html">Core Components Changelog</a></li>
		</ul>
		-->
		
		<!--
		<a name="notifications"></a>
		<h2>Commit Notifications</h2>
		<p>You can subscribe to the 
		  <a href="https://dev.eclipse.org/mailman/listinfo/tm-cvs-commit">tm-cvs-commit</a>
		  mailing list to receive notification E-Mails for new checkins.</p>
		-->

		<a name="gitbackground"></a>
		<h2>Background information on using Git with Eclipse</h2>
		<ul>
		  <li>See <a href="http://wiki.eclipse.org/Git">Git</a> for information on how to use Eclipse with Git.</li>
		  <li>See <a href="http://wiki.eclipse.org/EGit/FAQ">the EGit FAQ</a> for information on how to use EGit, the Eclipse Git client.</li>
		</ul>
		<p/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
