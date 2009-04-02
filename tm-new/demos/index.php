<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		David Dykstal
	# Date:			2009-04-01
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Demos";
	$pageKeywords	= "device, target";
	$pageAuthor		= "David Dykstal";
	
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
		<p>
		Under Construction!
		</p>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam. Nunc pretium. Suspendisse potenti. Nullam et lorem. Mauris dui. Nulla nisi. Duis at erat. In consectetur. Ut vel quam. Nam tristique, dui vitae iaculis suscipit, urna risus iaculis purus, quis facilisis odio augue sed dui. Sed varius semper tortor. Nam rhoncus, nibh non convallis scelerisque, nulla quam egestas dui, vel tincidunt augue lectus eget nulla. Aenean condimentum pede vitae velit. Duis vulputate.
		</p>
		<p>
		Etiam condimentum, lacus vel scelerisque ultrices, justo urna dictum arcu, sed luctus justo risus eget nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean convallis pharetra ante. Integer sit amet nisi sit amet mi hendrerit ornare. Praesent porttitor magna at ante. Ut tempor diam sit amet purus. Curabitur varius. Etiam mollis placerat quam. Maecenas ac massa in turpis vehicula sollicitudin. Mauris bibendum. Nulla metus orci, aliquet ut, tincidunt nec, euismod sit amet, urna.
		</p>
		<p>
		Duis enim. Praesent lobortis, tellus id bibendum venenatis, odio enim posuere quam, sed blandit enim urna sit amet magna. Sed sed magna vel tellus aliquet eleifend. Integer rhoncus, ligula non porta volutpat, ipsum est commodo est, vitae vulputate risus libero ac nulla. Ut interdum urna et metus. Fusce ultricies ullamcorper dui. Maecenas arcu urna, molestie ut, semper sed, pharetra eget, dolor. Quisque sed mi ut tortor aliquam vestibulum. Mauris tristique. Morbi sit amet metus. Integer tempus purus rutrum massa. Nullam scelerisque ligula in risus. Duis egestas justo vel mi. In felis leo, tincidunt sed, tincidunt et, cursus in, nulla.
		</p>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
			</ul>
		</div>
	</div>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
