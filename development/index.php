<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# development/index.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-10
	#
	# Description: DSDP-TM developer resources page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Developer Resources";
	$pageKeywords	= "developer,resources,device,target";
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
	
		<div class="homeitem">
			<h3>Development Tools</h3>
				<ul class="midlist">
					<li><b><a
						href="http://dev.eclipse.org/viewcvs/index.cgi?cvsroot=DSDP_Project">CVS Repository</a></b><br/>
						TM development is managed in 
						<!-- two CVS repositories:
						<ul class="midlist">
							<li>The <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=DSDP_Project">Core Repository</a>
						    <li>The <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE Repository</a>
						</ul>
						-->
						the <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE Repository</a>.
						Use the
						<a href="rse-anonymous.psf">rse-anonymous.psf</a> or
						<a href="rse-committer.psf">rse-committer.psf</a>
						project set to populate your workspace. See
						<a href="http://dev.eclipse.org/cvshowto.html">Using Eclipse with
						CVS</a> for instructions. A 
						<a href="http://download.eclipse.org/dsdp/tm/downloads/drops/N-changelog/index.html">
						CVS Changelog</a> is available.</li>
					<li><b><a
						href="http://www.eclipse.org/webtools/development/apiscanner/apiscanner.html">Eclipse API Scanner</a></b><br/>Describe the API of a component and scan plug-ins for API
						violations (from the <a href="http://www.eclipse.org/webtools"
						target="_top">WebTools</a> project).</li>
					<li><b><a href="http://www.eclipse.org/webtools/development/piitools/piitools.html">Check
						Unused Properties Tool</a></b> <br>
						Scan property files for unused messages (from the <a
							href="http://www.eclipse.org/webtools" target="_top">WebTools</a>
						project).</li>
					<li><b><a href="http://www.eclipse.org/eclipse/platform-core/downloads.html">Core
						Tools</a></b> <br>
						Useful utilities from the Platform team. Consider adding their
						<a href="http://www.eclipse.org/eclipse/platform-core/downloads.html#updates">
						update site</a> to your configuration.</li>
					<li><b><a
						href="http://wiki.eclipse.org/index.php/Platform-releng">Release Engineering</a></b> <br>
						See the instructions, FAQs and help from the Platform-Releng team.</li>
					<!-- Dashboard is currently not useful.
					<li><b><a
						href="http://www.eclipse.org/projects/dashboard/dashboard_detail.php?project=dsdp.tm">Project
						Dashboard</a></b> <br>
						View generated project statistics.</li>
					-->
					<li><b><a
						href="https://dev.eclipse.org/committers">Eclipse Committer
						Tools</a></b> <br>
						Information on infrastructure status, file path information,
						FAQs, etc. [login required]</li>
				</ul>
		</div>
		<div class="homeitem">
			<h3>Development Resources</h3>
				<ul class="midlist">
					<li><b><a href="/dsdp/tm/development/committer_howto.php">Committer HOWTO</a></b><br>
						Simple cookbook instructions for performing basic tasks properly.
						Committers need to follow check-in conventions and IP Due Diligence as outlined
						<a href="/dsdp/tm/development/committer_guide.php">here</a>. 
						</li>
					<li><b><a href="http://wiki.eclipse.org/index.php/API_Central">API Guidelines</a></b><br>
						Look <a href="http://help.eclipse.org/help30/topic/org.eclipse.platform.doc.isv/reference/misc/api-usage-rules.html">
						here</a> for general Eclipse API rules of engagement. We strive to achieve 
						<a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
						Eclipse Quality</a>, as outlined in the draft of
						<a href="http://www.eclipse.org/projects/dev_process/Eclipse%20Quality%20APIs%20v2.pdf">
						Eclipse Quality APIs</a>.
						</li>
					<li><b><a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">
					    Coding Conventions</a></b><br>
						Coding standards, naming conventions, and other
						guidelines used by the Platform. TM will use these conventions
						until such time as deviation is required.</li>
					<li><b><a href="/dsdp/tm/meetingnotes/ff01_chicago/DSDPTM_Overview.ppt" target="_self">
						Architectural Overview</a></b><br>
						A high level summary of the components and their architecture.</li>
					<li><b><a
							href="http://www.eclipse.org/dsdp/tm/doc/DSDPTM_Use_cases_v1.1c.pdf">Project
						Requirements</a></b> <br>
						Look here for a list of the project use cases and their
						priorities.</li>
					<li><b><a
						href="http://www.eclipse.org/dsdp/dsdp-charter.php">Charter</a></b>
						<br>
						As a DSDP subproject, the TM project abides by the
						<a href="/dsdp/dsdp-charter.php">DSDP Project charter</a> and the
						<a href="http://www.eclipse.org/projects/dev_process/Eclipse_Standard_TopLevel_Charter_v1.0.php">
						Eclipse Standard Charter</a>.</li>
					<li><b><a
							href="/dsdp/tm/development/contributors.php">Contributors
						and Committers</a></b> <br>
						List of TM Project contributors and committers.</li>
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
