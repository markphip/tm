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

		<p>The core Remote System Explorer (RSE) framework integrates
         any sort of heterogeneous remote resources under a single, consistent UI
         and allows transparent working on remote computers just like the local one.
         Other offerings include a lightweight Terminal and a Network Discovery
         framework.</p>

		<p><font size="+2"><b>Latest Release:</b> 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.0.1-200707061039/">
		TM 2.0.0.1</a></font>
		[<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.0.1-200707061039/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/2.0/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.0.1-200707061039/buildNotes.php">build notes</a>]<br/>
		The TM 2.0.0.1 patch release changes 6 lines of Java code compared to TM 2.0 in order to fix
		critical bugs <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=192741">192741</a> 
		and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=194204">194204</a>
		which could lead to loss of data
		when working with ZIP archives or renaming files on an FTP connection.
		The RSE Core and RSE FTP features were changed.
		See the <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.0.1-200707061039/buildNotes.php">
		TM 2.0.0.1 Build Notes</a> for details.
		<br/>
		TM 2.0 includes significant cleanups, refactorings and API changes for enhanced flexibility.
		541 unique bugs were adressed, including 136 API change requests.
		Users will see enhanced FTP configuration options, Terminal improvements,
		an EFS integration, and Import/Export wizards for bulk uploads and downloads
		among other improvements.<br/>
		Look at the
		<a href="/dsdp/tm/tutorial/index.php">Getting Started Page</a>
		and check the
		<a href="/dsdp/tm/development/relnotes/2.0/tm-news-2.0.html">New & Noteworthy</a>
<!--
		<a href="/dsdp/tm/development/relnotes/2.0/readme_tm_2.0.html">
		release notes</a>
-->
		for more information.</p>
<!--
		<p><font size="+0"><b>Latest Milestone:</b> 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-2.0RC3-200706140914/">
		TM 2.0RC3</a></font>
		[<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-2.0RC3-200706140914/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/milestones/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-2.0RC3-200706140914/buildNotes.php">
		build notes</a>]<br/>
		includes a few more bug fixes and cleanup as we ramp down for the Europa release. See the 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-2.0RC3-200706140914/buildNotes.php">
		build notes</a> for new&amp;noteworthy and more information.</p>
		<br/>
		With M7, the <a href="http://wiki.eclipse.org/index.php/TM_2.0_Ramp_down_Plan_for_Europa">
		Ramp-down phase</a> of release candidates towards
		the TM 2.0 release with Europa on June 29 has been entered.
		</p>
-->
		<p>
		<u>Additional Links:</u><br/> 
		<a href="/dsdp/tm/about.php">more about target management &raquo;</a> <br/>
		<a href="/dsdp/tm/TM_press_text_2006_06.php">press text - jun 2006 &raquo;</a> </p>
		<div class="homeitem">
			<h3>Quick Links</h3>
				<ul class="midlist">
					<li><a href="http://wiki.eclipse.org/index.php/DSDP/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions, meeting notes and other "not so official" stuff there.</li>
					<li><a href="news://news.eclipse.org/eclipse.dsdp.tm" target="_blank"><b>Newsgroup</b></a> | For general questions and community discussion (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.dsdp.tm">Web access</a>, <a href="http://dev.eclipse.org/newslists/news.eclipse.dsdp.tm/maillist.html">archive</a>).</li>
					<li><a href="http://dev.eclipse.org/mailman/listinfo/dsdp-tm-dev" target="_blank"><b>Mailing List</b></a> | For project development discussions.</li>
					<li><a href="/dsdp/tm/development/bug_process.php" target="_blank"><b>Bugs</b></a> 
					   | View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					   | <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit new</a> bugs
					   | Request an <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">enhancement</a>
					</li>
					<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management</a></li>
			    	<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">
      					<b>Architectural Overview</b></a>
    	  				(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  				| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  			</li>
					<li><a href="/dsdp/tm/development/plan.php"><b>TM Project Plan</b></a></li>
					<li><a href="/dsdp/dsdp-charter.php"><b>DSDP Project Charter</b></a></li>
		</div>
		<div class="homeitem">
			<h3>Events</h3>
			<ul class="midlist">
				<li><b>April 12, 2007</b>: 
				  <a href="http://live.eclipse.org/node/229">Webinar</a>:
				  TM goals, architecture, future plans and online demo
				  (<a href="http://live.eclipse.org/node/229">50 minute full recording</a> |
				  <a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt">PPT slides</a>)
				  </li> 
				<li>
				  <b>Mar 5-8, 2007</b>: EclipseCon 2007 -<ul>
				    <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3651" target="_blank">
				         <b>TM Tutorial</b></a> (includes 
				         <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3651">slides and sample code</a>)</li>
				    <li><a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&page=sub/&id=3781" target="_blank">
				         <b>Short Talk</b></a> (includes 
				         <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3781">slides</a>)</li>
				    <li><a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=4135" target="_blank">
				         <b>Short Demo</b></a> (includes 
				         <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=4135">slides</a>)</li>
				  </ul></li>
				<li><b>Oct. 11, 2006</b>: 
				  Eclipse Summit Europe - 
				  <a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=detail/&id=26">Talk by Michael Scharf on RSE</a>;<br/>
				  TM Overview slides
				  (<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a> | 
				  <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>);<br/>
				  DSDP Overview slides
				  (<a href="http://www.eclipsecon.org/summiteurope2006/presentations/ESE2006_DSDP_Project_Update.pdf">PDF</a>)
				  </li>
				<li>The TM project <b>passed its 1.0 Release Review</b> on
				    September 27, 2006. The Slides are an interesting read
				    for everyone (Slides as  
				    <a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt">PPT</a> | 
				    <a href="http://www.eclipse.org/projects/slides/TM_1.0_Release_Review_v3.pdf">PDF</a>).</li>
				<li>Monthly developer phone conference, every 1st wednesday of the month, 9am PST
				    (See the <a href="http://wiki.eclipse.org/index.php/DSDP/TM">Wiki</a> for actual
				    agenda and details)</li>
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
				<li><a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
				<li><a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt" target="_self">
				    TM 1.0 Release Review Slides</a></li>				
				<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html"
					target="_self">TM 2.0 Tutorial</a></li>
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases</a></li>
				<li><a href="/dsdp/tm/development/plan.php">TM Project Plan</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>What's New</h6>
			<ul><li>Jul 6th: <a href="http://tmober.blogspot.com/2007/07/dsdp-tm-rse-2001-critical-patch-release.html">TM 2.0.0.1 critical patch release</a></li>
				<li>Jun 29th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0-200706270925/">TM 2.0</a> has been released!</li>
				<li>Apr 12th: 63 people registered at <a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
				<li>Apr 10th: <a href="http://tmober.blogspot.com/2007/04/target-management-m6-efs-and-webinar.html">TM 2.0M6 provides EFS</a></li>
				<li>Mar 5th: <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3651">TM Tutorial</a> at EclipseCon</li>
				<li>Dec 15th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-1.0.1-200612151830/">RSE 1.0.1</a> has been released!</li>
                <!--
				<li>Sep 27th: TM passed the <a href="http://www.eclipse.org/projects/slides/TM_1.0_Release_Review_v3.pdf">
					1.0 Release Review</a></li>
 			    <li>Mar 22nd: About 70 participants at the
			    	<a href="http://www.eclipsecon.org/2006/Sub.do?id=287&not_accepted=0"
					target="_self">EclipseCon TM talk</a></li>
                -->
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
