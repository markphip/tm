<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committer_guide.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-05-10
	#
	# Description: Committer Guidelines for the DSDP TM Project
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "TM Committer Guidelines";
	$pageKeywords	= "DSDP, Target Management, Committer, Guidelines";
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
		things that will make all our lives easier. See also the
		<a href="committer_howto.php">committer HOWTO</a>
		for simple cookbook-style instructions for common tasks.</p>

		<h2>Bugzilla Guidelines</h2>
		<ul>
		  <li>See the <a href="/dsdp/tm/development/bug_process.php">Bug Process Page</a>
		    for bugzilla queries to find interesting bugs, and our general bug process
		    (handling bugzilla states and priorities)<p/></li>
		  <li>When you check in a fix for a bugzilla entry, <b>please</b> include
			the bugzilla number in the commit message. Example:
		   <b>"Fix bug 139207 browsing into tar archives by dstore"</b>.<p/></li>
		   <li>After committing a fix for bugzilla, set the entry <b>fixed</b>. 
		   Do not set it closed until it has been tested and verified by somebody 
		   else.<p/></li>
		</ul>
		
		<h2>Checkin Policies</h2>
		<ul><li>When you add a new plugin, feature or other project to your workspace,
		   please update the <b>Team Project Sets</b> so that other committers or 
		   CVS users can pick up your new project easily: Add the "www-tm-development" 
		   project to your workspace. You can do this most easily by importing the 
		   Team Project set from<ul>
		     <li><a href="http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf">
		     http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf</a></li>
		   </ul>
		   Update the Project sets there and commit them to the web page:<ul>
		     <li><a href="http://www.eclipse.org/dsdp/tm/development/rse-committer.psf">
		     http://www.eclipse.org/dsdp/tm/development/rse-committer.psf</a></li>
		     <li><a href="http://www.eclipse.org/dsdp/tm/development/rse-anonymous.psf">
		     http://www.eclipse.org/dsdp/tm/development/rse-anonymous.psf</a></li>
		   </ul>You can either export a selection as team project set, or edit the 
		   project set manually. For the pserver version, you typically need to replace-all
		   ":extssh:" by ":pserver:".<p/></li>
		</ul>

		<h2>IP Due Diligence</h2>
		When you check in a contributed patch, we <b>have to follow IP Due Diligence
		guidelines</b>, as outlined on the 
		<a href="http://www.eclipse.org/legal/EclipseLegalProcessPoster-v1.2.4.pdf">
		Eclipse IP Process Flowchart</a> and the
		<a href="http://www.eclipse.org/projects/dev_process/project-log.php">
		Project Log Guidelines</a>:<p/>
		<ul>
		   <li>Check the contribution. In case of any uncertainty, consult the
		   TM Lead, or Eclipse Legal:
		   <ul><li>Does the contributor have sufficient <b>rights to contribute</b>?
		     In other words, is it written by the contributor himself without
		     referencing any 3rd party materials?</li>
		     <li>Does the contribution include <b>anything not under EPL, 
		     or amount to &gt; 250 lines of code</b> including all documentation
		     etc.? If yes, a 
		     <a href="http://www.eclipse.org/legal/ContributionQuestionnairePart1-v1.0.php">
		     Contribution Questionnaire</a> has to be filled out!
		     (The 250 line clause can be waived if the contributor is a committer
		     himeself, and there is a member committer agreement in place for 
		     his employer company; it may also be waived for plain bug fixes).</li><p/>
		   </ul>
		   <li>Add the "www-tm-development" project to your workspace. You can do 
		   this most easily by importing the Team Project set 
		   from<ul><li>
		     <a href="http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf">
		     http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf</a>
		   </li></ul>
		   In the www-tm project, add a line for the contribution in the <b>tm-log.csv</b>
		   file. There are some sample lines already, so adding one should not be too hard.<p/></li>
		   <li>Before committing both the code changes and the tm-log.csv, for any files
		   patched by the contribution, add a <b>credit line for the contributor</b> into the 
		   file's copyright notice. It's good practice to give credit to our contributors.
		   (when a whole new file is added by the contribution, leave the copyright notice
		   as is, of course).<p/></li>
		   <li>Make sure the bugzilla number is part of the commit message.</li>
		</ul>  

		<h2>Coding Guidelines</h2>
		We <b>do not want to be too restrictive right now</b> - especially do not 
		rewrite existing code just to make it conform to some naming convention.
		Most of the RSE code seems to follow proper coding style already. However,
		as we want to exit incubation phase with our first release, we will have to pass the
		<a href="http://www.eclipse.org/projects/dev_process/release-review.php">Release Review
		</a> process, which includes the duty to produce
		code and APIs of <a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
		Eclipse Quality</a>. Therefore, we better strive for quality early. Which means, try
		to follow common accepted guidelines for writing new code<p/>
		Some useful references are 
		<ul><li>The <a href="http://wiki.eclipse.org/index.php/API_Central">Eclipse Platform API Central</a></li>
		<li>The <a href="http://wiki.eclipse.org/index.php/Development_Conventions_and_Guidelines">Eclipse Platform Devlopment Guidelines</a></li>
		</ul>

		<h2>Other stuff for reference</h2>
		The <a href="http://www.eclipse.org/projects/dev_process/Eclipse_Standard_TopLevel_Charter_v1.0.php">
		Eclipse Standard Charter</a> (as referenced by the <a href="http://www.eclipse.org/dsdp/dsdp-charter.php">
		DSDP Project Charter</a>) has more information about committer rights
		and duties, and our development process.<p/>
		In particular, this charter says that committers need to agree on the
		<a href="/dsdp/tm/development/plan.php">project plan</a> and its modifications,
		and that committers can veto code changes.<p/> 
		   
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
