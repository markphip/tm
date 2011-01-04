<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# compiler_warnings.php
	#
	# Author: 		Martin Oberhuber
	# Date:			2006-08-29
	#
	# Description: TM Recommended Compiler Warnings
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Recommended Compiler Warnings";
	$pageKeywords	= "Device, Remote, Target Management, Compiler, Warning, Quality, Guidelines";
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
		<p>For the Target Management Project, we recommend enabling the following
		compiler warnings in JDT (<i>Window &gt; Preferences &gt; Java &gt; Compiler
		&gt; <b>Errors/Warnings</b> and <b>Javadoc</b></i>).
		Settings that differ from the JDT default are marked in bold.</p>
		
		<p>In most cases, we use stricter warnings in the TM project than the 
		JDT default suggests - with one notable exception: Because parts of 
		RSE require access to Platform "internal" packages, and this requirement
		cannot be fixed currently, we disable the "discouraged access" warning
		for now.</p>
		
<table border=1 cellspacing=1 cellpadding=1>
  <tr><th>Setting</th><th>Value</th><th>Comment</th></tr>
  <tr><th colspan="3">Code Style</th></tr>
  <tr><td>Non-static access to static member:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Indirect access to static member:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Unqualified access to instance field:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Undocumented empty block:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Access to a non-accessible member of an enclosing type:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Method with a constructor name:</td><td><b>Error</b></td><td>&nbsp;</td></tr> 
  <tr><td>Parameter assignment:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Non-externalized strings (missing/unused $NON-NLS$ tag):</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 

  <tr><th colspan="3" align="center">Potential programming problems</th></tr>
  <tr><td>Serializable class without serialVersionUID:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Assignment has no effect (e.g. 'x = x'):</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Possible accidental boolean assignment (e.g. if (a=b)):</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>'finally' does not complete normally:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Empty statement:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Using a char array in string concatenation:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Hidden catch block:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Inexact type match for vararg arguments:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Boxing and unboxing conversions:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Enum type constant not covered on 'switch':</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>'switch' case fall-through:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Null reference:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 

  <tr><th colspan="3" align="center">Name shadowing and conflicts</th></tr>
  <tr><td>Field declaration hides another field or variable:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Local variable declaration hides another field or variable:</td><td>Ignore</td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Include constructor or setter method parameters</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
  <tr><td>Type parameter hides another type:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Method overridden but not package visible:</td><td><b>Error</b></td><td>&nbsp;</td></tr> 
  <tr><td>Interface method conflicts with protected 'Object' method:</td><td>Warning</td><td>&nbsp;</td></tr> 

  <tr><th colspan="3" align="center">Deprecated and restricted API</th></tr>
  <tr><td>Deprecated API:</td><td>Warning</td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Signal use of deprecated API inside deprecated code</td><td><b>On</b></td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Signal overriding or implementing deprecated method</td><td><b>On</b></td><td>&nbsp;</td></tr> 
  <tr><td>Forbidden reference (access rules):</td><td>Error</td><td>&nbsp;</td></tr> 
  <tr><td>Discouraged reference (access rules):</td><td>Warning</td><td>&nbsp;</td></tr> 

  <tr><th colspan="3" align="center">Unnecessary code</th></tr>
  <tr><td>Local variable is never read:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Parameter is never read:</td><td>Ignore</td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Check overriding and implementing methods</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
  <tr><td>Unused import:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Unused local or private member:</td><td>Warning</td><td>&nbsp;</td></tr> 
  <tr><td>Unnecessary else statement:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Unnecessary cast or 'instanceof' operation:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
  <tr><td>Unnecessary declaration of thrown checked exception:</td><td>Ignore</td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Check overriding and implementing methods</td><td>&nbsp;</td><td>&nbsp;</td></tr> 
  <tr><td>Unused break/continue label:</td><td>Warning</td><td>&nbsp;</td></tr> 

  <tr><th colspan="3">Generic types</th></tr>
  <tr><td colspan="3">(Not applicable since TM does not use Java 5)</td></tr> 

  <tr><th colspan="3">Annotations</th></tr>
  <tr><td colspan="3">(Not applicable since TM does not use Java 5)</td></tr> 
 </table>		

 <p/>
<table border=1 cellspacing=1 cellpadding=1>
  <tr><th>Setting</th><th>Value</th><th>Comment</th></tr>
  <tr><th colspan="3">Javadoc</th></tr>
  <tr><td>Process Javadoc comments (includes search and refactoring)</td><td>On</td><td>&nbsp;</td></tr> 
  <tr><td>Malformed Javadoc comments:</td><td><b>Warning</b></td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Only consider members visible as:</td><td><b>Protected</b></td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Report errors in tags</td><td><b>On</b></td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Report non visible references</td><td><b>On</b></td><td>&nbsp;</td></tr> 
    <tr><td>&nbsp;&nbsp;&nbsp;Report deprecated references</td><td><b>On</b></td><td>&nbsp;</td></tr> 
  <tr><td>Missing Javadoc tags:</td><td>Ignore</td><td>&nbsp;</td></tr> 
  <tr><td>Missing Javadoc comments:</td><td>Ignore</td><td>&nbsp;</td></tr> 
 </table>		
 
 <p/>
	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
