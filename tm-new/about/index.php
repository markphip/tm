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
	$pageTitle 		= "About Target Management";
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

	<h2>Mission Statement</h2>
    The Target Management project creates data models and frameworks
    to configure and manage remote systems, their connections, and their services.
    </P>
    <UL>
      <LI><I>Remote systems</I> (aka targets) can range from large-scale host computers, multi-board 
      or multi-core parallel systems to target boards without even a CPU or FPGA (connected
      by a hardware debugging box).</LI>
      <LI><I>Configuration</I> means dealing with board description files from a variety of sources,
      displaying remote system components and manipulating board and connection properties.</LI>
      <LI><I>Management</I> means maintaining a list of remote systems which is team
      shareable and available to other subsystems, creating groups of systems when appropriate,
      and handling access control to targets that are shared in a team (board lab).</LI>
      <LI><I>Connections</I> can range from TCP/IP standard protocols like FTP or telnet,
	  secure encryption, authentication and firewall tunnelling (ssh), to serial line terminal and 
	  vendor-specific protocols for remote agent and on-chip debugging (JTAG) solutions.
	  We want connection schemes and protocols to be pluggable in our framework.</LI>
	  <LI><I>Services</I> on remote systems include downloading software and data,
      launching single or multiple configurations, starting and stopping cores,
      resetting and querying target information.</LI>
    </UL>
    <P>
    Since there are many different vendors and solutions around in the device software
    space, the main charter of target management is to provide data models and frameworks
    that are flexible and open enough for vendor-specific extensions. Sample implementations 
    are provided for TCP/IP Secure Shell (ssh) connections, FTP data transfer and gdb remote launching 
    in the CDT environment. The basis for our implementations is an open-source version
    of the <A HREF="http://www.developer.ibm.com/isv/rational/remote_system_explorer.html">
    IBM Remote System Explorer</A>. Current releases can be downloaded for evaluation
    <a href="http://download.eclipse.org/dsdp/tm/downloads/">here</a>.
	  <div class="homeitem3col">
		<h3>For more information, see the</h3>
    	<ul>
    	<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">
      		Target Management Overview Slides</a>
    	  	which include a diagram of the envisioned components and architecture for our project
    	  	(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  	| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  	</li>
		<li><a href="http://live.eclipse.org/node/229">TM Webinar</a>:
		  goals, architecture, future plans and online demo
		  (<a href="http://live.eclipse.org/node/229">50 minute full recording</a> |
		  <a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt">PPT slides</a>)
		  </li> 
    	<li><a href="http://wiki.eclipse.org/DSDP">
      		DSDP Top-Level Overview Diagrams</a> to understand how the Target Management
      		Project fits into DSDP, and what its basic building blocks are.</li> 
    	<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
      		Target Management Use-Case Document</a> 
      		to understand what scenarios we want to cover with our project.</li>
    	<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf">
      		IBM Remote Systems Explorer (RSE) Presentation</a>
			to get a preview of what RSE looks like.
		<li><a href="/dsdp/tm/development/plan.php">
			Target Management Project Planning</a> 
			to understand what features and releases are coming next.</li>
		</ul>
	  </div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a href="/dsdp/tm/tutorial/index.php"
					target="_self">TM Getting Started</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"
					target="_self">TM Overview Slides</a></li>
				<li><a href="http://live.eclipse.org/node/229">TM Webinar</a>
				    </li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
			    <li><a href="http://wiki.eclipse.org/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="/dsdp/tm/development/plan.php"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
