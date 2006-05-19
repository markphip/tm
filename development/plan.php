<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# development/plan.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-02-10
	#
	# Description: DSDP-TM project plan
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "DSDP - Target Management 1.0 Plan";
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
					<td align="right"><img align="right" src="/dsdp/tm/images/logo_banner.png" /></td>
				</tr>
			</tbody>
		</table><hr/>
		-->
		<p>Last revised 10:55 CEST May 19, 2006 (
		<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
		marks interesting recent changes since the previous draft of April 10, 2006)</p>

		
<p><i>Please send comments about this draft plan to
the </i><a href="mailto:dsdp-tm-dev@eclipse.org">dsdp-tm-dev@eclipse.org</a> <i>developer
mailing list.</i></p>
<p>This document lays out the feature and API set for the initial
release of the Eclipse DSDP - Target Management Project, 
<b>Remote Systems Explorer (RSE) version 1.0.0</b>.</p>
<p>The Remote Systems Explorer is a Tool and Framework for working with 
remote computer systems. It forms the first release out of the DSDP - 
Target Management Project, to be augmented by additional plug-ins for device
specific connection schemes and tasks in the future.</p> 
<ul>
	<li><a href="#Deliverables">Release deliverables</a></li>
	<li><a href="#Milestones">Release milestones</a></li>
	<li><a href="#OperatingEnvironments">Operating
	environments</a></li>
	<li><a href="#Compatibility">Compatibility and dependencies</a></li>
	<li><a href="#Features">Features and capabilities</a></li>
</ul>
<p>This project plan and associated requirements are the result of an
open and transparent process and includes input from those who have
expressed an interest in the project. That said, the success of the
project and its deliverables is solely dependent upon the contributions
from its community membership. If you are interested in contributing to
the project in the delivery of its stated goals, you are more than
welcome!</p>

<p>The first part of the plan deals with the important matters of
release deliverables, release milestones, operating environments,
compatibilities and dependencies. These are all things that need to be
clear for any release, even if no features were to change.</p>
<p>The remainder of the plan consists of themes for the project's
milestones, with more detail on these and future capabilities found on
the project <a href="/dsdp/tm/development/requirements.php">requirements</a>
document. Each plan item covers a feature or API that is to be added to
the Remote Systems Explorer, or some aspect of the project that is
to be improved.</p>
<p>As this plan represents the goals for the initial release of the
Remote Systems Explorer, it is expected and hoped that the project
will acquire additional requirements, a vibrant user community, and most
importantly, a plug-in developer community to utilize the RSE framework
for creating additional connection protocols, subsystem visualizers and more.
With this, it is expected that the plan will be adjusted during the
development cycle in order to accomodate the community to as great an
extent as possible.</p>

<h2><a name="Deliverables"></a>Release deliverables</h2>
<p>The release deliverables have the same form as is found in most Eclipse projects,
namely:</p>
<ul>
	<li>Remote Systems Explorer source code release, available as versions tagged "R1_0" in the project's
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE CVS Repository</a>
		<!--
		and
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=DSDP_Project">TM Core CVS Repository</a>
		-->
		.
	</li>
	<li>Remote Systems Explorer SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>
	<li>Remote Systems Explorer runtime binary distribution (includes user documentation) (downloadable).</li>
	<li>Remote Systems Explorer examples (downloadable).</li>
	<li>Remote Systems Explorer unit tests (downloadable).</li>
</ul>
<h2><a name="Milestones"></a>Release milestones</h2>
<p>Release milestone will be occurring at roughly 6 week intervals. The
milestones are:</p>
<ul>
	<li>
	Friday April <img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
	28, 2006 - Milestone 1 (1.0 M1) - stable build</li>
	<li>Friday May 19, 2006 - Milestone 2 (1.0 M2) - stable build</li>
	<li>Friday June 30, 2006 - Milestone 3 (1.0 M3) - stable build</li>
	<li>Friday August 11, 2006 - 
		<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
		Milestone 4 (1.0 M4) - stable build (API freeze)</li>
	<li>Friday September 22, 2006 - 
		<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
		Milestone 5 (1.0 M5/RC0) - stable build</li>
</ul>
<p>Lock down and testing then begins with M5, and progress through a
series of test-fix passes against candidates releases. 
Release candidate builds are planned as follows (M5 is
release candidate 0):</p>
<ul>
	<li>Friday October 6, 2006 - Release Candidate 1 - (1.0 RC1)</li>
	<li>Friday October 13, 2006 - Release Candidate 2 - (1.0 RC2)</li>
	<li>Friday 
		<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
		October 20, 2006 - Release Candidate 3 - (1.0 RC3) - Release target date</li>
</ul>
<p>As soon as no critical problems are found in the testing
period between two release candidates (one or two weeks),
a release candidate can be declared the release.</p>
<p>All release deliverables
will be available for download as soon as the release has been tested
and validated in the operating environments listed below.</p>

<!-- -------------------------------------------------------- -->
<h2><a name="OperatingEnvironments"></a>Operating
Environments</h2>
<p>In order to remain current, each Eclipse release is designed to run on
reasonably current versions of the underlying operating environments.</p>
<p>The Remote Systems Explorer depends upon on the Eclipse Platform.
For this release, the RSE sources will be written and compiled
against version 1.4.2 of the Java Platform APIs (i.e., Java 2 Platform,
Release 1.4.2 SE), and designed to run on version 1.4.2 of the Java
Runtime Environment, Standard Edition. Since Java 5 is also used as
Eclipse Reference Platform, some testing of RSE will also
be done on Java 5.</p> 
<p>Eclipse Platform SDK 3.2 will be tested and validated on a number of
<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments">
reference platforms</a>
(this list is updated over the course of the release cycle). The 
Remote Systems Explorer wil be tested and validated against a 
subset of those listed for the platform, plus some more (marked
<img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
) for which contributors have have expressed special interest 
and volunteered to perform the systematic testing:</p>

<table summary="Remote Systems Explorer Reference Platforms" style="width: 821px;"
border="1">
<tbody>
<tr bgcolor="#cccccc">
<th colspan="5">
<div align="center"><strong><font size="+1">Remote Systems Explorer Reference
Platforms</font></strong></div>
</th>
</tr>
<tr>
<td width="205"><b>Operating system</b></td>
<td width="59"><b>OS version</b></td>
<td width="76"><b>Processor architecture</b></td>
<td width="59"><b>Window system</b></td>
<td width="453"><b>Java 2 Platform</b></td>
</tr>
<tr>
<td width="205">Microsoft Windows</td>
<td width="59">XP</td>
<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 6<br>
for Microsoft Windows </td>
</tr>
<tr>
<td width="205">Microsoft Windows</td>
<td width="59">XP</td>
<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> IBM 32-bit SDK for Windows,<br>
Java 2 Technology Edition 5.0 </td>
</tr>
<tr>
<td width="205">Microsoft Windows</td>
<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  2000</td>
<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> Sun Java 2 Standard Edition 1.4.2_10<br>
for Microsoft Windows </td>
</tr>
<tr>
<td width="205">Red Hat Enterprise Linux</td>
<td width="59">WS 4</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 6<br>
for Linux x86</td>
</tr>
<tr>
<td width="205">SUSE Linux Enterprise Server</td>
<td width="59">9</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453"> IBM 32-bit SDK for Linux on Intel architecture,<br>
Java 2 Technology Edition 1.4.2 service release 3 </td>
</tr>
<tr>
<td width="205">Sun Solaris</td>
<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  8</td>
<td width="76">SPARC</td>
<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  Motif</td>
<td width="453">Sun Java 2 Standard Edition 1.4.2_10<br>
for Solaris SPARC</td>
</tr>
<tr>
<td width="205">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  Ubuntu / Debian Linux</td>
<td width="59">5.10</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453">
Sun Java 2 Standard Edition 1.4.2_11<br>
for Linux x86</td>
</tr>
</tbody>
</table>

<p>Eclipse and the RSE undoubtedly run fine
in many operating environments beyond the reference platforms we test.
However, since we do not systematically test them we cannot vouch for them.
Problems encountered when running Eclipse on a non-reference platform
that cannot be recreated on any reference platform will be given lower
priority than problems with running Eclipse on a reference platform.</p>

<h4>
Datastore Agent Reference Platforms
</h4>
<p>The Datastore protocol is the default protocol shipped with RSE for accessing
remote file systems, process info and shells. It requires a Datastore server 
(agent) running on the remote system.
This Datastore agent is shipped as plain Java Source Code together with the 
RSE distribution. It should run fine on any Java Platform, with additional
Data Miner Plug-ins that may be OS specific.</p>
<p>We will test and verify the Datastore agent on the following Reference Platforms,
which are a subset of the Platforms we test the RSE UI on:</p>
<ul>
<li>Red Hat Enterprise Linx 4, Intel x86, IBM and Sun VMs</li>
<li>SUSE Linux Enterprise Server 9, Intel x86, IBM and Sun VMs</li>
</ul>

<h4>Internationalization</h4>
<p>The Remote Systems Explorer is designed as the basis for internationalized
products. The user interface elements provided by the RSE
components, including dialogs and error messages, are externalized. The
English strings are provided as the default resource bundles.
The default bundles will be localized to a subset of those
locales offered by the Platform. This plan will be updated to indicate
which locales will be provided and the timeframe for availability.</p>

<!-- ------------------------------------------------------------ -->
<h2><a name="Compatibility"></a>Compatibility and Dependencies</h2>
<h3>Compatibility of Release 1.0</h3>
<p>The Remote Systems Explorer will be developed in parallel with the
Eclipse Platform SDK version 3.2. Each RSE Milestone Release will be
based on the most recent Platform Milestone available at the time of
release. Therefore, the RSE initial release will be
compatible with Eclipse Platform 3.2 release and will publish binary 
and source compatibilities with migration guides on subsequent releases.</p>

<h3>API Contract</h3>
<p>APIs published for the 1.0 release will be carefully
reviewed prior to release, making use of "internal" packages for
unsupported and variable implementation classes. Client plug-ins that
directly depend on anything other than what is specified in the
published API are inherently unsupportable and receive no guarantees
about future compatibility. Refer to <i><a
	href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write
compliant plug-ins.</p>
<p><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
Though it is our goal to create stable APIs, being able to do so
depends on the amount of API feedback we will get from the community.
As described in <a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
<i>Eclipse Quality APIs</i></a>, we may therefore mark some of our
APIs provisional. This removes the guarantee of 1.0 to 2.0 compatibility,
though we'd strive to achieve that. For those APIs declared provisional
in RSE 1.0, we'd expect to get sufficient feedback during the 1.0 to
2.0 development period to declare the APIs final.</p>

<h2><a name="Features">Features and Capabilities</a></h2>
<p>
<!--
A list of project requirements and agreed upon implementation
timeframes is found in
  <a href="/dsdp/tm/requirements.php">this</a>
document.
-->
For the milestones listed in this document, a set of overall themes 
("purpose") is used to indicate what major set of functionalities is to 
be concentrated on for each. These themes are presented below, while the 
requirements document and associated Bugzilla entries are left to those 
wanting more detailed information on each.</p>

<h4>M1 Theme: Functional (April 
<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
28)</h4>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
give easy access to RSE to a wider community; acquire API comments, begin
prototyping; get obvious bugs into Bugzilla, find client OS problems.</li>
<li>Deliverables: SDK package (plugins and features, no docs yet), rseserver packages.</li>
<li>Get Build Infrastrucure in place for assembling SDK and rseserver packages. 
Create Download site.</li>
<li>Plugin and feature versions set to 1.</li>
<li>Start Refactoring to separate UI from Non-UI components</li>
<li>Hide "New..." entries from the RSE tree</li>
<li>Fix obvious bugs in order to enable community usage of the SDK</li>
</ul>

<h4>M2 Theme: Added Function (May 19)</h4>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Lots of API feedback by the community, lots of bug reports.
Documentation feedback regarding missing or semantically
incorrect instructions (but not about incorrect wording, 
package names etc.) </li>
<li>Deliverables: Same as M1, docs on bugzilla.</li>
<li>More Refactoring</li>
<li>Start automated (weekly, nightly) builds</li>
<li>Register "New Connection" as a New Wizard</li>
<li>Add Persistence Provider for sharing in a team (make
different versions merge-able by using a scheme that is simpler than
XMI)</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
ISV Doc and User doc in its current form (marked "outdated")</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
Add secure shell (ssh) support for command view and files (sftp)</li>
<li>Some examples in CVS</li>
<li>Manual Test Plans (Scripts, what the manual testers have to do)</li>
</ul>

<h4>M3 Theme: Functional Complete (June 30)</h4>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Add required functionality to provide an environment that is 
complete for those applications that we currently know of. 
Finding &amp; fixing bugs, prototyping, documentation feedback, use to
drive future function requests (for next release), verification of
extensions, usage in various different environments.</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
Deliverables: Add Docs to SDK. Add Runtime and JUnit tests to Downloads. Make separate download for examples. Add an Automatic Update Site</li>
<li>More Refactoring: Incorporate community feedback on APIs, Docs</li>
<li>Add examples, e.g. CDT Launch Example</li>
<li>Wizard completely replacable</li>
<li>Add User Actions</li>
<li>Add Import / Export facility</li>
<li>Draft form of new ISV doc</li>
<li>More manual test plans</li>
<li>Add basic framework for automated tests, add some automated Test Scripts (JUnit).</li>
<li>Bugfixing</li>
</ul>

<h4>M4 Theme: API Freeze (August 11)</h4>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Planned and coordinated testing on all supported reference platforms,
polishing, finding documentation issues</li>
<li>Updated FTP Implementation (through Jakarta Commons Net)</li>
<li>Telnet (through Jakarta Commons Net)</li>
<li>Incorporate Community Feedback on APIs, Docs, and change where appropriate</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
API and String Constants polish to meet <i>
<a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
Eclipse Quality</a></i></li>
<li>Final form for ISV Doc</li>
<li>Automated testing for some of API</li>
<li>Bugfixing</li>
</ul>

<h4>M5 / RC0 Theme: Ready to Release (September 22)</h4>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Planned and coordinated testing on all supported reference platforms,
fixing final bugs</li>
<li>Final form of User Doc</li>
<li>Localization and product polish</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
Implementation and Documentation Polish to meet <i>
<a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
Eclipse Quality</a></i>: Get rid of accessing Platform <i>internal</i> packages</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
JUnit tests and specification for all API where reasonable</li>
<li><img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
Prepare for <a href="http://www.eclipse.org/projects/dev_process/release-review.php">
Release Review</a></li>
<li>Bugfixing</li>
</ul>

<h4>RSE Release 1.0.0: Target date 
<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
October 20, 2006</h4>
<ul>
<li>Planned and coordinated testing on all supported reference platforms</li>
<li>Bug fixing and verification</li>
</ul>
<p/>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
