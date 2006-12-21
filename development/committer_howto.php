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
		
		<p>How do I...
		 <ul>
		   <li><a href="#check_code">Properly check my code before checkin</a></li>
		   <li><a href="#format_checkin_comment">Format my checkin comment</a></li>
		   <li><a href="#checkin_fix">Work with bugs and fixes</a></li>
		   <li><a href="#external_contrib">Apply a patch from an external contributor</a></li>
		   <li><a href="#project_log">Edit the TM Project Log (tm-log.csv)</a></li>
		   <li><a href="#sloccount">Count lines of code in a contribution</a></li>
		   <li><a href="#legacy_code">Add some legacy code to the project</a></li>
		   <li><a href="#add_plugin">Add a plugin or other project to the workspace</a></li>
		   <li><a href="#fix_copyrights">Find missing or incorrect Copyright notices in my code and fix them</a></li>
         </ul>
		</p>

		<a name="check_code"></a>
		<h2>Properly check my code before checkin</h2>
		<ul>
		  <li>Ensure that you have <a href="/dsdp/tm/development/compiler_warnings.php">Compiler Warnings
		      </a> switched on as recommended. For every file that you modify, please ensure that it
		      compiles without warnings before you check it in.</li>
		  <li>Keep the <a href="http://wiki.eclipse.org/index.php/DSDP/TM/Code_Ownership">
		  	  Code Ownership Page</a> up-to-date on the Wiki.</li>
		</ul>

		<a name="format_checkin_comment"></a>
		<h2>Format my checkin comment</h2>
		<ul>
		  <li>All checkin comments should be formatted like this:<br/>
		      &nbsp;&nbsp;&nbsp;&nbsp;<b>[123456] fixing ugly images</b><br/>
		      &nbsp;&nbsp;&nbsp;&nbsp;<b>[123456] apply patch from Ewa Matejska for remotecdt-over-dstore</b><p/>
		      Where the number [123456] references a bugzilla number, of course. Checkins that fix 
		      multiple bugs should have the various bug numbers listed on a separate line of the
		      checkin comment each.
		</ul>
		
		<a name="checkin_fix"></a>
		<h2>Work with bugs and fixes</h2>
		<ul>
		  <li>See the <a href="/dsdp/tm/development/bug_process.php">Bug Process Page</a>
		    for bugzilla queries to find interesting bugs, and our general bug process
		    (handling bugzilla states and priorities)</li>
		  <li>Test your fix once to verify that it actually works - if this is
		    not too difficult. You may also place a note on the bugzilla report,
		    asking the original submitter to verify.</li>
		  <li>Ideally, write a JUnit test to make sure the bug will not creep
		    in again (may not always be applicable).</li>
		  <li>Commit your fix, <a href="#format_checkin_comment">adding the bugzilla number</a>
		  	to the commit message. 
		    Example: <ul>
			  <li><b>[139207] fix browsing into tar archives by dstore</b></li>
			</ul></li>
		  <li>Set the <b>bugzilla report FIXED</b>. The bugzilla comment along with the state change 
  should include some help that allows a reader to understand what was done. Some good examples:<ul>
    <li><b>Fixed by correcting id in files.ui/plugin.xml</b></li>
    <li><b>Fixed in SystemViewPart and other *ViewPart files by using common action handler</b></li>
  </ul>
  The comment in bugzilla should be short enough so that it is not
  much effort creating it. But long enough to help a later
  reader find the corresponding change in cvs, and/or get some idea
  what the problem actually was and what was done about it:
  <ul>
    <li>In case a single file was changed, a reference to the filename is sufficient</li>
    <li>In case multiple files were changed, the most dominant file is often sufficient</li>
    <li>In case lots of files were changed, the plugin or the component is fine</li>
  </ul></li>
</ul>
		
		<a name="external_contrib"></a>
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
		    Legal Message: I, {name}, declare that I developed attached code from
			scratch, without referencing any 3rd party materials except material
			licensed under the EPL. {I am authorized by my employer to make this
			contribution under the EPL.}
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
		     a Contribution Questionnaire (available from the 
		     <a href="https://dev.eclipse.org/committers/">committer tools</a>)</li>
		  <li>Once IP due diligence is completed: Apply the patch and commit it. Do not 
		    make local modifications between applying and committing, in order to keep the 
		    process transparent. <b>Put the bugzilla number on the commit message</b>.</li>
		  <li>Add a line describing the contribution to the <b>tm-log.csv</b> Project Log, see
		    <a href="#project_log">below</a>.</li>
		</ul>
		
		<a name="project_log"></a>
		<h2>Edit the TM Project Log (tm-log.csv)</h2>
		<ul>
		  <li>The Project Log is required as per the Eclipse 
		    <a href="http://www.eclipse.org/projects/dev_process/project-log.php">
		    Project Log Guidelines</a>. It records every non-committer-contribution
		    (including legacy code contributions). Please keep it up-to-date.</li>
		   <li><a name="www_tm_dev"></a>
		      Add the <b>www-tm-development</b> project to your workspace.
		      You can do this most easily by importing the Team Project set 
			  from<ul><li>
		     <a href="http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf">
		     http://www.eclipse.org/dsdp/tm/development/www-tm-development.psf</a>
		   </li></ul></li>
		   <li>When you already have the www-tm-development project in your workspace,
		     <b>update it</b> before editing -- this saves you from having to merge before checkin.</li>
		   <li>In the www-tm project, add a line for the contribution in the <b>tm-log.csv</b>
		   file. There are some sample lines already, so adding one should not be too hard.</li>
		   <li>For <a href="#sloccount">counting lines of code</a> see the section below.</li>
		   <li><b>Commit</b> the changed tm-log.csv file.</li>
		</ul>

		<a name="sloccount"></a>
		<h2>Count lines of code in a contribution</h2>
		<ul>
		  <li>For use in Eclipse, we need to count lines of code in contribution, 
		  INCLUDING xml files, documentation, readmes, property files and so on. Most 
		  known code counters do not fulfill these needs. The simple UNIX
		  command lines below count all lines of all text files except empty lines.</li>
		  <li>We also suppress lines that only contain whitespace, empty comments
		  or {} charactes. This is in order to account for different coding styles,
		  which might prefer to have the { characters on a separate line or not.</li>
		  <li><img src="http://www.eclipse.org/images/new.gif"/>
		    We now have scripts to count the lines of code in a contribution. They 
		    basically count all added lines, suppressing binary files, empty lines 
		    and lines only containing /*#{}. See the script source code for details.
		    <ul>
		      <li>UNIX shellscripts should run out of the box. On Windows, Cygwin is
		          required. Windows .bat files are provided as wrappers if cygwin is
		          not your primary environment. The .bat files need to be modified
		          or configured through environment variables -- see their contents
		          and you'll understand.</li> 
		      <li>For contributions supplied as an archive, get the <a href="scripts/lc">lc script</a>
		         (plus <a href="scripts/lc.bat">lc.bat</a> if you are on Windows). Run it
		         with one or more directories to count as arguments.</li>
		      <li>For contributions supplied as a patch, get the
		         <a href="scripts/lcp">lcp script</a>
		         (plus <a href="scripts/lcp.bat">lcp.bat</a> if you are on Windows).
		         Run it with the patch file as argument.</li> 
		    </ul></li>
		</ul>
		
		<a name="legacy_code"></a>
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
		  <li>Fill in a Contribution Questionnaire (available from the 
		     <a href="https://dev.eclipse.org/committers/">committer tools</a>)
		     and wait for EMO approval.</li>
		  <li>Once approved, check in the contribution. Dont forget to add the <b>bugzilla number
		      on the commit message.</b> Commit the code verbatim as from the bug entry first, 
		      and make any necessary modifications later.</li>
		  <li>If project(s) were added, update the <b>*.psf Project Set Files</b> (see
		      <a href="#add_plugin">below</a>). 
		  <li>Add a line describing the contribution to the <b>tm-log.csv</b> Project Log, see
		    <a href="#project_log">above</a>.</li>
		</ul>
		
		<a name="add_plugin"></a>
		<h2>Add a plugin or other project to the workspace</h2>
		<ul>
		  <li>Commit your modifications.</li>
		  <li>In the <b>www-tm-development</b> project (see <a href="#www_tm_dev">above</a> for how 
		     to get it), update the <b><a href="/dsdp/tm/development/cvs_setup">
		     team project sets</a></b>.
		   You can either export a selection as team project set, and sort
		   the lines afterwards (e.g. in Emacs, do M-X sort-lines). Or, edit the 
		   project set manually. For the pserver version, you typically need to replace-all
		   ":extssh:" by ":pserver:".</li>
		  <li>Send an <b>E-mail</b> to dsdp-tm-dev, informing everybody that team project sets
		    have been updated with your new plugins.</li>
		</ul>

		<a name="fix_copyrights"></a>
		<h2>Find missing or incorrect Copyright notices in my code and fix them</h2>
		<ul>
		  <li>Please use the Releng tool from the bottom of the 
		    <a href="http://download.eclipse.org/eclipse/downloads/drops/R-3.2-200606291905/index.php">
		    Eclipse 3.2 Download Page</a></li>
		  <li>See the description there: "6. Fix Copyrights"</li>
		</ul>

		<p/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
