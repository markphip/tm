<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# tm_press_text_2006_06.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-06-09
	#
	# Description: TM Press Release Jun 2006
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Press Text: Target Management - Jun 2006";
	$pageKeywords	= "Target, Embedded, Device, Press, Article";
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
<h2>Target Management Project</h2>

<p>The Target Management Project is creating frameworks and a consistent UI 
for accessing remote compute resources from Eclipse. The current code base
 (Remote Systems Explorer, RSE) supports remote file, shell and process
  access through a supplied Java based agent, or standard protocols like FTP
  and secure shell (ssh). Adopters are currently writing extensions to bring
  their own proprietary protocols into the framework for accessing devices
  like hardware debuggers. A 1.0 release is planned for October 20, a functional
  complete milestone (M3) is planned for June 30. A 2.0 release shall be aligned
  with Eclipse 3.3 in June 2007.</p>
 
<p>For the 2.0 release planning and the longer term future, the TM project
participants are dealing with advanced extensions to the framework in
various technology sub-groups (see 
<a href="http://wiki.eclipse.org/DSDP/TM">http://wiki.eclipse.org/DSDP/TM</a>).
Active discussions are also going on for collaboration with other Eclipse
Projects, especially the 
 <a href="http://www.eclipse.org/cdt">CDT project</a>, the 
 <a href="http://www.eclipse.org/ecf">Eclipse Communication Framework (ECF)</a>, the 
 <a href="http://www.eclipse.org/ptp">Parallel Tools Platform (PTP)</a>, and the
 <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-vcm-home/main.html">
 Eclipse Platform/Team group.</a>
A comprehensive 
 <a href="http://www.eclipse.org/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">document
 outlining the use-cases</a> and applicability
of the Target Management Project is available from the "Getting Started"
area on the Project Website at 
  <a href="http://www.eclipse.org/tm">http://www.eclipse.org/tm</a>.
</p> 
 
<h4>active project participants:</h4>
<ul><li>IBM - 3 committers + 1 contributor, core RSE development</li>
    <li>Windriver - 1 committer, contributed ssh services, lots of testing, project lead and communications</li>
    <li>PalmSource - contributed CDT Launch</li>
    <li>Symbian - bugfixes, about to contribute zeroconf-discovery</li>
    <li>PTP Project/LANL - testing on Macintosh, EFS, ssh</li>
</ul>
 
<h4>active adopters:</h4>
<ul><li>Freescale - writing proprietary wizards for JTAG on RSE</li>
    <li>Accelerated Technology - about to write proprietary Services for JTAG on RSE</li>
    <li>Montavista</li>
    <li>Siemens</li>
</ul>
 
<h4>features committed to CVS:</h4> 
<ul><li>Remote file system access through ssh, ftp or dstore protocols</li>
    <li>Remote shell (command) access through ssh or dstore protocols</li>
    <li>Remote process access through dstore protocol on Linux</li>
    <li>dstore protocol implementation and agent for remote search, remote archive exploring, remote process and other pluggable miners</li>
    <li>CDT Remote Launch Integration Example</li>
    <li>Common UI - Single consistent view, including filters</li>
    <li>Team sharing of connection and filter definitions</li>
    <li>Framework for plugging in custom protocols, services and subsystems</li>
</ul>

<h4>what features are coming next:</h4> 
<ul><li>user-defined menus and actions for instant access to remote programs</li>
    <li>import/export wizards for fast remote file transfer</li>
    <li>Apache Commons Net integration for FTP, Telnet</li>
    <li>Bring documentation/examples up-to-date</li>
</ul>
 
<h4>release plans:</h4> 
<ul><li>1.0 release planned for October 20
    <ul><li>M3 milestone (June 30) to be feature complete</li>
    </ul></li>
    <li>2.0 release planned with Eclipse 3.3 June 2007</li>
</ul>
 
<h4>recruiting efforts:</h4>
<ul><li>A lot of companies is already active on the TM project, we continue to lower the bar for using and extending the RSE</li>
    <li>Communications with other Eclipse projects, e.g. Platform/Team, TPTP and WTP. They all have some need for remote system access.</li>
    <li>RSE ssh tools will be useful for every Eclipse committer, we want to give simple access through an update site (and announce
  publicly among all committers) our M3 milestone end of june</li>
</ul>

<h4>quotation from the project lead:</h4>
"The real benefit of RSE is that it gathers lots of totally heterogeneous systems and subsystems under a single consistent view." 

<p/>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
