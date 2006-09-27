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
	$pageTitle 		= "Target Management Home page";
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
		<p><font size="+3"><b>News:</b></font> RSE 1.0M5 has been
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-1.0M5-200609221723/index.php">
		posted for download</a> on Friday, September&nbsp;22. With this drop, the TM project also
		passed its <a href="http://localhost/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt">1.0 Release Review</a>.
		A <a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html">
		Tutorial</a> is now available as part of the documentation. Please check the
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-1.0M5-200609221723/buildNotes.php">build notes</a> for this build.</p>
		<p>
		<u>Additional Links:</u><br/> 
		<a href="/dsdp/tm/about.php">more about target management &raquo;</a> <br/>
		<a href="/dsdp/tm/TM_press_text_2006_06.php">press text - jun 2006 &raquo;</a> </p>
		<div class="homeitem">
			<h3>Quick Links</h3>
				<ul class="midlist">
					<li><a href="http://wiki.eclipse.org/index.php/DSDP/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions and other "not so official" stuff there.</li>
					<li><a href="news://news.eclipse.org/eclipse.dsdp.tm" target="_blank"><b>Newsgroup</b></a> | For general questions and community discussion (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.dsdp.tm">Web access</a>, <a href="http://dev.eclipse.org/newslists/news.eclipse.dsdp.tm/maillist.html">archive</a>).</li>
					<li><a href="http://dev.eclipse.org/mailman/listinfo/dsdp-tm-dev" target="_blank"><b>Mailing List</b></a> | For project development discussions.</li>
					<li><a href="/dsdp/tm/development/bug_process.php" target="_blank"><b>Bugs</b></a> 
					   | View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					   | <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit new</a> bugs
					   | Request an <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">enhancement</a>
					</li>
					<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management</a></li>
					<li><a href="/dsdp/tm/development/plan.php"><b>Project Plan</b></a></li>
					<li><a href="/dsdp/dsdp-charter.php"><b>DSDP Project Charter</b></a></li>
		</div>
		<div class="homeitem">
			<h3>Events</h3>
			<ul class="midlist">
				<li><b>Oct. 11, 2006</b>: 
				  <a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=detail/&id=26">
				  The Remote System Explorer</a> - Talk by Michael Scharf at
				  Eclipse Summit Europe</li>
				<li>The TM project <b>passed its 1.0 Release Review</b> on
				    September 27, 2006. The Slides are an interesting read
				    for everyone (Slides as  
				    <a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt">PPT</a> | 
				    <a href="http://www.eclipse.org/projects/slides/TM_1.0_Release_Review_v3.pdf">PDF</a>).</li>
				<li>Monthly developer phone conference, every 1st wednesday of the month, 9am PST
				    (See the <a href="http://wiki.eclipse.org/index.php/DSDP/TM">Wiki</a> for actual
				    agenda and details)</li>
				<li>
				  <!-- <a href="http://eclipsezilla.eclipsecon.org/show_bug.cgi?id=287" target="_blank"> -->
				  <a href="http://www.eclipsecon.org/2006/Sub.do?id=287&not_accepted=0" target="_blank">
				  <b>Using and Extending the DSDP Target Management Framework</b></a>, long talk at EclipseCon 2006
				  (<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-3-22_EclipseCon_Target_Management.ppt">presentation file</a>)</li>
				<li><a href="http://wiki.eclipse.org/index.php/DSDP/TM/Face-to-face_Toronto_23-Feb-2006" target="_blank"><b>Face-to-Face Meeting Toronto</b></a>, 23/24-Feb-2006</li>
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
				<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html"
					target="_self">RSE 1.0 Tutorial</a></li>
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf" target="_self">
					IBM RSE Presentation</a></li>
				<!-- <li><a href="/dsdp/tm/development/index.php">Developer Resources</a></li> -->
				<li><a href="/dsdp/tm/doc/index.php">Developer Documents</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>What's New</h6>
			<ul>
				<li>Sep 27th: TM passed the <a href="http://www.eclipse.org/projects/slides/TM_1.0_Release_Review_v3.pdf">
					1.0 Release Review</a></li>
				<li>Sep 22nd: RSE M5 has been <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-1.0M5-200609221723/index.php">posted!</a></li>
				<li>May 19th: Updated the <a
					href="/dsdp/tm/development/plan.php"
					target="_self">Project Plan</a> - New release date Oct. 20th</li>
			    <li>Mar 22nd: About 70 participants at the<a
					href="http://www.eclipsecon.org/2006/Sub.do?id=287&not_accepted=0"
					target="_self">EclipseCon TM talk</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
