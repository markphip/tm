<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("Target Management", 	"/tm/index.php");
	#$Nav->addCustomNav("About", 		"/tm/about.php", 	 "_self", 2);
	#$Nav->addCustomNav("Downloads", 	"/tm/downloads.php", "_self", 2);
	#$Nav->addCustomNav("Getting Started", "/tm/tutorial/index.php",  "_self", 2);
	#$Nav->addCustomNav("Development", 	"/tm/development/index.php", "_self", 2);

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<div id="branding">
<h1><a href="http://eclipse.org/tm/">Target Management (Remote System Explorer)</a></h1>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);

	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.tm", "_self", 1);
	
	$Nav->addNavSeparator("Target Management", "/tm/tm-new/index.php", "_self", 1);
	$Nav->addCustomNav("About", "/tm/tm-new/about/index.php", "_self", 1);
	$Nav->addCustomNav("Team", "/tm/tm-new/team/index.php", "_self", 1);
	$Nav->addCustomNav("Plan", "/tm/development/plan.php", "_self", 1);
	$Nav->addCustomNav("Presentations", "/tm/tm-new/presentations/index.php", "_self", 1);
	$Nav->addCustomNav("Demos", "/tm/tm-new/demos/index.php", "_self", 1);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/TM", "_self", 1); 
	$Nav->addCustomNav("IP Log", "http://www.eclipse.org/projects/ip_log.php?projectid=dsdp.tm", "_self", 1);

	$Nav->addNavSeparator("Users", "/tm/tm-new/tutorial/index.php", "_self", 1);
	$Nav->addCustomNav("Getting Started", "/tm/tm-new/tutorial/index.php", "_self", 1);
	$Nav->addCustomNav("Downloads", "/tm/tm-new/downloads/index.php", "_self", 1);
	$Nav->addCustomNav("Bugs", "/tm/tm-new/bugs/index.php", "_self", 1);
	$Nav->addCustomNav("FAQ (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ", "_self", 1);
	$Nav->addCustomNav("Newsgroup", "http://dev.eclipse.org/newslists/news.eclipse.tm/maillist.html", "_self", 1);

	$Nav->addNavSeparator("Contributors (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 1);
	$Nav->addCustomNav("Contributing (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 1);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/tm-dev", "_self", 1);
	$Nav->addCustomNav("CVS", "/tm/development/cvs-setup.php", "_self", 1);
	$Nav->addCustomNav("Development Tools", "/tm/development/index.php", "_self", 1);
	$Nav->addCustomNav("Search CVS", "/tm/searchcvs.php?q=file%3A+org.eclipse.tm%25%2F" . "+days%3A+7", "_self", 2);


?>
