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
		<h1 style="font-size:40px">Target Management</h1>
		<br/>
		<img src="images/tm-logo.gif" alt="tm-logo" width="412" height="297"/>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li>
					<a href="/dsdp/dsdp-charter.php"><b>DSDP Project Charter</b></a>
				</li>
				<li>
					<a href="/tm/development/bug_process.php" target="_blank"><b>Bugs</b></a> 
					| View <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">all open</a> issues
					| <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit new</a> bugs
					| Request an <a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">enhancement</a>
				</li>
				<li>
					<a href="/tm/doc/TM_Use_Cases_v1.1c.pdf"><b>Use cases</b></a> and requirements for Target Management
				</li>
			    <li>
			    	<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"><b>Architectural Overview</b></a>
    	  			(<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT</a>
    	  			| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">PDF</a>).
    	  		</li>
			</ul>
		</div>
	</div>

	<div id="midcolumn" style="width:740px">
		<p>
			The Target Management project provides data models and frameworks to configure and manage
			remote systems, their connections, and their services. Our main offering is the Remote System
			Explorer (RSE), which integrates any sort of heterogeneous
			remote resources under a single, consistent UI and allows transparent working on remote computers
			just like the local one. Other offerings include lightweight terminal support.
		</p>
		<p>
			<b>Latest Release:</b>
			<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/">TM 3.0.3</a>
			[ <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/">Downloads</a> 
			| <a href="http://download.eclipse.org/dsdp/tm/updates/3.0/">Update Site</a>
			| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-3.0.3-200902181300/buildNotes.php">Build Notes</a>
			| <a href="/tm/development/relnotes/3.0/tm-news-3.0.html">New &amp; Noteworthy</a>
			]
			<br/>
			Compatible with TM 3.0. Runs on Eclipse 3.4 (Ganymede) and Eclipse 3.3 (Europa).
		</p>
		<p>
			<b>Latest Milestone:</b> 
			<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/">TM 3.1M6</a>
			[ <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/">Downloads</a> 
			| <a href="http://download.eclipse.org/dsdp/tm/updates/3.1milestones/">Update Site</a>
			| <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.1M6-200903192015/buildNotes.php">Build Notes</a>
			]
			<br/>
			Part of the <a href="http://wiki.eclipse.org/Galileo">Galileo</a> release train.
		</p>
		<p>
			Developer phone conferences are the first Wednesday of every month, 9am PST. See the 
			<a href="http://wiki.eclipse.org/DSDP/TM/Meeting_Notes">Meeting Notes</a> on the Wiki for actual agenda and details.
			We also maintain a 
			<a href="http://www.google.com/calendar/embed?src=vn70im36r00qeusu8nme50cils@group.calendar.google.com&ctz=Canada/Toronto">Google Calendar</a>
			for our meetings.
		</p>

		<h2 style="padding-top:20px">News</h2>
		<ul>
			<li>March 14, 2008</b>: <a href="http://tmober.blogspot.com/2008/03/target-communication-framework-tcf.html"> TCF </a> publicly announced</li>
			<li>February 25, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/R-2.0.3-200802251530/"> TM 2.0.3 </a> Service Release</li>
			<li>February 18, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M5-200802181400/"> TM 3.0M5 </a> released</li>
			<li>January 7, 2008: <a href="http://download.eclipse.org/dsdp/tm/downloads/drops/S-3.0M4-200801071150/"> TM 3.0M4 </a> released</li>
		</ul>

		<h2 style="padding-top:20px">Presentations</h2>
		<p>
			<a href="http://www.eclipsecon.org/2008/?page=sub/&amp;id=38" target="_blank">Remote access with the DSDP Target Management Project</a>
			<br/>Tutorial by Martin Oberhuber (Wind River), TM project lead
			<br/>Given at EclipseCon 2008
			<br/>slides: <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.ppt">PPT</a> 757 KB
			| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.pdf">PDF</a> 639 KB
			<br/>code: <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_ECon08.ppt">tcf-0.2.0.zip</a> 3.7 MB
			| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Tutorial_Econ08_samples.zip">tmtutorial.zip</a> 465 KB
		</p>
		<p>
			<a href="http://www.eclipsecon.org/2008/?page=sub/&amp;id=39" target="_blank"><b>Target Management New and Noteworthy</b></a>
			<br/>Short Talk by Martin Oberhuber (Wind River), TM project lead
			<br/>Given at EclipseCon 2008
			<br/>slides: <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.ppt">PPT</a> 707 KB
			| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_Short_ECon08.pdf">PDF</a> 581 KB
		</p>
		<p>
			<a href="presentations/index.php">More...</a>
		</p>

	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

