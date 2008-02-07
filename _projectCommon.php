<?php


	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("dsdp.tm");

	function add2users() {
   		global $Nav;
		#$Nav->addCustomNav("FAQ", "/dash/user-faq.php", "", 2);
		#$Nav->addCustomNav("Release Notes", "/$PR/news/relnotes.php?project=$proj&amp;version=HEAD", "_self", 2);
	}   
	function add2contributors() {
		global $Nav;
		$Nav->addCustomNav("Development Tools", "/dsdp/tm/development/index.php", "", 2);
		$Nav->addCustomNav("Search CVS", "/$PR/searchcvs.php?q=file%3A+org.eclipse.tm%25%2F" . "+days%3A+7", "_self", 2);
	}
	$projectInfo->generate_common_nav( $Nav, "add2users", NULL, "add2contributors" );

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	#$Nav->addNavSeparator("Target Management", 	"/dsdp/tm/index.php");
	#$Nav->addCustomNav("About", 		"/dsdp/tm/about.php", 	 "_self", 2);
	#$Nav->addCustomNav("Downloads", 	"/dsdp/tm/downloads.php", "_self", 2);
	#$Nav->addCustomNav("Getting Started", "/dsdp/tm/tutorial/index.php",  "_self", 2);
	#$Nav->addCustomNav("Development", 	"/dsdp/tm/development/index.php", "_self", 2);

	$collist = "%26query_format%3Dadvanced&amp;column_changeddate=on&amp;column_bug_severity=on&amp;column_priority=on&amp;column_rep_platform=on&amp;column_bug_status=on&amp;column_product=on&amp;column_component=on&amp;column_version=on&amp;column_target_milestone=on&amp;column_short_short_desc=on&amp;splitheader=0";
	#$Nav->addCustomNav("Open Bugs", "$bugurl/bugs/colchange.cgi?rememberedquery=product%3D" . $projectName . (isset ($bugcoms[$proj]) ? "%26component=$bugcoms[$proj]" : "") . "%26bug_status%3DNEW%26bug_status%3DASSIGNED%26bug_status%3DREOPENED%26order%3Dbugs.bug_status%2Cbugs.target_milestone%2Cbugs.bug_id" . $collist, "_self", 2);

#$App->AddExtraHtmlHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"/dsdp/includes/common.css\"/>\n");
unset ($bugcoms);
?>
