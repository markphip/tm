<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committer_howto.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-05-23
	#
	# Description: Committer Howto for the DSDP TM Project
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Committer Howto";
	$pageKeywords	= "DSDP, Target Management, Committer, Howto, Guidelines, IP";
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
		<p>While we do not want to get too process-heavy, there are a few simple
		things that will make all our lives easier. Here are a few "howto..."
		cookbook-style instructions for performing typical committer tasks.</p>
		
		<p>If you need any background information regarding these instructions,
		look at the <a href="committer_guide.php">committer guidelines</a>.
		
		<p>How do I...</p>

		<a name="checkin_fix">
		<h2>Check in a bugfix I wrote myself</h2>
		<ul>
		  <li>Find the bug report in bugzilla, and fix it.</li>
		  <li>Test your fix once to verify that it actually works - if this is
		    not too difficult. You may also place a note on the bugzilla report,
		    asking the original submitter to verify.</li>
		  <li>Ideally, write a JUnit test to make sure the bug will not creep
		    in again (may not always be applicable).</li>
		  <li>Commit your fix, adding the bugzilla number to the commit message. 
		    Example: "Fix bug 139207 browsing into tar archives by dstore"</li>
		  <li>Set the bugzilla report FIXED.</li>
		</ul>
		
		<a name="external_contrib">
		<h2>Apply a patch from an external contributor</h2>
		<ul>
		  <li>Ensure that the patch is on <b>bugzilla</b>. If not, ask the contributor
		    to create a bugzilla entry. This is requird even for patches from
		    co-workers in your own company!</li>
		  <li><b>Contact the contributor</b> and ask the following (see the 
		    <a href="http://www.eclipse.org/legal/EclipseLegalProcessPoster-v1.2.4.pdf">
		    Eclipse Legal Poster</a>):
		    <ul><li>If this is the first time the contributor makes a contribution: 
		         Contact information for IP records - Name, Company, E-Mail, Office address, Office phone.</li>  
		        <li>Did you write the contribution yourself?</li>
		        <li>Did you reference any 3rd party material?</li>
		        <li>If yes, under what terms (license) did you receive this material?</li>
		        <li>Are you authorized by your employer to make the contribution?</li>
		    </ul>
		    In the typical case (no IP problems expected), the contributor should put
		    a message like the following on the bugzilla report that holds his/her patch:
		    <p style="border: thin 1px dashed; background-color: ivory; 
padding-top: 2px; 
padding-left: 2px;
padding-right: 2px;
padding-bottom: 2px">
		    Legal Message: I, {name}, do hereby declare and certify that I developed
			attached code from scratch, without referencing any 3rd party materials
			except material licensed under the EPL. I am authorized by my empoloyer,
			{company} to make this contribution under the EPL.
		    </p>
		    </li>
		  <li>Apply the patch in a <b>test workspace</b>, and review the code for any obvious traces 
		     of copyright breaches, blasphemy or "bad words". It makes sense to have a
		     separate workspace for applying patches only, such that your current work
		     on other things is not affected negatively.</li> 
		  <li><b>Collaborate with the contributor</b> (i.e. exchange e-mails) until the patch satisfies your needs. 
		    Doing so educates our contributors, keeps the process transparent, and takes work off committers:
		    <ul><li>Patch works on HEAD (if not: ask contributor to re-base and re-submit the patch)</li>
		        <li>Contributor''s name added to the Copyright section of all modified files</li>
		        <li>Coding style appropriate</li>.
		    </ul></li>
		  <li>If the contribution is more than 250 lines of code and the contributor
		     is not from your own company, or there is any 
		     uncertainty about licening and purity of IP and copyrights: fill out 
		     a <b><a href="http://www.eclipse.org/legal/ContributionQuestionnairePart1-v1.0.php"></b>
		     Contribution Questionnaire</a></li>
		  <li>Once IP due diligence is completed: Apply the patch and commit it. Do not 
		    make local modifications between applying and committing, in order to keep the 
		    process transparent. <b>Put the bugzilla number on the commit message</b>.</li>
		  <li>Add a line describing the contribution to the <b>tm-log.csv</b> Project Log, see
		    <a href="#project_log">below</a>.</li>
		</ul>
		
		<a name="project_log">
		<h2>Edit the TM Project Log (tm-log.csv)</h2>
		<ul>
		  <li>The Project Log is required as per the Eclipse 
		    <a href="http://www.eclipse.org/projects/dev_process/project-log.php">
		    Project Log Guidelines</a>. It records every non-committer-contribution
		    (including legacy code contributions). Please keep it up-to-date.</li>
		   <li><a name="www_tm_dev">Add the <b>www-tm-development</b> project 
		   to your workspace. You can do 
		   this most easily by importing the Team Project set 
		   from<ul><li>
		     <a href="http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf">
		     http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf</a>
		   </li></ul></li>
		   <li>When you already have the www-tm-development project in your workspace,
		     <b>update it</b> before editing -- this saves you from having to merge before checkin.</li>
		   <li>In the www-tm project, add a line for the contribution in the <b>tm-log.csv</b>
		   file. There are some sample lines already, so adding one should not be too hard.</li>
		   <li><b>Commit</b> the changed tm-log.csv file.</li>
		</ul>
		
		<a name="legacy_code">
		<h2>Add some legacy code to the project</h2>
		<ul>
		  <li>Obtain <b>PMC Member Approval</b>: Write an e-mail to 
		      <a href="mailto:dsdp-pmc@eclipse.org">dsdp-pmc@eclipse.org</a>,
		      describing the intended contribution. Give the PMC an idea of how large the
		      contribution is, what it is good for (cryptography?), and if there are 
		      any other licenses than the EPL involved.</li>
		  <li>PMC Member Approval should be returned by E-Mail.</li>
		  <li>Create a <b>Bugzilla Entry</b> holding the contribution in a form that is suitable for checkin.
		      A ZIP archive of all the files/projects affected is fine.</li>
		  <li>Fill in a <a href="http://www.eclipse.org/legal/ContributionQuestionnairePart1-v1.0.php">
		  Contribution Questionnaire</a> and wait for EMO approval.</li>
		  <li>Once approved, check in the contribution. Dont forget to add the <b>bugzilla number
		      on the commit message.</b> Commit the code verbatim as from the bug entry first, 
		      and make any necessary modifications later.</li>
		  <li>If project(s) were added, update the <b>*.psf Project Set Files</b> (see
		      <a href="#add_plugin">below</a>). 
		  <li>Add a line describing the contribution to the <b>tm-log.csv</b> Project Log, see
		    <a href="#project_log">above</a>.</li>
		</ul>
		
		<a name="add_plugin">
		<h2>Add a plugin or other project to the workspace</h2>
		<ul>
		  <li>Commit your modifications.</li>
		  <li>In the <b>www-tm-development</b> project (see <a href="#www_tm_dev">above</a> for how 
		     to get it), update the <b>team project sets</b>:<ul>
		     <li><a href="http://www.eclipse.org/dsdp/tm/development/rse-committer.psf">
		     http://www.eclipse.org/dsdp/tm/development/rse-committer.psf</a></li>
		     <li><a href="http://www.eclipse.org/dsdp/tm/development/rse-anonymous.psf">
		     http://www.eclipse.org/dsdp/tm/development/rse-anonymous.psf</a></li>
		   </ul>You can either export a selection as team project set, or edit the 
		   project set manually. For the pserver version, you typically need to replace-all
		   ":extssh:" by ":pserver:".</li>
		  <li>Send an <b>E-mail</b> to dsdp-tm-dev, informing everybody that team project sets
		    have been updated with your new plugins.</li>
		</ul>

		<p/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
