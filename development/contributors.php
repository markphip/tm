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
			<li><b>Javier Montalvo-Orús</b>, Symbian</li>
			<li><b>Kushal Munir</b>, IBM</li>
			<li><b>Martin Oberhuber</b>, Wind River</li>
			<li><b>Michael Scharf</b>, Wind River</li>
			<li><b>Uwe Stieber</b>, Wind River</li>
		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Contributors (in alphabetical order)</h3>
		This is the list of people who have made code contributions to the 
		TM Project on Bugzilla so far. The list is sorted alphabetically
		by last name:
		<ul class="midlist">
			<li><b>Michael Berger</b>, IBM
			<li><b>Pierre-Alexandre Masse</b>, Montavista</li>
			<li><b>Ewa Matejska</b>, PalmSource</li>
  		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Other interested parties</h3>
		This is the list of companies and people who have been active
		in the TM face-to-face meetings and phone conferences so far.
		The list is sorted alphabetically by company first, then by last name:
		<ul class="midlist">
			<li><b>Accelerated Technology</b>:
			  Mark Bozeman, George Clark, Aaron Spear</li>
			<li><b>Curtiss-Wright Controls</b>: Mark Littlefield, Darian Wong</li>
			<li><b>Digi</b>: John Leier</li>
			<li><b>FreeScale</b>: Kirk Beitz, John Cortell, Daymon Rogers</li>
			<li><b>IBM Distributed Debugger</b>: Alan Boxall</li>
			<li><b>Intel</b>: Peter Lachner</li>
			<li><b>LANL</b>: Greg Watson</li>
			<li><b>Montavista</b>: Joe Green, Pierre-Alexandre Masse</li>
			<li><b>PalmSource</b>: Ewa Matejska</li> 
			<li><b>QNX</b>: David Inglis, Doug Schaefer</li>
			<li><b>Star Bridge Systems</b>: Matthew Scarpino</li> 
			<li><b>Symbian</b>: Javier Montalvo-Orús, Victor Palau, Neil Taylor</li>
			<li><b>TI</b>: Paul Gingrich</li> 
			<li><b>TU Munich</b>: Tianchao Li</li> 
			<li><b>Wind River</b>: Felix Burton, Brian Nettleton</li>
  		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
			    <li><a href="http://wiki.eclipse.org/index.php/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt"
					target="_self">TM Overview Presentation</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf"
					target="_self">IBM RSE Presentation</a></li>
				<!-- <li><a href="/dsdp/tm/development/index.php">Developer Resources</a></li> -->
				<li><a href="/dsdp/tm/doc/index.php">Developer Documents</a></li>
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
