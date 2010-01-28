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
	a framework and toolkit in Eclipse Workbench, that allows you to
	connect and work with a variety of remote systems, including
	<ul>
	  <li><b>remote file systems</b> through SSH, FTP or dstore agents (seamless editing of
	remote files including remote search and compare),</li>
	  <li><b>remote shell access</b> (compiling with error navigation),</li>
	  <li><b>remote process</b> handling through dstore agents,</li>
	  <li>and <b>remote debugging</b> through CDT / gdb / gdbserver.</li>
	</ul>
	
	<p>Besides that, we are working on <b>flexible, re-usable components</b>
	for Networking and Target Management that run integrated or without RSE.
	The following are available from the TM 3.0 download pages 
	already:
	<ul>
	  <li>Fast and Flexible DNS-SD / Zeroconf based <b>Service Discovery</b> (requires EMF)</li>
	  <li>An ANSI / vt102 compatible <b>Terminal</b> widget with pluggable Serial, ssh and Telnet connectors 
	    (requires Platform now but can be ported to RCP / J2ME)</li>
	  <li>Apache <b>Commons Net</b> re-bundled for Eclipse to support FTP, rlogin, telnet
	    and other standard protocols (requires J2SE-1.2 only)</li>
	</ul>
	while the <b><a href="http://wiki.eclipse.org/DSDP/TM/TCF_FAQ">Target Communication Framework (TCF)</a></b>
	is currently available from its SVN Repository only. 
	
	<p>TM 3.0 as well as upcoming service releases and milestones are available
    from our 
	<a href="http://download.eclipse.org/dsdp/tm/downloads/">
	download site</a> as well as our 
	<a href="http://download.eclipse.org/dsdp/tm/updates/3.0/">
	update site</a>. The best resource for programmers to get started
	with the framework is the 
	<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.pdf">EclipseCon 2008 Tutorial</a>
	(includes <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_Econ08_samples.zip">sample code</a>),
	which is based on TM 3.0M5. Another
	<a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html">
	Tutorial</a> is available as part of the ISV documentation,
	and an <a href="http://wiki.eclipse.org/TM_and_RSE_FAQ">
	FAQ</a> is available on the project Wiki.</p>
    <p>
	Our plans beyond TM 3.0 are available from the
    Target Management <a href="/dsdp/tm/development/plan.php">Project Plan
    </a> and our <a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
    Use Cases Document</a>, which covers all areas of interest to us.</p>
    
	  <div class="homeitem3col">
		<h3>For more information, see the</h3>
    	<ul>
    	<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">
      		Target Management Overview Slides</a>
    	  	which include a diagram of the envisioned components and architecture for our project
    	  	(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  	| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  	</li>
	    <li><a href="http://www.eclipsecon.org/2008/?page=sub/&id=39" target="_blank">
	         <b>Target Management 3.0 New & Noteworthy</b></a>, EclipseCon 2008
			(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.ppt">PPT</a> 707 KB |
			<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.pdf">PDF</a> 581 KB)
		<li><a href="http://live.eclipse.org/node/229">TM 2.0 Webinar</a>:
		  goals, architecture, future plans and online demo
		  (<a href="http://live.eclipse.org/node/229">50 minute full recording</a> |
		  <a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt">PPT slides</a>)
		  </li> 
    	<li><a href="http://wiki.eclipse.org/TM_and_RSE_FAQ">
    		TM and RSE FAQ</a></li>
		<li>EclipseCon 2008 
		  <a href="http://www.eclipsecon.org/2008/?page=sub/&id=38" target="_blank">
		  <b>TM 3.0 Tutorial</b></a> (includes 
		  <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.pdf">slides</a> and
		  <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_Econ08_samples.zip">sample code</a>)
		</li>
    	<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html">
    		TM Online Docs Tutorial</a></li>
    	<li><a href="http://wiki.eclipse.org/TM_3.0_Known_Issues_and_Workarounds">
    		TM 3.0 Known Issues and Workarounds</a></li>
    	<li><a href="http://wiki.eclipse.org/DSDP">
      		DSDP Top-Level Overview Diagrams</a> to understand how the Target Management
      		Project fits into DSDP, and what its basic building blocks are.</li> 
    	<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
      		Target Management Use-Case Document</a> 
      		to understand what scenarios we want to cover with our project.</li>
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
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"
					target="_self">TM Overview Slides</a></li>
				<li><a href="http://live.eclipse.org/node/229">TM Webinar</a>
				    </li>
				<li><a href="http://www.eclipse.org/project-slides/TM_3.0_Release_Review.pdf" target="_self">
				    TM 3.0 Release Review Slides</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
			    <li><a href="http://wiki.eclipse.org/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html"
					target="_self">TM 3.0 Tutorial</a></li>
				<li><a href="/dsdp/tm/development/plan.php"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
