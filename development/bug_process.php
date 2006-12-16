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

		<h2>Interesting Bugzilla Queries</h2>
		<ul>
		  <!--
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&cmdtype=doit">
		    open major or critical</a> bugs</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&priority=P1&priority=P2&cmdtype=doit">
		    open P1, P2</a> bugs</li>
		  -->
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=priority&type0-0-0=regexp&value0-0-0=P%5B12%5D&field0-0-1=bug_severity&type0-0-1=regexp&value0-0-1=blocker%7Ccritical%7Cmajor">
		    open major, critical, blocker, P1 or P2</a> bugs</li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=attachments.ispatch&type0-0-0=equals&value0-0-0=1">
		    open bugs with patches attached</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bapi&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    open API</a> bugs</li>
	      <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&chfieldfrom=1w&chfieldto=Now&chfieldvalue=&cmdtype=doit&negate0=1&field0-0-0=target_milestone&type0-0-0=equals&value0-0-0=---">
		    open current bugs</a> (bugs which changed last week, except deferred with Target Milestone="---")</li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=RESOLVED&resolution=FIXED&resolution=INVALID&resolution=WONTFIX&resolution=DUPLICATE&resolution=WORKSFORME&chfieldfrom=7d&chfieldto=Now&chfield=resolution&cmdtype=doit">
		    bugs fixed last week</a> (important for verification!)
		</ul>
		
		<p><b>Bugs assigned to committers or contributors</b></p>
		<ul>
		  <li>RSE
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&emailassigned_to1=1&emailtype1=exact&email1=dsdp.tm.rse-inbox%40eclipse.org&cmdtype=doit">
		    Assigned to Inbox</a></li>
		  <li>TM Core 
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&emailassigned_to1=1&emailtype1=exact&email1=dsdp.tm.core-inbox%40eclipse.org&cmdtype=doit">
		    Assigned to Inbox</a></li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=priority&y_axis_field=assigned_to&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		    Report: All Open, Assignee vs. Priority</a> - Helps to see who is working on high priority issues;<br/>
		    allows to pick a particular assignee in order to create <b>"assigned to me"</b> reports as follows
		    <p/>
		    <table border=1>
		      <tr><th>Company</th><th>TM Open Assigned to</th><th>NEW for</th><th>Changed last week for</th></tr>
		      <tr><td rowspan="3">IBM</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">david_dykstal</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">david_dykstal</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">david_dykstal</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit">dmcknigh</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit">dmcknigh</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">dmcknigh</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=kmunir@ca.ibm.com&cmdtype=doit">kmunir</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=kmunir@ca.ibm.com&cmdtype=doit">kmunir</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=kmunir@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">kmunir</a></td>
		      </tr><tr>
		        <td rowspan="4">Wind River</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit">martin.oberhuber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit">martin.oberhuber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">martin.oberhuber</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">uwe.stieber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">uwe.stieber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">uwe.stieber</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ted.williams@windriver.com&cmdtype=doit">ted.williams</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=ted.williams@windriver.com&cmdtype=doit">ted.williams</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ted.williams@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">ted.williams</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit">michael.scharf</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit">michael.scharf</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">michael.scharf</a></td>
		      </tr><tr>
		        <td>Symbian</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@symbian.com&cmdtype=doit">javier.montalvoorus</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@symbian.com&cmdtype=doit">javier.montalvoorus</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@symbian.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">javier.montalvoorus</a></td>
		      </tr><tr>
		        <td rowspan="3">Contributors</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Ewa.Matejska@palmsource.com&cmdtype=doit">ewa.matejska</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=Ewa.Matejska@palmsource.com&cmdtype=doit">ewa.matejska</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Ewa.Matejska@palmsource.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">ewa.matejska</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit">ykuo</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit">ykuo</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">ykuo</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit">lothar.werzinger</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit">lothar.werzinger</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">lothar.werzinger</a></td>
		      </tr>
		    </table></li>
		</ul>

		<p><b>QA queries</b></p>
		<ul>
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=RESOLVED&resolution=FIXED&resolution=WORKSFORME&cmdtype=doit&field0-0-0=priority&type0-0-0=regexp&value0-0-0=P%5B12%5D&field0-0-1=bug_severity&type0-0-1=regexp&value0-0-1=blocker%7Ccritical%7Cmajor">
		    major, critical, blocker, P1 or P2 fixed but not yet verified</a>
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=VERIFIED&cmdtype=doit">
		    verified but not yet closed</a>
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=1.0&target_milestone=1.0+M1&target_milestone=1.0+M2&target_milestone=1.0+M3&target_milestone=1.0+M4&target_milestone=1.0+M5&target_milestone=1.0+RC1&target_milestone=1.0+RC2&target_milestone=1.0+RC3&target_milestone=1.0+RC4&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    open bugs assigned to 1.0 or older milestones</a>
		</ul>

		<p>Reports for Release Review</p>
		<ul>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_status&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&format=table&action=wrap">
		    Report: All Bugs, Severity vs. Status</a></li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=resolution&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&format=table&action=wrap">
		  	Report: All Bugs, Severity vs. Resolution</a></li>
		</ul>

		<p>Reports and queries needed less frequently</p>
		<ul>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_severity&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap&negate0=1&field0-0-0=reporter&type0-0-0=equals&value0-0-0=martin.oberhuber%40windriver.com&field0-0-1=reporter&type0-0-1=equals&value0-0-1=Javier.MontalvoOrus%40symbian.com&field0-0-2=reporter&type0-0-2=equals&value0-0-2=david_dykstal%40us.ibm.com&field0-0-3=reporter&type0-0-3=equals&value0-0-3=dmcknigh%40ca.ibm.com&field0-0-4=reporter&type0-0-4=equals&value0-0-4=kmunir%40ca.ibm.com&field0-0-5=reporter&type0-0-5=equals&value0-0-5=Michael.Scharf%40windriver.com&field0-0-6=reporter&type0-0-6=equals&value0-0-6=ted.williams%40windriver.com&field0-0-7=reporter&type0-0-7=equals&value0-0-7=uwe.stieber%40windriver.com">
		    Report: User-submitted Open Bugs</a> (Committer-submitted bugs filtered out)</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_severity&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		    Report: All Open, Reporter vs. Severity</a> - Helps to see who found the most important bugs</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=resolution&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&component=RSE&format=table&action=wrap">
		    Report: All Bugs, Reporter vs. Resolution</a> - Helps to find reporters who frequently make invalid or duplicate reports</li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&component=RSE&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    All Open Bugs</a></li>
		  <li>RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&component=RSE&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&cmdtype=doit">
		    All Fixed Bugs</a></li>
		</ul>

		<h2>Bug Lifecycle</h2>
		<p>Everybody - users and developers - may apply for a 
		<a href="http://bugs.eclipse.org/bugs">Bugzilla account</a>
		and submit bug reports or enhancement requests.</p>
		<ul>
		  <li><a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE">Submit a new bug</a></li>
		  <li><a target="_top" href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Target%20Management&version=unspecified&component=RSE&rep_platform=All&op_sys=All&priority=P3&bug_severity=enhancement&form_name=enter_bug">Request an enhancement</a></li>
		</ul>
		<p>Once the bug report is filed, contributors and committers
		work on it, including updates to bug status. All users
		may contribute to the discussion by adding comments (but
		typically not change the status fields).
		The Eclipse Process Guidelines contain some good
		<a href="http://www.eclipse.org/projects/dev_process/bugzilla-use.php">
		information	and a handy diagram</a> for understanding the 
		lifecycle of an issue in Bugzilla.<p/> 
		
		<h3>How to defer bugs</h2>
		<p>In our <a href="http://wiki.eclipse.org/index.php/DSDP/TM/Committer_Phone_Meeting_23-May-2006">
		Committer Meeting on 23-May 2006</a> we decided on the following strategies for deferring bugs:
		<ul>
		  <li>Set the <b>Priority</b> according to personal judgement of importance: 
		    Even bugs with a high priority can be deferred to an upcoming release
		    if time just dont permit fixing them.</li>
		  <li>Set Resolved, Resolution=<b>INVALID</b> for requests that do not make
		    sense.</li>
		  <li>Set Resolved, Resolution=<b>WONTFIX</b> for bugs that we will supposedly
		    never address e.g. because there is a suitable workaround or the effort is
		    just too high although the request makes sense.</li>
		  <li>Set Resolved, Resolution=<b>LATER</b> for bugs that make sense but are
		    too much effort for the current release. They should be triaged again for
		    the next release, and potentially be documented as known limitations in
		    the release notes.</li>
		  <li>Set the <b>target milestone</b> for bugs that we want to address in the
		    current release cycle, but not quite the upcoming milestone.</li>
		  <li>Assign bugs to the <b>org.eclipse.tm.rse-inbox@eclipse.org</b> if you
		    have no idea what to do with a request and also dont know who else could
		    handle it. It will triaged again by all committers together in the next
		    committer meeting.</li>
		</ul></p>

		<h3>How to verify and close</h3>
		<ul>
		  <li>Bugs that are set RESOLVED are candidates for verification.</li>
		  <li>Ideally, the person who filed a bug should also verify it and set
		     it to <b>VERIFIED</b> if OK.</li>
		  <li>During the final release test cycle, all RESOLVED and even VERIFIED
		     bugs will be checked again. If they pass the test, they will be set
		     <b>CLOSED</b>.</li>
		  <li>Enhancement requests and applied patches can also be set <b>CLOSED</b>
		     right after checkin, especially if they do not apply to testable
		     product functionality but rather some code cleanliness.</li>
		</ul>
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
		<p/>
		
		<h2>Testing, tips and tricks for bug finding</h2>
		<ul>
		  <li>The <a href="http://wiki.eclipse.org/index.php/RSE_1.0_Testing">
		    RSE 1.0 Testing</a> page coordinates the RSE 1.0 Testing efforts.</li>
		  <li>The <a href="http://wiki.eclipse.org/index.php/Field_Guide_to_Callisto_Bugs">
		    Field Guide to Callisto Bugs</a> is also an interesting read.</li>
		</ul>
		 				   
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
