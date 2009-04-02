<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Martin Oberhuber, Kevin Doyle, David Dykstal
	# Date:			2006-02-01
	# Updated: 		2008-01-25
	# Updated:      2009-01-25 dwd
	#
	# Description: DSDP-TM main page
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
		<img src="images/tm-logo.gif" alt="tm-logo" width="412" height="297"/>

		<p>The Target Management project creates data models and frameworks to configure and manage remote systems, their connections, and their services.
		Our main offering is the Remote System Explorer (RSE), which integrates any sort of heterogeneous remote resources under a single, consistent UI and allows transparent working on remote computers just like the local one. Other offerings include a lightweight Terminal and a Network Discovery framework.</p>

		<p>
		<b>Latest Release:</b>
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/">TM 3.0.3</a>
		[
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/3.0/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/buildNotes.php">build notes</a>
		<!--
		| <a href="/dsdp/tm/development/relnotes/3.0/readme_tm_3.0.html">release notes</a>
		-->
		]
		<br/>
		The TM 3.0.3 service release includes 12 distinct bug fixes and performance improvements.
		It is fully compatible with TM 3.0, and runs on Eclipse 3.4 (Ganymede) as well as 
		Eclipse 3.3 (Europa). Look at the
		<a href="/dsdp/tm/tutorial/index.php">Getting Started Page</a>,
		the build notes and the
		<a href="/dsdp/tm/development/relnotes/3.0/tm-news-3.0.html">TM 3.0 New & Noteworthy</a>,
		for more information.
		</p>

		<p>
		<b>Latest Milestone:</b> 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/">TM 3.1M6</a>
		[
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/">downloads</a> 
		| <a href="http://download.eclipse.org/dsdp/tm/updates/3.1milestones/">update site</a>
		| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/buildNotes.php">build notes</a>
		]
		<br/>
		See the 
		<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/buildNotes.php">
		build notes</a> for new&amp;noteworthy and more information.
		</p>
<!--
		With M7, the <a href="http://wiki.eclipse.org/TM_2.0_Ramp_down_Plan_for_Europa">
		Ramp-down phase</a> of release candidates towards
		the TM 2.0 release with Europa on June 29 has been entered.
-->

		<p>
		<b>Upcoming Release:</b>
		TM 3.1: ETA June 2009 with Eclipse 3.5 (<a href="http://wiki.eclipse.org/Galileo">Galileo</a>)
		[<a href="http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.tm">Project Plan</a>]
		</p>

		<p>
		Monthly developer phone conference, every 1st wednesday of the month, 9am PST (See the <a href="http://wiki.eclipse.org/DSDP/TM"> Wiki </a> for actual agenda and details)
		</p>


		<div id="homeitem">
			<h2>News</h2>
			<ul>
				<li>March 14, 2008</b>: <a href="http://tmober.blogspot.com/2008/03/target-communication-framework-tcf.html"> TCF </a> publicly announced</li>
				<li>February 25, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.3-200802251530/"> TM 2.0.3 </a> Service Release</li>
				<li>February 18, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M5-200802181400/"> TM 3.0M5 </a> released</li>
				<li>January 7, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M4-200801071150/"> TM 3.0M4 </a> released</li>
				<li>December 20, 2007: <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=210751"> TCF </a> has been approved by Eclipse Legal</li>
				<li>November 13, 2007: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.2-200711131300/"> TM 2.0.2 </a> Service Release</li>
				<li>September 28, 2007: <a href="http://tmober.blogspot.com/2007/09/tm-201-can-terminal-be-too-fast.html"> TM 2.0.1 </a> Service Release</li>
				<li>September 17-19, 2007: <a href="http://wiki.eclipse.org/DSDP/TM/Face-to-face_Meeting_Toronto_17-Sep-2007"> TM Planning Meeting and Coding Camp</a>, Toronto</li>
				<li>June 29, 2007: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0-200706270925/"> TM 2.0 </a> has been released!</li>
			</ul>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
					<li><a href="http://wiki.eclipse.org/DSDP/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions, meeting notes and other "not so official" stuff there.</li>
					<li><a href="news://news.eclipse.org/eclipse.dsdp.tm" target="_blank"><b>Newsgroup</b></a> | For general questions and community discussion (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.dsdp.tm">Web access</a>, <a href="http://dev.eclipse.org/newslists/news.eclipse.dsdp.tm/maillist.html">archive</a>).</li>
					<li><a href="http://dev.eclipse.org/mailman/listinfo/dsdp-tm-dev" target="_blank"><b>Mailing List</b></a> | For project development discussions.</li>
					<li><a href="/dsdp/tm/development/bug_process.php" target="_blank"><b>Bugs</b></a> 
					   | View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					   | <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit new</a> bugs
					   | Request an <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">enhancement</a>
					</li>
					<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management</li>
			    	<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">
      					<b>Architectural Overview</b></a>
    	  				(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  				| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  			</li>
					<li><a href="/dsdp/tm/development/plan.php"><b>TM Project Plan</b></a></li>
					<li><a href="/dsdp/dsdp-charter.php"><b>DSDP Project Charter</b></a></li>
			</ul>
		</div>
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

