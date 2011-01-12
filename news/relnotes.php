<?php
require_once ("../../includes/buildServer-common.php");

$pageTitle = "Eclipse Target Management Release Notes";

if (isset($_GET["project"]) && $_GET["project"] == "xsd")
{
	header("Location: http://www.eclipse.org/modeling/mdt/news/relnotes.php?project=xsd&version=HEAD");
	exit;
}

// bleeding edge for emf only
if (isset($_GET["project"]) && $_GET["project"] == "emf")
{
	require_once($_SERVER["DOCUMENT_ROOT"] . "/modeling/emf/downloads/extras-emf.php");
	$extras = array("doBleedingEdge");
}

$streams = array(
	"rse" => array(
		"3.0.x" => "HEAD",
		"2.0.x" => "R2_0_maintenance",
		"1.0.x" => "R1_0_maintenance"
	)
);

require($_SERVER["DOCUMENT_ROOT"] . "/dsdp/includes/relnotes-common.php");
?>
