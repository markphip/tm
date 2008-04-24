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
	$pageTitle 		= "Target Management Bug Process";
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
		<p><b>Planning and feature work</b></p>
		<ul>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&keywords_type=allwords&keywords=plan&classification=DSDP&product=Target+Management&cmdtype=doit&order=Assignee">
		    Plan Items</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bapi&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&order=Assignee&negate0=1&field0-0-0=short_desc&type0-0-0=casesubstring&value0-0-0=%5Bplan&field0-0-1=blocked&type0-0-1=anywordssubstr&value0-0-1=150498%2C163820%2C170909%2C170910%2C170911%2C170915%2C170916%2C170918%2C170922%2C170923%2C170926%2C170932%2C170936">
		    unplanned open API</a> bugs (without any plan items as "blocks" references)</li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bapi&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&order=Assignee">
		    all open API</a> bugs</li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=---&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=inbox%40eclipse.org&cmdtype=doit">
		    new bugs not yet triaged</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=2.0.4&target_milestone=2.0.5&cmdtype=doit">
		    2.0.4 assigned bugs</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=3.0+M6&target_milestone=3.0+M7&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    3.0M7 assigned bugs</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&product=Target+Management&keywords_type=allwords&keywords=pii&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    Bugs related to PII</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=component&type0-0-0=equals&value0-0-0=TCF&field0-0-1=assigned_to&type0-0-1=equals&value0-0-1=dsdp.tm.tcf-inbox%40eclipse.org&field0-0-2=short_desc&type0-0-2=anywords&value0-0-2=tcf">
		    TCF open bugs</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=component&type0-0-0=equals&value0-0-0=Terminal&field0-0-1=assigned_to&type0-0-1=equals&value0-0-1=dsdp.tm.core-inbox%40eclipse.org&field0-0-2=short_desc&type0-0-2=anywords&value0-0-2=terminal">
		    Terminal open bugs</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=Future&cmdtype=doit">
		    bugs deferred to the future</a></li>
		</ul>

		<p><b>Bugfix and Contribution work</b></p>
		<ul>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&bug_severity=blocker&bug_severity=critical&bug_severity=major&cmdtype=doit">
		    open severe bugs (major, critical, blocker)</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=priority&type0-0-0=regexp&value0-0-0=P%5B12%5D&field0-0-1=bug_severity&type0-0-1=regexp&value0-0-1=blocker%7Ccritical%7Cmajor">
		    open hi-pri bugs</a> (major, critical, blocker, P1 or P2)</li>
<!--
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=assigned_to&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=2.0+RC2&target_milestone=2.0+RC3&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		    open bugs assigned to RC3</a>
		    (or report: <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=assigned_to&query_format=report-table&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">other milestones</a>)
		    </li>
-->
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit&field0-0-0=attachments.ispatch&type0-0-0=equals&value0-0-0=1">
		    open bugs with patches attached</a></li>
	      <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&chfieldfrom=1w&chfieldto=Now&chfieldvalue=&cmdtype=doit&negate0=1&field0-0-0=target_milestone&type0-0-0=equals&value0-0-0=---&field0-0-1=target_milestone&type0-0-1=equals&value0-0-1=Future">
		    open current bugs</a> (bugs which changed last week, except deferred with Target Milestone="---" or Target Milestone="Future")</li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=RESOLVED&resolution=FIXED&resolution=INVALID&resolution=WONTFIX&resolution=DUPLICATE&resolution=WORKSFORME&chfieldfrom=7d&chfieldto=Now&chfield=resolution&cmdtype=doit">
		    bugs fixed last week</a> (important for verification!)
		</ul>
		
		<p><b>Bugs assigned to committers or contributors</b></p>
		<ul>
		  <li>TM and RSE
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&emailassigned_to1=1&emailtype1=substring&email1=inbox&cmdtype=doit">
		    Assigned to Inbox</a></li>
		  <li>TM and RSE <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=priority&y_axis_field=assigned_to&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		    Report: All Open, Assignee vs. Priority</a> - Helps to see who is working on high priority issues;<br/>
		    allows to pick a particular assignee in order to create <b>"assigned to me"</b> reports as follows
		    <p/>
		    <table border=1>
		      <tr><th>Company</th><th>TM Open Assigned to</th><th>NEW for</th><th>Changed last week for</th></tr>
		      <tr><td rowspan="4">IBM</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">david_dykstal</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">david_dykstal</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">david_dykstal</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit">dmcknigh</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit">dmcknigh</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=dmcknigh@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">dmcknigh</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=kjdoyle@ca.ibm.com&cmdtype=doit">kjdoyle</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=kjdoyle@ca.ibm.com&cmdtype=doit">kjdoyle</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=kjdoyle@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">kjdoyle</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=xuanchen@ca.ibm.com&cmdtype=doit">xuanchen</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=xuanchen@ca.ibm.com&cmdtype=doit">xuanchen</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=xuanchen@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">xuanchen</a></td>
		      </tr><tr>
		        <td rowspan="5">Wind River</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit">martin.oberhuber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit">martin.oberhuber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=martin.oberhuber@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">martin.oberhuber</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=uwe.stieber@windriver.com&cmdtype=doit">uwe.stieber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=david_dykstal@us.ibm.com&cmdtype=doit">uwe.stieber</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=uwe.stieber@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">uwe.stieber</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit">michael.scharf</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit">michael.scharf</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Michael.Scharf@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">michael.scharf</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=eugene.tarassov@windriver.com&cmdtype=doit">eugene.tarassov</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=eugene.tarassov@windriver.com&cmdtype=doit">eugene.tarassov</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=eugene.tarassov@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">eugene.tarassov</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=felix.burton@windriver.com&cmdtype=doit">felix.burton</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=felix.burton@windriver.com&cmdtype=doit">felix.burton</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=felix.burton@windriver.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">felix.burton</a></td>
		      </tr><tr>
		        <td>ProSyst</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=r_gerganov@prosyst.bg&cmdtype=doit">r_gerganov</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=r_gerganov@prosyst.bg&cmdtype=doit">r_gerganov</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=r_gerganov@prosyst.bg&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">r_gerganov</a></td>
		      </tr><tr>
		        <td>Private</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@gmail.com&cmdtype=doit">javier.montalvoorus</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@gmail.com&cmdtype=doit">javier.montalvoorus</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=Javier.MontalvoOrus@gmail.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">javier.montalvoorus</a></td>
		      </tr><tr>
		        <td rowspan="6">Contributors</td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ewa.matejska@access-company.com&cmdtype=doit">ewa.matejska</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=ewa.matejska@access-company.com&cmdtype=doit">ewa.matejska</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ewa.matejska@access-company.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">ewa.matejska</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit">ykuo</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit">ykuo</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=ykuo@mvista.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">ykuo</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=adushistova@ru.mvista.com&cmdtype=doit">adushistova</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=adushistova@ru.mvista.com&cmdtype=doit">adushistova</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=adushistova@ru.mvista.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">adushistova</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit">lothar.werzinger</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit">lothar.werzinger</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=lothar@tradescape.biz&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">lothar.werzinger</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=rupenm@ca.ibm.com&cmdtype=doit">rupenm</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=rupenm@ca.ibm.com&cmdtype=doit">rupenm</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=rupenm@ca.ibm.com&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">rupenm</a></td>
		      </tr><tr>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=miyamoto.takuya@lab.ime.cmc.osaka-u.ac.jp&cmdtype=doit">rupenm</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&emailassigned_to1=1&emailtype1=exact&email1=miyamoto.takuya@lab.ime.cmc.osaka-u.ac.jp&cmdtype=doit">rupenm</a></td>
		        <td><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=exact&email1=miyamoto.takuya@lab.ime.cmc.osaka-u.ac.jp&cmdtype=doit&chfieldfrom=1w&chfieldto=Now">rupenm</a></td>
		      </tr>
		    </table></li>
		</ul>

		<p><b>QA queries</b></p>
		<ul>
		    <!--
		  <li>TM and RSE
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=1.0.1&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&resolution=WONTFIX&resolution=INVALID&resolution=WORKSFORME&cmdtype=doit"> 
		    Bugs fixed for RSE 1.0.1 (by target milestone)</a></li>
		    -->
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=RESOLVED&resolution=FIXED&resolution=WORKSFORME&cmdtype=doit&field0-0-0=priority&type0-0-0=regexp&value0-0-0=P%5B12%5D&field0-0-1=bug_severity&type0-0-1=regexp&value0-0-1=blocker%7Ccritical%7Cmajor">
		    major, critical, blocker, P1 or P2 fixed but not yet verified</a>
<!--
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bapi&classification=DSDP&product=Target+Management&bug_status=VERIFIED&bug_status=CLOSED&bug_status=RESOLVED&resolution=FIXED&resolution=WONTFIX&resolution=INVALID&resolution=WORKSFORME&chfieldfrom=2007-05-27&chfieldto=2007-06-05&chfield=resolution&cmdtype=doit">
		    API bugs fixed for RC2</a>
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=VERIFIED&bug_status=CLOSED&bug_status=RESOLVED&resolution=FIXED&resolution=WONTFIX&resolution=INVALID&resolution=WORKSFORME&chfieldfrom=2007-05-27&chfieldto=2007-06-05&chfield=resolution&cmdtype=doit">
		    all bugs fixed for RC2</a>
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&target_milestone=1.0&target_milestone=1.0+M1&target_milestone=1.0+M2&target_milestone=1.0+M3&target_milestone=1.0+M4&target_milestone=1.0+M5&target_milestone=1.0+RC1&target_milestone=1.0+RC2&target_milestone=1.0+RC3&target_milestone=1.0+RC4&target_milestone=1.0.1&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0+M7&target_milestone=2.0+RC1&target_milestone=2.0+RC2&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    open bugs assigned to 2.0RC2 or older milestones</a>
-->
		  <li>TM
		    <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=VERIFIED&cmdtype=doit">
		    verified but not yet closed</a>
		</ul>

		<p>Reports for Release Review</p>
		<ul>
		  <li>TM Report: <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=2.0&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0+M7&target_milestone=2.0+RC1&target_milestone=2.0+RC2&target_milestone=2.0+RC3&target_milestone=2.0+RC4&target_milestone=2.0.1&target_milestone=2.0.2&target_milestone=2.0.3&target_milestone=2.0.4&target_milestone=Future&format=table&action=wrap">
		    All 2.x bugs vs. Target Milestone</a>
		    <ul>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=2.0&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0+M7&target_milestone=2.0+RC1&target_milestone=2.0+RC2&target_milestone=2.0+RC3&target_milestone=2.0+RC4&target_milestone=2.0.1&target_milestone=2.0.2&target_milestone=2.0.3&target_milestone=2.0.4&target_milestone=Future&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfieldfrom=2007-01-01&chfieldto=Now&chfield=bug_status&chfieldvalue=RESOLVED&format=table&action=wrap">
		           Resolved 2.x bugs by Target Milestone (including API)</a></li>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=2.0&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0+M7&target_milestone=2.0+RC1&target_milestone=2.0+RC2&target_milestone=2.0+RC3&target_milestone=2.0+RC4&target_milestone=2.0.1&target_milestone=2.0.2&target_milestone=2.0.3&target_milestone=2.0.4&target_milestone=Future&keywords_type=anywords&keywords=api&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfieldfrom=2007-01-01&chfieldto=2007-06-28&chfield=bug_status&chfieldvalue=RESOLVED&format=table&action=wrap">
		           Resolved 2.x API Change Requests by Target Milestone</a></li>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=2.0&target_milestone=2.0+M4&target_milestone=2.0+M5&target_milestone=2.0+M6&target_milestone=2.0+M7&target_milestone=2.0+RC1&target_milestone=2.0+RC2&target_milestone=2.0+RC3&target_milestone=2.0+RC4&target_milestone=2.0.1&target_milestone=2.0.2&target_milestone=2.0.3&target_milestone=2.0.4&target_milestone=Future&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		           Open 2.x bugs by Target Milestone</a></li>
		    </ul></li>
		  <li>TM Report: <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=3.0&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&target_milestone=3.0.3&target_milestone=3.0.4&target_milestone=Future&format=table&action=wrap">
		    All 3.x bugs vs. Target Milestone</a>
		    <ul>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=3.0&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&target_milestone=3.0.3&target_milestone=3.0.4&target_milestone=Future&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfieldfrom=2007-06-28&chfieldto=Now&chfield=bug_status&chfieldvalue=RESOLVED&format=table&action=wrap">
		           Resolved 3.x bugs by Target Milestone (including API)</a></li>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=3.0&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&target_milestone=3.0.3&target_milestone=3.0.4&target_milestone=Future&keywords_type=anywords&keywords=api&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfieldfrom=2007-06-28&chfieldto=2008-07-10&chfield=bug_status&chfieldvalue=RESOLVED&format=table&action=wrap">
		           Resolved 3.x API Change Requests by Target Milestone</a></li>
		       <li><a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=target_milestone&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&target_milestone=---&target_milestone=3.0&target_milestone=3.0+M3&target_milestone=3.0+M4&target_milestone=3.0+M5&target_milestone=3.0+M6&target_milestone=3.0+M7&target_milestone=3.0+RC1&target_milestone=3.0+RC2&target_milestone=3.0+RC3&target_milestone=3.0+RC4&target_milestone=3.0.1&target_milestone=3.0.2&target_milestone=3.0.3&target_milestone=3.0.4&target_milestone=Future&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		           Open 3.x bugs by Target Milestone</a></li>
		    </ul></li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_status&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&format=table&action=wrap">
		    Report: All Bugs, Severity vs. Status</a></li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=resolution&y_axis_field=bug_severity&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&format=table&action=wrap">
		  	Report: All Bugs, Severity vs. Resolution</a></li>
		</ul>

		<p>Reports and queries needed less frequently</p>
		<ul>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_severity&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap&negate0=1&field0-0-0=reporter&type0-0-0=equals&value0-0-0=martin.oberhuber%40windriver.com&field0-0-1=reporter&type0-0-1=equals&value0-0-1=Javier.MontalvoOrus%40gmail.com&field0-0-2=reporter&type0-0-2=equals&value0-0-2=david_dykstal%40us.ibm.com&field0-0-3=reporter&type0-0-3=equals&value0-0-3=dmcknigh%40ca.ibm.com&field0-0-4=reporter&type0-0-4=equals&value0-0-4=kjdoyle%40ca.ibm.com&field0-0-5=reporter&type0-0-5=equals&value0-0-5=Michael.Scharf%40windriver.com&field0-0-6=reporter&type0-0-6=equals&value0-0-6=eugene.tarassov%40windriver.com&field0-0-7=reporter&type0-0-7=equals&value0-0-7=uwe.stieber%40windriver.com&field0-0-8=reporter&type0-0-8=equals&value0-0-8=xuanchen%40ca.ibm.com&field0-0-9=reporter&type0-0-9=equals&value0-0-9=r_gerganov%40prosyst.bg&field0-0-10=reporter&type0-0-10=equals&value0-0-10=felix.burton%40windriver.com&field0-0-11=reporter&type0-0-11=equals&value0-0-11=ted.williams%40windriver.com&field0-0-12=reporter&type0-0-12=equals&value0-0-12=kmunir%40ca.ibm.com">
		    Report: User-submitted Open Bugs</a> (Committer-submitted bugs filtered out)</li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=bug_severity&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&format=table&action=wrap">
		    Report: All Open, Reporter vs. Severity</a> - Helps to see who found the most important bugs</li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/report.cgi?x_axis_field=resolution&y_axis_field=reporter&z_axis_field=&query_format=report-table&classification=DSDP&product=Target+Management&format=table&action=wrap">
		    Report: All Bugs, Reporter vs. Resolution</a> - Helps to find reporters who frequently make invalid or duplicate reports</li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
		    All Open Bugs</a></li>
		  <li>TM <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&classification=DSDP&product=Target+Management&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&cmdtype=doit">
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
		<p>In our <a href="http://wiki.eclipse.org/DSDP/TM/Committer_Phone_Meeting_23-May-2006">
		Committer Meeting on 23-May 2006</a> we decided on the following strategies for deferring bugs.
		This was later amended according to <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=178923#c75">
		bug 178923</a> by adding a "Future" milestone. The main goal of these guidelines is 
		to be able and write good bugzilla queries that allow us avoid looking
		at deferred bugs again later. So here is the process:
		<ul>
		  <li>Set the <b>Priority</b> according to personal judgement of importance: 
		    Even bugs with a high priority can be deferred to an upcoming release
		    if time just dont permit fixing them.</li>
		  <li>Set Resolved, Resolution=<b>INVALID</b> for requests that do not make
		    sense.</li>
		  <li>Set Resolved, Resolution=<b>WONTFIX</b> for bugs that we will supposedly
		    never address e.g. because there is a suitable workaround or the effort is
		    just too high although the request makes sense.</li>
		  <li>Set <b>Target Milestone=Future</b> for bugs that make sense but are
		    too much effort for the current release. They should be triaged again for
		    the next release, and perhaps be documented as known limitations in
		    the release notes. Such bugs will typically be in NEW state and assigned
		    to dsdp.tm.rse-inbox@eclipse.org or dsdp.tm.core-inbox@eclipse.org.</li>
		  <li><b>Assign</b> the bug to a developer and set the <b>target milestone</b>
		    for bugs that we want to address in the current release cycle.</li>
		  <li>Assign bugs to the <b>org.eclipse.tm.rse-inbox@eclipse.org</b> with 
		    the default target milestone="---" if you have no idea what to do with
		    a request and also dont know who else could handle it. It will triaged
		    again by all committers together in the next committer meeting. Please
		    do this as a last resort, though, since looking multiple times at the
		    same bug is unnecessary effort; and add a comment with your thoughts
		    on the bug.</li>
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
		  <li>The <a href="http://wiki.eclipse.org/DSDP/TM/Testing">
		    TM Testing</a> page coordinates the TM Testing efforts.</li>
		  <li>The <a href="http://wiki.eclipse.org/Field_Guide_to_Callisto_Bugs">
		    Field Guide to Callisto Bugs</a> is also an interesting read.</li>
		</ul>
		 				   
	</div>
<p/>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
