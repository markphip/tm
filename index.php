<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: DSDP-TM main page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "DSDP-TM Home page";
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
		<p>The Target Management project creates data models and frameworks
		 to configure and manage remote systems, their connections,
		 and their services.</p>
		<p>Our first public release (March 2006) will be based on the commercial
		<a href="http://www.developer.ibm.com/isv/rational/remote_system_explorer.html">
		IBM Remote Systems Explorer</a>. The codebase has been 
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125719">submitted</a>,
		and is currently going through the eclipse.org IP Review process.</p>
		<p> 
		<a href="about.php">more about target management &raquo;</a> </p>
		<div class="homeitem">
			<h3>Quick Links</h3>
				<ul class="midlist">
					<li><a href="http://wiki.eclipse.org/index.php/DSDP/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions and other "not so official" stuff there.</li>
					<li><a href="news://news.eclipse.org/eclipse.dsdp.tm" target="_blank"><b>Newsgroup</b></a> | For general questions and community discussion (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.dsdp.tm">archived</a>).</li>
					<li><a href="http://dev.eclipse.org/mailman/listinfo/dsdp-tm-dev" target="_blank"><b>Mailing List</b></a> | For project development discussions.</li>
					<li><a href="http://bugs.eclipse.org/bugs" target="_blank"><b>Bugs</b></a> 
					   | View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					   | <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target+Management">Submit new</a> bugs
					</li>
					<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management</a></li>
					<li><a href="/dsdp/tm/development/plan.php"><b>Project Plan</b></a>
		</div>
		<div class="homeitem">
			<h3>Events</h3>
			<ul class="midlist">
				<li><a href="http://wiki.eclipse.org/index.php/DSDP-TM_Face-to-face_Toronto_2006x02x23" target="_blank"><b>Face-to-Face Meeting Toronto</b></a>, 24/25-Feb-2006</li>
				<li><a href="http://www.eclipsecon.org/2006/Sub.do?id=287" target="_blank"><b>Using and Extending the DSDP Target Management Framework</b></a>, long talk at EclipseCon 2006 (accepted!)</li>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a
					href="doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="meetingnotes/ff01_chicago/DSDPTM_Overview.ppt"
					target="_self">TM Overview Presentation</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf"
					target="_self">IBM RSE Presentation</a></li>
				<!-- <li><a href="development/index.php">Developer Resources</a></li> -->
				<li><a href="doc/index.php">Developer Documents</a></li>
				<li><a href="/dsdp/tm/development/plan.php"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>What's New</h6>
			<ul> 
				<li>Feb 10th: <a
					href="http://www.eclipse.org/dsdp/tm/index.php"
					target="_self">DSDP-TM Homepage</a> converted to Phoenix</li>
				<li>Jan 31st: <a
					href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125719"
					target="_self">RSE Codebase</a> initially submitted on Bugzilla</li>
				<li>Jan 8th: <a
					href="http://wiki.eclipse.org/index.php/DSDP/TM"
					target="_self">DSDP-TM Wiki</a> started</li>
			</ul>
		</div>
		<div class="sideitem">
   			<h6>Incubation</h6>
   			<div align="center"><a href="/projects/gazoo.php"><img 
        		align="center" src="/images/gazoo-incubation.jpg" 
        		border="0" /></a></div>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
