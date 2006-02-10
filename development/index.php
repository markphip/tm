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
	$pageTitle 		= "DSDP-TM Developer Resources";
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
						href="http://dev.eclipse.org/viewcvs/index.cgi">CVS Repository</a></b><br/>
						TM development is managed in rwo CVS repositories:
						<ul class="midlist">
							<li>The <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=dsdp">Core Repository</a>
						    <li>The <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=dsdp">RSE Repository</a>
						</ul>
						Both "pserver" and "extssh" are supported. See <a
							href="http://dev.eclipse.org/cvshowto.html">Using Eclipse with
						CVS</a> for instructions.</li>
					<li><b><a
						href="http://www.eclipse.org/webtools/development/apiscanner/apiscanner.html">Eclipse API Scanner</a></b><br/>Describe the API of a component and scan plug-ins for API
						violations (from the <a href="http://www.eclipse.org/webtools"
						target="_top">WebTools</a> project).</li>
					<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target+Management"><b>Bug Reports</b></a><br/>Eclipse uses <a target="_top"
						href="http://bugzilla.mozilla.org/">Bugzilla</a> for bug
						tracking. View <a
							href="http://dev.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&product=Target+Management">all
						open</a> TM bug reports or <a target="_top"
							href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target+Management">open
						new</a> bugs. View <a href="https://bugs.eclipse.org/bugs/describecomponents.cgi?product=Target+Management">this</a> report to see a list of component owners.</li>
					<li><b><a href="http://www.eclipse.org/webtools/development/piitools/piitools.html">Check
						Unused Properties Tool</a></b> <br>
						Scan property files for unused messages (from the <a
							href="http://www.eclipse.org/webtools" target="_top">WebTools</a>
						project).</li>
					<li><b><a
							href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target+Management&bug_severity=enhancement">Feature
						Requests</a></b> <br>
						Use Bugzilla to submit new features using severity setting of
						'enhancement'.</li>
					<li><b><a
							href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-core-home/downloads.html">Core
						Tools</a></b> <br>
						Useful utilities from the Platform team. Consider adding their
						update <a
							href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-core-home/updates
						">site</a>
						to your configuration.</li>
					<li><b><a
						href="http://download.eclipse.org/eclipse/downloads/drops/R-3.1-200506271435/download.php?dropFile=org.eclipse.releng.tools_3.1.0.zip">Release
						Engineering Tool</a></b> <br>
						Use this tool with the project&#39;s release engineering build
						process.</li>
					<li><b><a
						href="http://www.eclipse.org/org/processes/dashboard/dashboard_detail.php?project=Target+Management">Project
						Dashboard</a></b> <br>
						View generated project statistics.</li>
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
					<li><b><a
							href="http://help.eclipse.org/help30/topic/org.eclipse.platform.doc.isv/reference/misc/api-usage-rules.html">API
						Guidelines</a></b> <br>
						Look <a
							href="http://help.eclipse.org/help30/topic/org.eclipse.platform.doc.isv/reference/misc/api-usage-rules.html">here</a>
						for general Eclipse API rules of engagement. Other resources
						include a draft of <a
							href="http://www.eclipse.org/org/processes/Eclipse%20Quality%20APIs%20v2.pdf">Eclipse
						Quality APIs</a>, and works by Jim des Rivieres: <a
							href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
						Java-based APIs</a> and an EclipseCon presentation <a
							href="http://www.eclipsecon.org/2005/presentations/EclipseCon2005_12.2APIFirst.pdf">API
						First</a>.</li>
					<li><b><a
							href="http://dev.eclipse.org/conventions.html">Conventions and
						Guidelines</a></b> <br>
						Look <a href="http://dev.eclipse.org/conventions.html">here</a>
						and <a
							href="http://help.eclipse.org/help30/index.jsp?topic=/org.eclipse.platform.doc.isv/reference/misc/naming.html">here</a>
						for the for the coding standards, naming conventions, and other
						guidelines used by the Platform. TM will use these conventions
						until such time as deviation is required.</li>
					<li><b><a href="meetingnotes/ff01_chicago/DSDPTM_Overview.ppt" target="_self">
						Architectural Overview</a></b><br>
						A high level summary of the components and their architecture.</li>
					<li><b><a
							href="http://www.eclipse.org/dsdp/tm/doc/DSDPTM_Use_cases_v1.1c.pdf">Project
						Requirements</a></b> <br>
						Look here for a list of the project use cases and their
						priorities.</li>
					<li><b><a
						href="http://www.eclipse.org/dsdp/dsdp-charter.html">Charter</a></b>
						<br>
						As a DSDP subproject, the TM project abides by the
						DSDP Project charter found <a
							href="http://www.eclipse.org/dsdp/dsdp-charter.html">here</a>.</li>
					<li><b><a
							href="http://www.eclipse.org/dsdp/tm/development/contributors.php">Contributors
						and Committers</a></b> <br>
						List of TM Project contributors and committers.</li>
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
