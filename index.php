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

		<p>The core <a href="http://tmober.blogspot.com/2006/11/remote-system-explorer-10-is-released.html">
		 Remote System Explorer (RSE)</a> framework integrates
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
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1.2-201002152323/">
		TM 3.1.2</a></font>
		[<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1.2-201002152323/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/3.1/">update site</a>
		<!--
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1.2-201002152323/buildNotes.php">build notes</a>
		-->
		| <a href="/dsdp/tm/development/relnotes/3.1/readme_tm_3.1.html">release notes</a>
		]<br/>
		The TM 3.1.2 service release includes 4 bug fixes compared to TM 3.1.1. 
		It is fully compatible with TM 3.1, and runs on Eclipse 3.4 (Ganymede) 
		and later. Look at the <a href="/dsdp/tm/tutorial/index.php">Getting Started Page</a>,
		the build notes and the
		<a href="/dsdp/tm/development/relnotes/3.1/tm-news-3.1.html">TM 3.1 New & Noteworthy</a>
		for more information.</p>

        <!--
		<p><font size="+0"><b>Latest Milestone:</b> 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M7-200905051815/">
		TM 3.1M7</a></font>
		[<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M7-200905051815/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/3.1milestones/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M7-200905051815/buildNotes.php">
		build notes</a>]<br/>
		See the 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M7-200905051815/buildNotes.php">
		build notes</a> for new&amp;noteworthy and more information.</p>
		<br/>
		With M7, the <a href="http://wiki.eclipse.org/DSDP/TM/3.1_Ramp_down_Plan">
		Ramp-down phase</a> of release candidates towards
		the TM 3.1 release with Galileo end of June has been entered.
		-->
		</p>

		<p><font size="+2"><b>Upcoming Releases:</b></font>
		<ul><li><b>TM 3.1.2:</b> ETA Feb 26, 2010 with Eclipse <a href="http://wiki.eclipse.org/Galileo#SR2">Galileo SR2</a>
		        [<a href="http://wiki.eclipse.org/DSDP/TM/3.1_Ramp_down_Plan#Ramp_down_for_Galileo_SR2_.28Feb_24.2C_2010.29">Ramp-down Plan</a>]</li>
		    <li><b>TM 3.2:</b> ETA June, 2010 with Eclipse <a href="http://wiki.eclipse.org/Helios">Helios</a>
		        [<a href="http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.tm">Project Plan</a>]</li>
		</ul></p>

		<p>
		<u>Additional Links:</u><br/> 
		<a href="/dsdp/tm/about.php">more about target management &raquo;</a> <br/>
		<a href="/dsdp/tm/TM_press_text_2006_06.php">press text - jun 2006 &raquo;</a> </p>
		<div class="homeitem">
			<h3>Quick Links</h3>
				<ul class="midlist">
					<li><a href="http://wiki.eclipse.org/DSDP/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions, meeting notes and other "not so official" stuff there.</li>
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
				  <b>March 17-20, 2008</b>: <a href="http://www.eclipsecon.org/2008">EclipseCon 2008</a> - <ul>
				    <li><a href="http://www.eclipsecon.org/2008/?page=sub/&id=38" target="_blank">
				         <b>Remote access with the DSDP Target Management Project</b></a>, Tutorial by Martin Oberhuber (Wind River)
						(slides:  
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.ppt">PPT</a> 757 KB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.pdf">PDF</a> 639 KB) |
						(code:
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.ppt">tcf-0.2.0.zip</a> 3.7 MB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_Econ08_samples.zip">tmtutorial.zip</a> 465 KB)</li>
				    <li><a href="http://www.eclipsecon.org/2008/?page=sub/&id=39" target="_blank">
				         <b>Target Management New and Noteworthy</b></a>, Short Talk by Martin Oberhuber (Wind River), TM project lead
						(slides:  
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.ppt">PPT</a> 707 KB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.pdf">PDF</a> 581 KB)
					</ul></li>
				<li><b>March 14, 2008</b>: <a href="http://tmober.blogspot.com/2008/03/target-communication-framework-tcf.html">TCF</a>
					publicly announced</li>
				<li>
				  <b>October 9-11, 2007</b>: Eclipse Summit Europe 2007 -<ul>
				    <li><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=21" target="_blank">
				         <b>The DSDP Target Management Project</b></a>, long talk by Martin Oberhuber
				         (slides:  
				         <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2007-10-10_TM_ESE2007.ppt">PPT</a> |
				         <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2007-10-10_TM_ESE2007.pdf">PDF</a>)
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
				    (See the <a href="http://wiki.eclipse.org/DSDP/TM">Wiki</a> for actual
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
				<li><a href="http://www.eclipse.org/project-slides/TM_3.0_Release_Review.pdf" target="_self">
				    TM 3.0 Release Review Slides</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
				<li><a href="http://dsdp.eclipse.org/help/latest/index.jsp?topic=/org.eclipse.rse.doc.user/gettingstarted/g_start.html"
					target="_self">TM 3.0 Tutorial</a></li>
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases</a></li>
				<li><a href="/dsdp/tm/development/plan.php">TM Project Plan</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>What's New</h6>
			<ul><li>Feb 26th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1.2-201002152323/">TM 3.1.2</a> released</li>
			    <li>Sep 25th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1.1-200909160905/">TM 3.1.1</a> released</li>
			    <li>Jun 25th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.1-200906171400/">TM 3.1</a> released</li>
			    <li>Feb 18th: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/">TM 3.0.3</a> Service Release</li>
			    <li>Mar 17th: <a href="http://www.eclipsecon.org/2008/?page=sub/&id=38" target="_blank">TM Tutorial</a> at EclipseCon</li>
				<li>Mar 14th: <a href="http://tmober.blogspot.com/2008/03/target-communication-framework-tcf.html">TCF</a> publicly announced</li>
				<li>Apr 12th: 63 people registered at <a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
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
