<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# development/plan.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-10
	#
	# Description: DSDP-TM project plans
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Target Management Project Planning";
	$pageKeywords	= "development,project,plan,device,target,embedded,communication";
	$pageAuthor		= "Martin Oberhuber";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# "Proposal" background image: url('/proposals/proposal.gif')
	$extraHtmlHeaders = "<style>
body {  
background-image: url('/images/draft.gif');
background-repeat: repeat-y
}
</style>
	";
	# $App->AddExtraHtmlHeader($extraHtmlHeaders);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn"><br/>
		<h1>$pageTitle</h1>
		<!--
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td align="left"><h1>$pageTitle</h1></td>
					<td align="right"><img align="right" src="/tm/images/logo_banner.png" /></td>
				</tr>
			</tbody>
		</table><hr/>
		-->
		<div class="homeitem3col">
			<h3>Releases currently under development</h3>
    <ul>
    <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/tm/development/tm_plan_3_3.xml">Target Management Project 3.3 Plan</a><br>
        This document lays out the feature and API set for the Target Management 3.3 release. </li>
      <li><a href="/tm/development/bug_process.php"> Target Management Bug Process</a><br>
    	Queries for up-to-date status on plan items and bugs from Eclipse Bugzilla. </li>
      <li><a href="http://wiki.eclipse.org/TM_Future_Planning"> 
        TM Future Planning Wiki</a><br>
        Plan Incubator Wiki, holding ideas for future releases. 
      </li>
      <li><a href="http://wiki.eclipse.org/DSDP/TM"> DSDP/TM Wiki</a><br>
    	Target Management Wiki, linking to Technology Sub-Groups for breeding future ideas. </li>
    </ul>
      	</div>
		<div class="homeitem3col">
			<h3>Development Process</h3>
	<ul>
	<li><a href="/tm/development/">
		TM Development Home Page</a><br>
		Main page for Target Management Development Resources.</li>
	<li><a href="/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
    	Target Management Use Cases Document</a><br>
    	Requirements: Target Management Use Cases - dated but still current.</li>
	<li><a href="/tm/doc/index.php">
		Developer Documents</a><br>
		Target Management Development Documents.</li>
    </ul>
      	</div>
		<div class="homeitem3col">
			<h3>Historical information about past releases</h3>
	<ul>
    <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/tm/development/tm_plan_3_2.xml">Target Management Project 3.2 Plan</a><br>
        This document lays out the feature and API set for the Target Management 3.2 release. </li>
    <li><a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/tm/development/tm_plan_3_1.xml">Target Management Project 3.1 Plan</a><br>
        This document lays out the feature and API set for the Target Management 3.1 release. </li>
    <li><a href="tm_project_plan_3_0.html"> Target Management Project 3.0 Plan</a><br>
        This document lays out the feature and API set for the Target Management 3.0 release. </li>
    <li><a href="tm_project_plan_2_0.html"> Target Management Project 2.0 Plan</a><br>
        This document lays out the feature and API set for the Target Management 2.0 release. </li>
	<li><a href="tm_project_plan_1_0.html"> Target Management Project 1.0 Plan</a><br>
        This document lays out the feature and API set for the Target Management 1.0 release. </li>
    </ul>
    	</div>
	</div>
</div>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
