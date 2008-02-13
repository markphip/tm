<?php
require_once ("../../../includes/buildServer-common.php");

$options = array (
	"BaseBuilderBranch" => "M4_34",
	
	"BranchAndJDK" => array (
		"dsdp.eclipse.org=------------,------------",
		"3.0.0=HEAD,/opt/sun-java2-1.4",
		"3.0.0=HEAD,/opt/sun-java2-5.0",
		
		"build.eclipse.org=------------,------------",
		"3.0.0=HEAD,/shared/dsdp/tm/ws2/IBMJava2-ppc-142",
		"3.0.0=HEAD,/opt/public/common/ibm-java2-ppc-50"
	),
	
	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "martin.oberhuber@windriver.com", // prefil email contact box with comma-sep'd list
	
	"Users" => array("moberhuber","moberhuber",null) /* build user, eclipse cvs user, IES cvs user */
);

?>
