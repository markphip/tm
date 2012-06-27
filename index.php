<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: TM main page
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
		 </p>
		 
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
		<a href="http://download.eclipse.org/tm/downloads/drops/R-3.4-201205300905/">
		TM 3.4</a></font>
		[<a href="http://download.eclipse.org/tm/downloads/drops/R-3.4-201205300905/">downloads</a> 
		| <a href="http://download.eclipse.org/tm/updates/3.4/">update site</a>
		| <a href="/tm/development/relnotes/3.4/readme_tm_3.4.html">release notes</a>
		]<br/>
<!--
		TM 3.4.1 is a service release with 22 bugs fixed compared to TM 3.4.<br/>
-->
		TM 3.4 highlights include tested Eclipse 4.2 (Juno) support, Equinox secure 
		storage support for passwords, and selectable encodings for the standalone
		Terminal.<br/>
		It is fully compatible with TM 3.2 and later, and runs on Eclipse 3.4 (Ganymede) 
		and later. Look at the <a href="/tm/tutorial/index.php">Getting Started Page</a>,
		the build notes and the
		<a href="/tm/development/relnotes/3.4/tm-news-3.4.html">TM 3.4 New & Noteworthy</a>
		for more information.</p>
<!--
		<p><font size="+0"><b>Latest Milestone:</b> 
		<a href="http://download.eclipse.org/tm/downloads/drops/S-3.4RC1-201205221345/">
		TM 3.4RC1</a></font>
		[<a href="http://download.eclipse.org/tm/downloads/drops/S-3.4RC1-201205221345/">downloads</a> 
		| <a href="http://download.eclipse.org/tm/updates/3.4milestones/">update site</a>
		| <a href="http://download.eclipse.org/tm/downloads/drops/S-3.4RC1-201205221345/buildNotes.php">
		build notes</a>]<br/>
		TM 3.4RC1 contains several bugfixes, and a new version of Apache Commons Net. See the 
		<a href="http://download.eclipse.org/tm/downloads/drops/S-3.4RC1-201205221345/buildNotes.php">
		build notes</a> for new&amp;noteworthy and more information.
-->
		<!-- TODO Enable for ramp-down
		<br/>
		With M7, the <a href="http://wiki.eclipse.org/TM/3.2_Ramp_down_Plan">
		Ramp-down phase</a> of release candidates towards
		the TM 3.2 release with Helios end of June has been entered.
		-->
		</p>

		<p><font size="+2"><b>Upcoming Releases:</b></font>
		<!--
		<ul><li><b>TM 3.3.2:</b> ETA Feb 23, 2012 with Eclipse <a href="http://wiki.eclipse.org/Indigo">Indigo SR2</a>
		        [<a href="http://wiki.eclipse.org/TM/3.3_Ramp_down_Plan#Ramp_down_for_Indigo_SR2_.28tentatively_Feb_23.2C_2012.29">Project Plan</a>]</li>
		</ul>
		-->
		<ul><li><b>TM 3.4.1:</b> ETA September 28, 2012 with Eclipse <a href="http://wiki.eclipse.org/Juno">Juno SR1</a>
		        [<a href="http://www.eclipse.org/projects/project_summary.php?projectid=tools.tm">Project Plan</a> | 
		         <a href="http://wiki.eclipse.org/TM/3.4_Ramp_down_Plan">Ramp-down plan</a>]</li>
		</ul>
		</p>

		<p>
		<u>Additional Links:</u><br/> 
		<a href="/tm/about.php">more about target management &raquo;</a> <br/>
		<a href="/tm/TM_press_text_2006_06.php">press text - jun 2006 &raquo;</a> </p>
		<div class="homeitem">
			<h3>Quick Links</h3>
				<ul class="midlist">
					<li><a href="http://wiki.eclipse.org/TM" target="_blank"><b>Wiki</b></a> | We use the Wiki extensively for collaboration. Find ongoing discussions, meeting notes and other "not so official" stuff there.</li>
					<li><a href="news://news.eclipse.org/eclipse.tm" target="_blank"><b>Newsgroup</b></a> | For general questions and community discussion (<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tm">Web access</a>, <a href="http://dev.eclipse.org/newslists/news.eclipse.tm/maillist.html">archive</a>).</li>
					<li><a href="http://dev.eclipse.org/mailman/listinfo/tm-dev" target="_blank"><b>Mailing List</b></a> | For project development discussions.</li>
					<li><a href="/tm/development/bug_process.php" target="_blank"><b>Bugs</b></a> 
					   | View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					   | <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit new</a> bugs
					   | Request an <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">enhancement</a>
					</li>
					<li><a href="/tm/doc/TM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management</a></li>
			    	<li><a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">
      					<b>Architectural Overview</b></a>
    	  				(<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  				| <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  			</li>
					<li><a href="/tm/development/plan.php"><b>TM Project Plan</b></a></li>
					<li><a href="/tools/eclipsetools-charter.php"><b>Tools Project Charter</b></a></li>
		</div>
		<div class="homeitem">
			<h3>Events</h3>
			<ul class="midlist">
				<li>Monthly developer phone conference, every 1st wednesday of the month, 9am PST
				    (See the <a href="http://wiki.eclipse.org/TM">Wiki</a> for actual
				    agenda and details)</li>
				<li>
				  <b>March 17-20, 2008</b>: <a href="http://www.eclipsecon.org/2008">EclipseCon 2008</a> - <ul>
				    <li><a href="http://www.eclipsecon.org/2008/?page=sub/&id=38" target="_blank">
				         <b>Remote access with the Target Management Project</b></a>, Tutorial by Martin Oberhuber (Wind River)
						(slides:  
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_ECon08.ppt">PPT</a> 757 KB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_ECon08.pdf">PDF</a> 639 KB) |
						(code:
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/tcf-0.2.0.zip">tcf-0.2.0.zip</a> 3.7 MB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_Econ08_samples.zip">tmtutorial.zip</a> 465 KB)</li>
				    <li><a href="http://www.eclipsecon.org/2008/?page=sub/&id=39" target="_blank">
				         <b>Target Management New and Noteworthy</b></a>, Short Talk by Martin Oberhuber (Wind River), TM project lead
						(slides:  
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Short_ECon08.ppt">PPT</a> 707 KB |
						<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Short_ECon08.pdf">PDF</a> 581 KB)
					</ul></li>
				<li>
				  <b>October 9-11, 2007</b>: Eclipse Summit Europe 2007 -<ul>
				    <li><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&id=21" target="_blank">
				         <b>The Target Management Project</b></a>, long talk by Martin Oberhuber
				         (slides:  
				         <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.ppt">PPT</a> |
				         <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.pdf">PDF</a>)
				         </li>
				    </ul></li>
				<li><b>April 12, 2007</b>: 
				  <a href="http://live.eclipse.org/node/229">Webinar</a>:
				  TM goals, architecture, future plans and online demo
				  (<a href="http://live.eclipse.org/node/229">50 minute full recording</a> |
				  <a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt">PPT slides</a>)
				  </li> 
				<li><b>Sept. 27, 2006</b>: TM passed its 1.0 Release Review. The Slides are an interesting read
				    for everyone (Slides as  
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_1.0_Release_Review_v3.ppt">PPT</a> | 
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_1.0_Release_Review_v3a.pdf">PDF</a>).</li>
			</ul>
		</div>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a href="/tm/tutorial/index.php"
					target="_self">TM Getting Started</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"
					target="_self">TM Overview Slides</a></li>
				<li><a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=217246" target="_self">
				    TM 3.4 Release Review Slides</a></li>
				<li><a href="http://wiki.eclipse.org/TM/3.3_Release_Summary" target="_self">
				    TM 3.3 Release Summary</a></li>
<!--
				<li><a href="http://eclipse.org/project-slides/Helios/TM_Helios_Release.pdf" target="_self">
				    TM 3.2 Release Review Slides</a></li>
-->
				<li><a
					href="/tm/doc/TM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases</a></li>
				<li><a href="/tm/development/plan.php">TM Project Plan</a></li>
			</ul>
		</div>
		
		<div class="sideitem">
			<h6>What's New</h6>
			<ul>
				<li>Jun 27th: <a href="http://download.eclipse.org/tm/downloads/drops/R-3.4-201205300905/">TM 3.4</a> released</li>
				<li>Feb 24th: <a href="http://download.eclipse.org/tm/downloads/drops/R-3.3.2-201202061000/">TM 3.3.2</a> released</li>
				<li>Feb 2011: <a href="http://download.eclipse.org/tm/downloads/drops/R-3.2.2-201102130444/">TM 3.2.2</a> released</li>
			    <li>Feb 2010: <a href="http://download.eclipse.org/tm/downloads/drops/R-3.1.2-201002152323/">TM 3.1.2</a> released</li>
			    <li>Mar 2008: <a href="http://www.eclipsecon.org/2008/?page=sub/&id=38" target="_blank">TM Tutorial</a> at EclipseCon</li>
				<li>Apr 2007: 63 people registered at <a href="http://live.eclipse.org/node/229">TM Webinar</a></li>
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
