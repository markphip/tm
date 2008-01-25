<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Martin Oberhuber, Kevin Doyle
	# Date:			2006-02-01
	# Updated: 		2008-01-25
	#
	# Description: DSDP-TM main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Target Management Project - Remote System Explorer";
	$pageKeywords	= "target management, remote system explorer, tm, rse, Eclipse, device, target"
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
	<div id="midcolumn" style="width:93%">
		<table border="0" cellpadding="5">
		<tr>
			<td><a href=""><img alt="Remote System Explorer Perspective" src=""></img></td>
			<td>
				<p>The Target Management project creates data models and frameworks to configure and manage remote systems, their connections, and their services.  Our main offering is the Remote System Explorer (RSE), which integrates any sort of heterogeneous remote resources under a single, consistent UI and allows transparent working on remote computers just like the local one. Other offerings include a lightweight Terminal and a Network Discovery framework. <a href="">More Information</a></p>
				<h2><a href="/dsdp/tm/tm-new/tutorial">Getting Started</a></h2>
				<h2><a href="/dsdp/tm/tm-new/downloads">Downloads</a></h2>
				<h2><a href="/dsdp/tm/tm-new/demos">Demos</a></h2>
			</td>
		</tr>
		</table>
		<div id="homeitem">
			<h3>News</h3>
			<ul>
				<li>
					Nov 13, 2007: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.2-200711131300/index.php">TM 2.0.2</a> Service Release
				</li>
				<li>
					October 9-11, 2007: Eclipse Summit Europe 2007
					<ul><li>
						 <a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=21" target="_blank">
				         <b>The DSDP Target Management Project</b></a>, long talk by Martin Oberhuber
				         (slides:  
				         <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2007-10-10_TM_ESE2007.ppt">PPT</a> |
				         <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2007-10-10_TM_ESE2007.pdf">PDF</a>)
					</li></ul>
				</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
