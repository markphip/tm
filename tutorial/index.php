<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Getting Started with Target Management";
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

	<p>The Target Management project creates data models and frameworks
    to configure and manage remote systems, their connections, and their services.</p>
    <p>
	Our first deliverable is the <i>Remote System Explorer (RSE)</i>,
	a perspective and toolkit in Eclipse Workbench, that allows you 
	to connect and work with a variety of remote systems. RSE 1.0M5 has been
	<a href="http://download.eclipse.org/dsdp/tm/downloads/">
	posted for download</a> on Friday, September&nbsp;22. A
	<a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html">
	Tutorial</a> is now available as part of the documentation.</p>
	<p>
    The basis of RSE is a former IBM product, for which a
    <A HREF="http://www.developer.ibm.com/isv/rational/remote_system_explorer.html">
    slide show</A> is still available. Our plans beyond 
    <a href="/dsdp/tm/development/plan.php">RSE 1.0</a> are available from the
    Target Management <a href="http://wiki.eclipse.org/RSE_2.0_Planning">RSE
    2.0 Planning Wiki</a> and our <a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
    Use Cases Document</a>, which covers all areas of interest to us.</p>
    
	  <div class="homeitem3col">
		<h3>For more information, see the</h3>
    	<ul>
    	<li><a href="http://wiki.eclipse.org/index.php/DSDP">
      		DSDP Top-Level Overview Diagrams</a> to understand how the Target Management
      		Project fits into DSDP, and what its basic building blocks are.</li> 
    	<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
      		Target Management Use-Case Document</a> 
      		to understand what scenarios we want to cover with our project.</li>
    	<li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt">
      		Target Management Overview Slides</a>
    	  	which include a diagram of the envisioned components and architecture for our project.</li>
    	<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf">
      		IBM Remote Systems Explorer (RSE) Presentation</a>
			to get a preview of what the first release of the Target Management System
			will look like.
		<li><a href="/dsdp/tm/development/plan.php">
			Target Management Project Plan</a> 
			to understand what features and releases are coming next.</li>
		</ul>
	  </div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>
				<li><a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt" target="_self">
				    TM 1.0 Release Review Slides</a></li>				
			    <li><a href="http://wiki.eclipse.org/index.php/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt"
					target="_self">TM Overview Presentation</a></li>
				<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html"
					target="_self">RSE 1.0 Tutorial</a></li>
				<li><a href="/dsdp/tm/development/plan.php"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
