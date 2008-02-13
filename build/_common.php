<?php
require_once ("../../includes/buildServer-common.php");

$options = array (
	"BaseBuilderBranch" => "M4_34",
	
	"BranchAndJDK" => array (
		"dsdp.eclipse.org=------------,------------",
		"3.0.0=HEAD,/opt/sun-java2-5.0",
		"2.0.3=R2_0_maintenance,/opt/sun-java2-5.0",
		#"1.0.2=R1_0_maintenance,/opt/sun-java2-1.4",
		
		"build.eclipse.org=------------,------------",
		"3.0.0=HEAD,/opt/public/common/ibm-java2-ppc-50",
		"2.0.3=R2_0_maintenance,/opt/public/common/ibm-java2-ppc-50",
		#"1.0.2=R1_0_maintenance,/opt/public/stp/apps/IBMJava2-ppc-142" // bug 178681
	),
	
	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "martin.oberhuber@windriver.com", // prefil email contact box with comma-sep'd list
	
	"Users" => array("moberhuber","moberhuber","moberhuber") /* build user, eclipse cvs user, IES cvs user */
);

?>
