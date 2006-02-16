<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-01
	#
	# Description: Contributors, Committers and Lead of Target Management Project
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "DSDP-TM Project Contributors";
	$pageKeywords	= "device, target, contributor, committer, lead, author, developer";
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
		<div class="homeitem3col">
		<h3>Target Management Lead</h3>
		<li><b>Martin Oberhuber, Wind River Systems</b> (martin.oberhuber at windriver.com)<br/>
			Martin is the overall project lead for the Target Management Project,
			and in this role he also serves on the DSDP Project Management Council (PMC).
			As a software developer and architect, Martin is responsible for the
			current Target Manager component in Wind River Workbench.<br/>
			Martin holds an MS degree in Telematics from the University
			of Technology Graz/Austria, and has been working on source code analysis
			and tools development since 1999.<br/>
			<a href="http://wiki.eclipse.org/index.php/User:Moberhuber">more about Martin Oberhuber &raquo;</a>
			</li>
		<li><b>David Dykstal, IBM</b> (david_dykstal at us.ibm.com)<br/>
		 	David is the Project Lead for the IBM Remote Systems Explorer,
		 	and thus plays a key role in all activities around RSE.<br/>
		 	David has worked either for or with IBM for over 28 years,
		 	including a significant stint with Object Technology International.
		 	Dave has worked on compilers, user interfaces, database tools, and IDE&#39;s.		
		</div>

		<div class="homeitem3col">
		<h3>Committers (in alphabetical order)</h3>
		<ul class="midlist">
			<li><b>David Dykstal</b>, IBM</li>
			<li><b>David McKnight</b>, IBM</li>
			<li><b>Martin Oberhuber</b>, Wind River</li>
			<li><b>Michael Scharf</b>, Wind River</li>
			<li><b>Uwe Stieber</b>, Wind River</li>
		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Contributors (in alphabetical order)</h3>
		Since we do not have any code contributions yet, we
		list those people that have been active in the TM
		face-to-face meetings and phone conferences so far:
		<ul class="midlist">
			<li><b>Alan Boxall</b>, IBM Distributed Debugger</li>
			<li><b>Mark Bozeman</b>, Accelerated Technology</li>
			<li><b>Felix Burton</b>, Wind River</li>
			<li><b>George Clark</b>, Accelerated Technology</li>
			<li><b>John Cortell</b>, FreeScale</li>
			<li><b>Paul Gingrich</b>, TI</li>
			<li><b>David Inglis</b>, QNX</li>
			<li><b>Peter Lachner</b>, Intel</li>
			<li><b>John Leier</b>, Digi</li>
			<li><b>Mark Littlefield</b>, Curtiss-Wright</li>
			<li><b>Pierre-Alexandre Masse</b>, Montavista</li>
			<li><b>Ewa Matejska</b>, PalmSource</li>
			<li><b>Javier Montalvo</b>, Symbian</li>
			<li><b>Victor Palau</b>, Symbian</li>
			<li><b>Daymon Rogers</b>, FreeScale</li>
			<li><b>Matthew Scarpino</b>, Star Bridge Systems</li>
			<li><b>Doug Schaefer</b>, QNX</li>
			<li><b>Aaron Spear</b>, Accelerated Technology</li>
			<li><b>Neil Taylor</b>, Symbian</li>
			<li><b>Darian Wong</b>, Curtiss-Wright</li>
  		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a
					href="doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="meetingnotes/ff01_chicago/DSDPTM_Overview.ppt"
					target="_self">TM Overview Presentation</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf"
					target="_self">IBM RSE Presentation</a></li>
				<!-- <li><a href="development/index.php">Developer Resources</a></li> -->
				<li><a href="doc/index.php">Developer Documents</a></li>
				<li><a href="/dsdp/tm/development/plan.php"
					target="_self">TM Project Plan</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
