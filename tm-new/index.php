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
	$pageKeywords	= "target management, remote system explorer, tm, rse, Eclipse, device, target";
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
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam. Nunc pretium. Suspendisse potenti. Nullam et lorem. Mauris dui. Nulla nisi. Duis at erat. In consectetur. Ut vel quam. Nam tristique, dui vitae iaculis suscipit, urna risus iaculis purus, quis facilisis odio augue sed dui. Sed varius semper tortor. Nam rhoncus, nibh non convallis scelerisque, nulla quam egestas dui, vel tincidunt augue lectus eget nulla. Aenean condimentum pede vitae velit. Duis vulputate.</p>
		<p>Etiam condimentum, lacus vel scelerisque ultrices, justo urna dictum arcu, sed luctus justo risus eget nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean convallis pharetra ante. Integer sit amet nisi sit amet mi hendrerit ornare. Praesent porttitor magna at ante. Ut tempor diam sit amet purus. Curabitur varius. Etiam mollis placerat quam. Maecenas ac massa in turpis vehicula sollicitudin. Mauris bibendum. Nulla metus orci, aliquet ut, tincidunt nec, euismod sit amet, urna.</p>
		<p>Duis enim. Praesent lobortis, tellus id bibendum venenatis, odio enim posuere quam, sed blandit enim urna sit amet magna. Sed sed magna vel tellus aliquet eleifend. Integer rhoncus, ligula non porta volutpat, ipsum est commodo est, vitae vulputate risus libero ac nulla. Ut interdum urna et metus. Fusce ultricies ullamcorper dui. Maecenas arcu urna, molestie ut, semper sed, pharetra eget, dolor. Quisque sed mi ut tortor aliquam vestibulum. Mauris tristique. Morbi sit amet metus. Integer tempus purus rutrum massa. Nullam scelerisque ligula in risus. Duis egestas justo vel mi. In felis leo, tincidunt sed, tincidunt et, cursus in, nulla.</p>
		<table border="0" cellpadding="5">
		<tr>
			<td><a href=""><img alt="Remote System Explorer Perspective" src=""></img></a></td>
			<td>
				<p>The Target Management project creates data models and frameworks to configure and manage remote systems, their connections, and their services.  Our main offering is the Remote System Explorer (RSE), which integrates any sort of heterogeneous remote resources under a single, consistent UI and allows transparent working on remote computers just like the local one. Other offerings include a lightweight Terminal and a Network Discovery framework. <a href="">More Information</a></p>
				<h2><a href="/dsdp/tm/tm-new/tutorial">Getting Started</a></h2>
				<h2><a href="/dsdp/tm/tm-new/downloads">Downloads</a></h2>
				<h2><a href="/dsdp/tm/tm-new/demos">Demos</a></h2>
			</td>
		</tr>
		</table>
		<div id="homeitem3col">
			<h3>News</h3>
			<ul>
			    <li>Feb 25th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.3-200802251530/">TM 2.0.3</a> Service Release</li>
				<li>Feb 18th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M5-200802181400/">TM 3.0M5</a> released</li>
				<li>
					Jan 7th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M4-200801071150/">TM 3.0M4</a> released
				</li>
				<li>
					Dec 20th: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=210751">TCF</a> has been approved by Eclipse Legal
				</li>
				<li>
					Nov 13, 2007: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.2-200711131300/">TM 2.0.2</a> Service Release
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
				<li>
					Sep 28th: <a href="http://tmober.blogspot.com/2007/09/tm-201-can-terminal-be-too-fast.html">TM 2.0.1</a> Service Release
				</li>
				<li>
					September 17-19, 2007:  <a href="http://wiki.eclipse.org/DSDP/TM/Face-to-face_Meeting_Toronto_17-Sep-2007">TM Planning Meeting and Coding Camp</a>, Toronto
				</li>
				<li>
					Jun 29th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0-200706270925/">TM 2.0</a> has been released!	
				</li>
				<li>
					April 12, 2007: <a href="http://live.eclipse.org/node/229">Webinar</a>: TM goals, architecture, future plans and online demo (<a href="http://live.eclipse.org/node/229">50 minute full recording</a> | <a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt">PPT slides</a>)
				</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
