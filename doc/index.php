<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# doc/index.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: DSDP-TM developer documents index page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "DSDP-TM Developer Documents";
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

    	<h2>Use Cases</h2>
    	<ul>
    	<li><a href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">DSDP-TM Use Cases v1.1c.pdf</a></li>
    	<li><a href="/dsdp/tm/doc/nucleus_edge_target_usecase.pdf">nucleus edge target usecase.pdf</a></li>
    	</ul>

		<h2>Design Documents</h2>
		<ul>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt">DSDP-TM Overview (ppt)</a></li>
		<li><a href="/dsdp/tm/doc/DSDPTM_Design_Proposal_v0.3.pdf">DSDP-TM Design Proposal v0.3.pdf</a></li>
		<li><a href="/dsdp/tm/doc/DSDPTM_Target_Connection_Adapter_Proposal.pdf">DSDP-TM Target Connection Adapter Proposal.pdf</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Brainstorming_2005-10-14.htm">Brainstorming Notes from Chicago Meeting</a></li>
		</ul>

		<h2>Presentations</h2>
		<ul>
    	<li>Eclipse Summit Europe 2006-9-29 
    		<a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">
      		TM Overview Slides (PPT: 314k)</a>
    	  	| <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf">(PDF: 298k)</a></li>
		<li><a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt">TM 1.0 Release Review Slides (PPT: 248k)</a>
		   | <a href="/projects/slides/TM_1.0_Release_Review_v3.pdf">(PDF: 1MB)</a></li>
		<li>EclipseCon 2006: 
		   <a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-3-22_EclipseCon_Target_Management.ppt">
		   Using and Extending the DSDP Target Management Framework (PPT: 850k)</a>
		   | <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=287">(Zipped PPT: 559k)</a></li>
		<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf">
		    IBM RSE Presentation</a></li>
		</ul>

		<h2>Older Meeting Notes (Newer notes are on the <a href="http://wiki.eclipse.org/index.php/DSDP/TM">Wiki</a>)</h2>
		<ul>
		<h4>CDT Conference Ottawa, 2005 October 25-26</h4>
		<ul>
		<li><a href="/dsdp/tm/conferences/2005_CDT_Conference_DSDP_Update.ppt">DSDP Update at CDT Conference (ppt)</a></li>
		</ul>
		
		<h4>F2F Meeting Chicago, 2005 October 12-13</h4>
		<ul>
		<li><a href="/dsdp/tm/meetingnotes/ff01_chicago/2005-10-12_Chicago_TM_MeetingNotes.htm">Meeting Notes</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Brainstorming_2005-10-14.htm">Brainstorming Notes</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/Eclipse_IP_Due_Diligence.ppt">Eclipse IP Due Diligence (ppt)</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt">DSDP-TM Overview (ppt)</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_DD_Borderline.ppt">On the Borderline between Target Management and Debugging (ppt)</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_DebuggerBackend.ppt">WR Debugger Backend Interface Proposal (ppt)</a></li>
	    <li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_TCA.ppt">Target Connection Adapter Proposal (ppt)</a></li>
		</ul>
		
		<h4>Phone Meeting Notes</h4>
		<ul>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20051107.htm">2005-11-07 Phone Conference</a></li>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050926.pdf">2005-09-26 Phone Conference</a><br>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050829.pdf">2005-08-29 Phone Conference</a><br>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050808.pdf">2005-08-08 Phone Conference</a><br>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050718.pdf">2005-07-18 Phone Conference</a><br>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050627.pdf">2005-06-27 Phone Conference</a><br>
		<li><a href="/dsdp/tm/meetingnotes/DSDP-TM_MeetingNotes_20050613.pdf">2005-06-13 Phone Conference</a><br>
		</ul>
		<p/>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"
					target="_self">TM Overview Slides</a></li>
				<li><a href="/dsdp/tm/doc/TM_1.0_Release_Review_v3.ppt" target="_self">
				    TM 1.0 Release Review Slides</a></li>				
			    <li><a href="http://wiki.eclipse.org/index.php/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf"
					target="_self">IBM RSE Presentation</a></li>
				<!-- <li><a href="/dsdp/tm/development/index.php">Developer Resources</a></li> -->
				<li><a href="http://wiki.eclipse.org/index.php/RSE_2.0_Planning"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
