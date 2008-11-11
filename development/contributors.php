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
			<a href="http://wiki.eclipse.org/User:Moberhuber">more about Martin Oberhuber &raquo;</a>
			</li>
		<li><b>David Dykstal, IBM</b> (david_dykstal at us.ibm.com)<br/>
		 	David is the Project Lead for the IBM Remote System Explorer,
		 	and thus plays a key role in all activities around RSE.<br/>
		 	David has worked either for or with IBM for over 28 years,
		 	including a significant stint with Object Technology International.
		 	Dave has worked on compilers, user interfaces, database tools, and IDE&#39;s.		
		</div>

		<div class="homeitem3col">
		<h3>Committers (alphabetic order by last name)</h3>
		<ul class="midlist">
			<li><b>Felix Burton</b>, Wind River</li>
			<li><b>Xuan Chen</b>, IBM</li>
			<li><b>Kevin Doyle</b>, IBM</li>
			<li><b>Anna Dushistova</b>, MontaVista</li>
			<li><b>David Dykstal</b>, IBM</li>
			<li><b>Radoslav Gerganov</b>, ProSyst</li>
			<li><b>David McKnight</b>, IBM</li>
			<li><b>Martin Oberhuber</b>, Wind River</li>
			<li><b>Michael Scharf</b>, Wind River</li>
			<li><b>Uwe Stieber</b>, Wind River</li>
			<li><b>Eugene Tarassov</b>, Wind River</li>
		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Former Committers (alphabetic order by last name)</h3>
		<ul class="midlist">
			<li><b>Javier Montalvo-Orús</b>, Symbian</li>
			<li><b>Kushal Munir</b>, IBM</li>
			<li><b>Ted Williams</b>, Wind River</li>
		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Contributors (in alphabetical order)</h3>
		This is the list of people who have made code contributions to the 
		TM Project on Bugzilla so far, with their code actually being 
		merged into the TM codebase in CVS. The list is sorted alphabetically
		by last name:
		<ul class="midlist">
		    <li><b>Sean Adams</b>, Cisco</li>
			<li><b>Michael Berger</b>, IBM</li>
			<li><b>Johann Draschwandtner</b>, Wind River</li>
			<li><b>Sheldon D&acute;Souza</b>, Celunite</li>
			<li><b>Daniel Friederich</b>, Freescale</li>
			<li><b>Jacob Garcowski</b>, IBM</li>
			<li><b>Øyvind Harboe</b>, Zylin</li>
			<li><b>Rob Hasselbaum</b>, BEZ Systems, Inc</li>
			<li><b>Kenya Ishimoto</b>, IBM Japan</li>
			<li><b>Mikhail Kalugin</b>, Xored Software</li>
			<li><b>Yu-Fen Kuo</b>, MontaVista</li>
			<li><b>Renan Le Padellec</b>, Wind River</li>
			<li><b>Johnson Ma</b>, Wind River</li>
			<li><b>Rupen Mardirossian</b>, IBM</li>
			<li><b>Ewa Matejska</b>, ACCESS Systems (formerly PalmSource)</li>
			<li><b>Willian Mitsuda</b>, (private)</li>
			<li><b>Benjamin Muskalla</b>, Innoopract</li>
			<li><b>Masao Nishimoto</b>, IBM</li>
			<li><b>Tobias Schwarz</b>, Wind River</li>
			<li><b>Remy Chi Jian Suen</b>, IBM</li>
			<li><b>Timur Shipilov</b>, Xored Software</li>
			<li><b>Andrei Sobolev</b>, Xored Software</li>
			<li><b>Ruslan Sychev</b>, Xored Software</li>
			<li><b>Noriaki Takatsu</b>, IBM</li>
			<li><b>Olivier Thomann</b>, IBM</li>
			<li><b>Lothar Werzinger</b>, Tradescape Inc.</li>
			<li><b>Don Yantzi</b>, IBM</li>
			<li><b>Richie Yu</b>, IBM</li>
  		</ul>
		</div>

		<div class="homeitem3col">
		<h3>Other interested parties</h3>
		We also honor the contributions that people make in the form of bug reports,
		good questions on the mailing list, or other discussions. These are partially
		reflected in the following
		<ul>
  		<li><b><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=resolution&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&format=table&action=wrap&negate0=1&field0-0-0=reporter&type0-0-0=equals&value0-0-0=martin.oberhuber%40windriver.com&field0-0-1=reporter&type0-0-1=equals&value0-0-1=Javier.MontalvoOrus%40gmail.com&field0-0-2=reporter&type0-0-2=equals&value0-0-2=david_dykstal%40us.ibm.com&field0-0-3=reporter&type0-0-3=equals&value0-0-3=dmcknigh%40ca.ibm.com&field0-0-4=reporter&type0-0-4=equals&value0-0-4=kjdoyle%40ca.ibm.com&field0-0-5=reporter&type0-0-5=equals&value0-0-5=Michael.Scharf%40windriver.com&field0-0-6=reporter&type0-0-6=equals&value0-0-6=eugene.tarassov%40windriver.com&field0-0-7=reporter&type0-0-7=equals&value0-0-7=uwe.stieber%40windriver.com&field0-0-8=reporter&type0-0-8=equals&value0-0-8=xuanchen%40ca.ibm.com&field0-0-9=reporter&type0-0-9=equals&value0-0-9=r_gerganov%40prosyst.bg&field0-0-10=reporter&type0-0-10=equals&value0-0-10=felix.burton%40windriver.com&field0-0-11=reporter&type0-0-11=equals&value0-0-11=ted.williams%40windriver.com&field0-0-12=reporter&type0-0-12=equals&value0-0-12=kmunir%40ca.ibm.com">
  		Bugzilla Report</a></b> - all bug reporters except committers</li>
  		</ul> 
		Apart from plain bugs, here is the list of companies and people who have 
		been active in the TM face-to-face meetings and phone conferences so far,
		or made interesting contributions on the TM Mailing List.
		The list is sorted alphabetically by company first, then by last name:
		<ul class="midlist">
			<li><b>Accelerated Technology</b>:
			  Mark Bozeman, George Clark, Aaron Spear</li>
			<li><b>Cisco</b>: Hamang Lavana</li>
			<li><b>Curtiss-Wright Controls</b>: Mark Littlefield, Darian Wong</li>
			<li><b>Digi</b>: John Leier</li>
			<li><b>FreeScale</b>: Kirk Beitz, John Cortell, Daymon Rogers</li>
			<li><b>IBM</b>: Alan Boxall, Denise Schmidt</li>
			<li><b>IBM / LANL</b>: Greg Watson</li>
			<li><b>Intel</b>: Peter Lachner</li>
			<li><b>Montavista</b>: Joe Green, Pierre-Alexandre Masse</li>
			<li><b>QNX</b>: Alex Chapiro, David Inglis, Doug Schaefer</li>
			<li><b>Star Bridge Systems</b>: Matthew Scarpino</li> 
			<li><b>Symbian</b>: Victor Palau, Neil Taylor</li>
			<li><b>TI</b>: Paul Gingrich</li> 
			<li><b>TU Munich</b>: Tianchao Li</li> 
			<li><b>Wind River</b>: Martin Gutschelhofer, Brian Nettleton</li>
			<li><b>Zend Technologies</b>: Yossi Leon, Yaron Mazor</li> 
  		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Getting started</h6>
			<ul>				
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/2006-9-29_SummitEurope_TMOverview.pdf"
					target="_self">TM Overview Slides</a></li>
				<li><a href="http://www.eclipse.org/project-slides/TM_3.0_Release_Review.pdf" target="_self">
				    TM 3.0 Release Review Slides</a></li>
				<li><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/tm/presentations/TM_2.0_Release_Review.ppt" target="_self">
				    TM 2.0 Release Review Slides</a></li>
			    <li><a href="http://wiki.eclipse.org/DSDP" 
			    	target="_self">DSDP Overview Diagrams</a></li>				
				<li><a
					href="/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf"
					target="_self">TM Use Cases Document</a></li>
				<li><a href="http://www.developer.ibm.com/isv/rational/rse_pres.pdf"
					target="_self">IBM RSE Presentation</a></li>
				<!-- <li><a href="/dsdp/tm/development/index.php">Developer Resources</a></li> -->
				<li><a href="/dsdp/tm/doc/index.php">Developer Documents</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
