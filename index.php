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
		 to configure and manage remote (mainframe down to embedded) systems,
		 their connections, and their services.</p>
		 
		 <h3>The Vision</h3>
		 <p>To be the Eclipse <i>"Explorer of the Network Neighborhood"</i>,
		 with pluggable information providers under a single, consistent UI.
		 Interactively discover, drill down, analyze remote systems (from
		 mainframes down to embedded systems), and provide the
		 context for more advanced actions being plugged in to it.
		 
		 <h3>The Toolkit</h3>

		<p>The core Remote System Explorer (RSE) framework integrates
         any sort of heterogeneous remote resources through a concept
         of pluggable subsystems. The base toolkit includes a Remote Files
         subsystem that allows <a href="http://eclipsewebmaster.blogspot.com/2007/01/remote-editing-using-eclipse.html">
         transparent working on remote computers</a> just 
         like the local one, a shell and a processes subsystem.
         Other offerings include a lightweight Terminal and a Network Discovery
         framework.</p>
        <p>Vendors are extending the RSE with custom subsystems for debugging,
        remote VNC display and other uses.</p>

		<p><font size="+2"><b>Latest Release:</b> 
		<a href="http://tmober.blogspot.com/2007/09/tm-201-can-terminal-be-too-fast.html">
		TM 2.0.1</a></font>
		[<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.1-200709270920/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/2.0/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.1-200709270920/buildNotes.php">build notes</a>]<br/>
		Tm TM 2.0.1 service release includes more than 150 bug fixes and performance enhancements, particularly
		<ul><li>Fixes <b>non-ASCII encodings</b> for files and directories on remote FTP or SSH servers
		    <li>includes a <b>lighting fast new Terminal implementation</b> (up to 1000 times faster than the old one on Windows)</li>
		    <li>Several fixes for FTP passive mode, archive handlers and the <b>Eclipse Filesystem (EFS) provider</b></li>.
		</ul>
		EFS works nicely now for mapping remote resources into any kind of Eclipse project.
		<p/>
		TM 2.0.1 is 100% upward and backward compatible with TM 2.0. If you already have TM 2.0, you 
		can "check for updates" using the Eclipse update manager to get it.<br/>
		Look at <a href="http://tmober.blogspot.com/2007/09/tm-201-can-terminal-be-too-fast.html">this blog</a>, the
		<a href="/dsdp/tm/tutorial/index.php">Getting Started Page</a>
		and check the
		<a href="/dsdp/tm/development/relnotes/2.0/tm-news-2.0.html">New & Noteworthy</a>
<!--
		<a href="/dsdp/tm/development/relnotes/2.0/readme_tm_2.0.html">
		release notes</a>
-->
		for more information about interesting things in TM 2.0.</p>

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
		<p><font size="+2"><b>Upcoming Releases:</b></font>
		<ul><li><b>TM 2.0.2</b>: ETA 29-Feb-2008 with <a href="http://www.eclipse.org/projects/europa.php">Europa</a> SR 2
		        [<a href="http://wiki.eclipse.org/index.php/TM_Future_Planning#TM_2.0.x_Planning">Plan
		        | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=2.0.2&cmdtype=doit">assigned bugs</a>
		        | <a href="http://wiki.eclipse.org/TM_2.0_Ramp_down_Plan_for_Europa#Ramp_down_for_Europa_SR2_.2829-Feb-2007.29">ramp-down plan</a>]</li>
		    <li><b>TM 3.0:</b> ETA June 2008 with Eclipse 3.4
		        [<a href="http://wiki.eclipse.org/index.php/TM_Future_Planning#TM_3.0_.28Ganymede.29_Planning">Planning Page</a>]</li>
		</ul></p>



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
				<li>
				  <b>October 9-11, 2007</b>: Eclipse Summit Europe 2007 -<ul>
				    <li><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=21" target="_blank">
				         <b>The DSDP Target Management Project</b></a>, long talk by Martin Oberhuber
				         (slides;  
				         <a href="http://download.eclipse.org/dsdp/tm/presentations/2007-10-10_TM_ESE2007.ppt">PPT</a> |
				         <a href="http://download.eclipse.org/dsdp/tm/presentations/2007-10-10_TM_ESE2007.pdf">PDF</a>)
				         </li>
				    </ul></li>
				<li><b>September 17-19, 2007</b>: 
				  <a href="http://wiki.eclipse.org/DSDP/TM/Face-to-face_Meeting_Toronto_17-Sep-2007">
				  TM Planning Meeting and Coding Camp</a>, Toronto
				  </li> 
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
				<li><b>Sept. 27, 2006</b>: TM passed its 1.0 Release Review. The Slides are an interesting read
				    for everyone (Slides as  
				    <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_1.0_Release_Review_v3.ppt">PPT</a> | 
				    <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_1.0_Release_Review_v3a.pdf">PDF</a>).</li>
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
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
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
			<ul><li>Sep 28th: <a href="http://tmober.blogspot.com/2007/09/tm-201-can-terminal-be-too-fast.html">TM 2.0.1</a> Service Release</li>
				<li>Jul 6th: <a href="http://tmober.blogspot.com/2007/07/dsdp-tm-rse-2001-critical-patch-release.html">TM 2.0.0.1 critical patch release</a></li>
				<li>Jun 29th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0-200706270925/">TM 2.0</a> has been released!</li>
				<li>Apr 12th: 63 people registered at <a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
				<li>Apr 10th: <a href="http://tmober.blogspot.com/2007/04/target-management-m6-efs-and-webinar.html">TM 2.0M6 provides EFS</a></li>
				<li>Mar 5th: <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3651">TM Tutorial</a> at EclipseCon</li>
				<li>Dec 15th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-1.0.1-200612151830/">RSE 1.0.1</a> has been released!</li>
                <!--
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
