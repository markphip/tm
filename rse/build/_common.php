<?php
require_once ("../../../includes/buildServer-common.php");

$options = array (
	"BaseBuilderBranch" => "M4_34",
	
	"BranchAndJDK" => array (
		"dsdp.eclipse.org=------------,------------",
		"3.0.0=HEAD,/opt/JDKs/i386/j2sdk1.4.2_16",
		"3.0.0=HEAD,/opt/JDKs/i386/jdk1.5.0_14",
		"3.0.0=HEAD,/opt/JDKs/i386/jdk1.6.0_04",
		"3.0.0=HEAD,/opt/JDKs/i386/IBMJava2-142-10.0",
		"3.0.0=HEAD,/opt/JDKs/i386/ibm-java2-i386-50-6.0",
		"3.0.0=HEAD,/opt/JDKs/i386/ibm-java2-i386-60-0.0",
		
		"build.eclipse.org=------------,------------",
		"3.0.0=HEAD,/shared/tools/tm/JDKs/ppc/IBMJava2-ppc-142-10.0",
		"3.0.0=HEAD,/shared/tools/tm/JDKs/ppc/ibm-java2-ppc-50-6.0",
		"3.0.0=HEAD,/shared/common/ibm-java-ppc-60"
	),
	
	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "martin.oberhuber@windriver.com", // prefil email contact box with comma-sep'd list
	
	"Users" => array("moberhuber","moberhuber",null) /* build user, eclipse cvs user, IES cvs user */
);

?>
