<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		David Dykstal
	# Date:			2009-04-01
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Presentations";
	$pageKeywords	= "device, target";
	$pageAuthor		= "David Dykstal";
	
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
		<h2>March 17-20, 2008: <a href="http://www.eclipsecon.org/2008"> EclipseCon 2008</a></h2> 
		<p>
			<a href="http://www.eclipsecon.org/2008/?page=sub/&amp;id=38" target="_blank"> <b> Remote access with the Target Management Project</b></a>, Tutorial by Martin Oberhuber (Wind River) (slides: <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_ECon08.ppt"> PPT </a> 757 KB | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_ECon08.pdf"> PDF </a> 639 KB) | (code: <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_ECon08.ppt"> tcf-0.2.0.zip </a> 3.7 MB | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Tutorial_Econ08_samples.zip"> tmtutorial.zip </a> 465 KB) 
		</p>
		<p>
			<a href="http://www.eclipsecon.org/2008/?page=sub/&amp;id=39" target="_blank"> <b> Target Management New and Noteworthy</b></a>, Short Talk by Martin Oberhuber (Wind River), TM project lead (slides: <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Short_ECon08.ppt"> PPT </a> 707 KB | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_Short_ECon08.pdf"> PDF </a> 581 KB) 
		</p>
		<h2>October 9-11, 2007: Eclipse Summit Europe 2007</h2> 
		<p>
			<a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&amp;id=21" target="_blank"> <b>The Target Management Project</b></a>, long talk by Martin Oberhuber (slides: <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.ppt">PPT</a> | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.pdf">PDF</a>) 
		</p>
		<h2>April 12, 2007: Webinar</h2> 
		<p>
			TM goals, architecture, future plans and online demo
			<br />
			<a href="http://live.eclipse.org/node/229">50 minute full recording </a>
			<br />
			<a href="http://www.eclipse.org/projects/slides/TM_Webinar_Slides_070412.ppt"> PPT slides</a> 
		</p>
		<h2>October 9-11, 2007</b>: Eclipse Summit Europe 2007</h2> 
		<p>
			<a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=detail/&amp;id=21" target="_blank"> <b> The Target Management Project</b></a>, long talk by Martin Oberhuber (slides: <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.ppt"> PPT </a> | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2007-10-10_TM_ESE2007.pdf"> PDF</a>) 
		</p>
		<h2>March 5-8, 2007</b>: EclipseCon 2007</h2> 
		<p>
			<a href="http://www.eclipsecon.org/2007/index.php?page=sub/&amp;id=3651" target="_blank"> <b> TM Tutorial </b> </a> (includes <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3651"> slides and sample code</a>)
			<br />
			<a href="http://www.eclipsecon.org/2007/index.php?not_accepted=0&amp;page=sub/&amp;id=3781" target="_blank"> <b> Short Talk </b> </a> (includes <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=3781"> slides</a>) <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&amp;id=4135" target="_blank"> <b> Short Demo </b> </a> (includes <a href="http://eclipsezilla.eclipsecon.org/php/attachment.php?bugid=4135"> slides</a>) 
		</p>
		<h2>October 11, 2006: Eclipse Summit Europe - <a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=detail/&amp;id=26"> Talk by Michael Scharf on RSE</a></h2> 
		<p>
			TM Overview slides (<a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.ppt">PPT </a> | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"> PDF</a>)
			<br />
			DSDP Overview slides (<a href="http://www.eclipsecon.org/summiteurope2006/presentations/ESE2006_DSDP_Project_Update.pdf">PDF</a>) 
		</p>
		<h2>September 27, 2006: TM passed its 1.0 Release Review.</h2> 
		<p>
			The Slides are an interesting read for everyone (Slides as <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_1.0_Release_Review_v3.ppt"> PPT </a> | <a href="http://www.eclipse.org/downloads/download.php?file=/tm/presentations/TM_1.0_Release_Review_v3a.pdf"> PDF</a>). 
		</p>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6> 
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
