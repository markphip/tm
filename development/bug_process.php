<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# bug_process.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-07-03
	#
	# Description: Bugzilla Process for the DSDP TM Project
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Bug Process";
	$pageKeywords	= "DSDP, Target Management, Bugs, Process, Guidelines";
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

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<p>This documents how the Target Management Project uses 
		<a href="http://bugs.eclipse.org/bugs">Bugzilla</a> to handle
		bug reports, enhancement requests, patches etc. It covers
		basic lifecycle information and clarifications for how to
		use the various Bugzilla fields.</p>

		<h2>Bug Lifecycle</h2>
		<p>Everybody - users and developers - may apply for a 
		<a href="http://bugs.eclipse.org/bugs">Bugzilla account</a>
		and submit bug reports or enhancement requests.</p>

		<p>Once the bug report is filed, contributors and committers
		work on it, including updates to bug status. All users
		may contribute to the discussion by adding comments (but
		typically not change the status fields).
		The Eclipse Process Guidelines contain some good
		<a href="http://www.eclipse.org/projects/dev_process/bugzilla-use.php">
		information	and a handy diagram</a> for understanding the 
		lifecycle of an issue in Bugzilla.<p/> 

		<h2>Clarification of Fields</h2>
		<ul>
		  <li><b>Platform</b> and <b>OS</b>: These should be set by the submitter
		     of a bug to describe the platform and OS on which a bug was detected.
		     This does not mean that the bug would occur only on this particular
		     platform.
		     <ul>
		       <li>Use Platform <b>All</b> only if you have good evidence that a 
		           bug actually occurs on all platforms.</li>
		       <li>When you are sure that a bug occurs <b>only</b> on a particular
		           platform, please indicate so in the <b>Summary</b> field by adding
		           a tag lice [mac] or [linux]</li>
		     </ul></li>
		</ul><p/>
		
		<ul>
		  <li><b>Summary</b> field: We use tags in square brackets to indicate certain
		     categories of bugs. Please use the following tags as indication:
		     <ul>
		       <li><b>[api]</b> - API problem (typically not user visible)</li> 
		       <li><b>[apidoc]</b> - API documentation issue</li> 
		       <li><b>[doc]</b> - User documentation issue</li> 
		       <li><b>[linux]</b> - Bug occurs on Linux only</li> 
		       <li><b>[mac]</b> - Bug occurs on MacOS X only</li> 
		       <li><b>[persistence]</b> - RSE Persistency support issue</li> 
		       <li><b>[ssh]</b> - Bug occurs on ssh subsystem only</li> 
		       <li><b>[team]</b> - RSE Team support issue</li> 
		       <li><b>[updating]</b> - Problem with update status of items in RSE</li>
		       <li><b>[windows]</b> - Bug occurs on Windows only</li> 
		     </ul>
		</ul>

		<h2>Submitting a Patch</h2>
		Every user may submit a patch for an issue he finds, by attaching
		the code to the corresponding Bugzilla item. Submitting patches turns 
		the ordinary user into a contributor, for which he or she will be 
		given credit to.<br/>
		Please attach only patches on bugzilla for which you have the right
		to attach them. In the typical case, if you put a legal notice like 
		the following alongside your contribution, it will speed up the 
		contribution process:
		    <p style="border: thin 1px dashed; background-color: ivory; 
padding-top: 2px; 
padding-left: 2px;
padding-right: 2px;
padding-bottom: 2px">
		    Legal Message: I, {name}, declare that I developed attached code from
			scratch, without referencing any 3rd party materials except material
			licensed under the EPL. {I am authorized by my employer to make this
			contribution under the EPL.}
		    </p>
		If this message does not apply for you (e.g. because you did use 3rd party
		materials), please contact the <a href="mailto:dsdp-tm-dev@exlipse.org">
		dsdp-tm-dev@eclipse.org</a> Developer Mailing List to seek assistance of
		a committer.<br/>
		Once your contribution is attached to Bugzilla, a committer will pick it
		up and follow the <a href="/dsdp/tm/development/committer_howto.php#external_contrib">
		Committer HOWTO</a> guidelines to merge your contribution. 
		code without being allowed to do so by the copyright owner).
		
		<h2>Interesting Bugzilla Queries</h2>
		<ul>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=priority&y_axis_field=assigned_to&z_axis_field=&query_format=report-table&short_desc_type=allwordssubstr&short_desc=&classification=DSDP&product=Target+Management&component=RSE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&format=table&action=wrap&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
		    Report: All Open, Assignee vs. Priority</a></li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bapi&classification=DSDP&product=Target+Management&component=RSE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=RSE+open+%5Bapi%5D&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
		    open API</a> bugs</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=DSDP&product=Target+Management&component=RSE&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&priority=P2&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&query_based_on=RSE+open+P1%2CP2&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
		    open P1, P2</a> bugs</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&cmdtype=doit">
		    open major or critical</a> bugs</li>
		</ul>
		<p/>
		 				   
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
