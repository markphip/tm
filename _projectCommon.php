<?php
# Set the theme for your project's web pages.
# See the Committer Tools "How Do I" for list of themes
# https://dev.eclipse.org/committers/
# Optional: defaults to system theme 
#$theme = "Lazarus";
if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText)$/", $_GET["skin"], $regs))
{
	$theme = $regs[1];
}
else
{
	$theme = "Lazarus";
}


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
<h1><a href="http://eclipse.org/tm/">Target Management (RSE)</a></h1>
</div>
EOBRANDING;

	$Menu->setProjectBranding($branding);
	
	$Nav->addNavSeparator("Target Management", 	"/tm");
	$Nav->addCustomNav("About This Project", "http://www.eclipse.org/projects/project_summary.php?projectid=tools.tm", "_self", 1);
	#$Nav->addCustomNav("About", "/tm/tm-new/about", "_self", 2);
	#$Nav->addCustomNav("Team", "/tm/tm-new/team",	"_self", 2);
	$Nav->addCustomNav("Team", "/tm/development/contributors.php",	"_self", 2);
	#$Nav->addCustomNav("Demos", "/tm/tm-new/demos", "_self", 2);
	#$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/TM", "_self", 2); 

	$Nav->addNavSeparator("Users", "", "_self", 2);
	$Nav->addCustomNav("Getting Started", "/tm/tutorial/index.php", "_self", 2);
	$Nav->addCustomNav("Downloads", "http://download.eclipse.org/tm/downloads/index.php", "_self", 2);
	$Nav->addCustomNav("FAQ (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ", "_self", 2);
	$Nav->addCustomNav("Forum", "http://www.eclipse.org/forums/index.php/f/210/", "_self", 2);
	$Nav->addCustomNav("Bugs", "/tm/bugs", "_self", 2);

	$Nav->addNavSeparator("Integrators", "", "_self", 2);
	$Nav->addCustomNav("API Plan", "/tm/development/plan.php", "_self", 2);
	$Nav->addCustomNav("Documents", "/tm/doc/", "_self", 2);
	#$Nav->addCustomNav("Release Notes", "/$PR/news/relnotes.php?project=$proj&amp;version=HEAD", "_self", 2);
	#$Nav->addCustomNav("Legal", "tm/development/tm-log.csv", "_self", 2);

	$Nav->addNavSeparator("Contributors", "/tm/development/contributors.php", "_self", 2);
	$Nav->addCustomNav("Contributing (wiki)", "http://wiki.eclipse.org/TM_and_RSE_FAQ#Working_on_TM_.2F_RSE", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/tm-dev", "_self", 2);
	$Nav->addCustomNav("CVS", "/tm/development/cvs_setup.php", "_self", 2);
	$Nav->addCustomNav("Development Tools", "/tm/development/", "_self", 2);
	$Nav->addCustomNav("Search CVS", "/$PR/searchcvs.php?q=file%3A+org.eclipse.tm%25%2F" . "+days%3A+7", "_self", 2);

	$collist = "%26query_format%3Dadvanced&amp;column_changeddate=on&amp;column_bug_severity=on&amp;column_priority=on&amp;column_rep_platform=on&amp;column_bug_status=on&amp;column_product=on&amp;column_component=on&amp;column_version=on&amp;column_target_milestone=on&amp;column_short_short_desc=on&amp;splitheader=0";
unset ($bugcoms);
?>
