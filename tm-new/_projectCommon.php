<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Lazarus";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("Target Management", 	"/dsdp/tm/index.php");
	#$Nav->addCustomNav("About", 		"/dsdp/tm/about.php", 	 "_self", 2);
	#$Nav->addCustomNav("Downloads", 	"/dsdp/tm/downloads.php", "_self", 2);
	#$Nav->addCustomNav("Getting Started", "/dsdp/tm/tutorial/index.php",  "_self", 2);
	#$Nav->addCustomNav("Development", 	"/dsdp/tm/development/index.php", "_self", 2);

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
<div id="branding">
<center>
<h1><a href="http://eclipse.org/dsdp/tm/">Target Management (Remote System Explorer)</a></h1>
</center>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Target Management", 	"/dsdp/tm/tm-new/");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Information", "http://www.eclipse.org/projects/project_summary.php?projectid=dsdp.tm", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/dsdp/tm/tm-new/about", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/dsdp/tm/tm-new/team",	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plan", "/dsdp/tm/tm-new/plan", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Presentations", "/dsdp/tm/tm-new/presentations", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/dsdp/tm/tm-new/demos", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Wiki", "http://wiki.eclipse.org/DSDP/TM", "_self", 1); 
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Legal", "dsdp/tm/development/tm-log.csv", "_self", 1);

	$Nav->addNavSeparator("Users", "/dsdp/tm/tm-new/tutorial", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", "/dsdp/tm/tm-new/tutorial", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/dsdp/tm/tm-new/downloads", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/dsdp/tm/tm-new/bugs", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://dev.eclipse.org/newslists/news.eclipse.dsdp.tm/maillist.html", "_self", 1);

	$Nav->addNavSeparator("Contributors (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Contributing (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Mailing List", "https://dev.eclipse.org/mailman/listinfo/dsdp-tm-dev", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;CVS", "/dsdp/tm/tm-new/cvs/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Development Tools", "dsdp/tm/development/", "_self", 1);


?>
