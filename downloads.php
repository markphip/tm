<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# downloads.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: TM downloads page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Downloads";
	$pageKeywords	= "device, target";
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

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		The Target Management Downloads are now available on
		<ul>
		<li><a href="http://download.eclipse.org/tm/downloads/">The TM Download Site</a>
		<li><a href="http://download.eclipse.org/tm/updates/3.0/">The TM 3.0 Update Site</a>
		(or legacy: <a href="http://download.eclipse.org/tm/updates/2.0">TM 2.x update site</a>)
		</ul>

		<p>Older downloads have been submitted to eclipse.org via bugzilla:
		<p/>
		<ul>
		<li>Bugzilla <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=65471">65471</a>:
			Remote System Framework (RSF) 2.0.0 code and 
			<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=18820">presentation</a>
			</li>
		</ul>
		<p/>
		In addition to that, <a href="/tm/doc/index.php">Developer Documents</a> are available for download.
		<p/>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a href="/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt"
					target="_self">TM Overview Presentation</a></li>
				<li><a href="http://www.eclipse.org/project-slides/TM_3.0_Release_Review.pdf" target="_self">
				    TM 3.0 Release Review Slides</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
				<li><a
					href="/tm/doc/TM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<!-- <li><a href="/tm/development/index.php">Developer Resources</a></li> -->
				<li><a href="/tm/doc/index.php">Developer Documents</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
