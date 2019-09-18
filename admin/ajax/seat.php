<?php
include("../../config/config.php");

	$sqll= mysql_query("select ".$_REQUEST['pncht']." from `panchayat` where `id`='".$_REQUEST['panchayat']."' ");
	$sqllf=mysql_fetch_object($sqll);
	
	echo $sqllf->$_REQUEST['pncht'];

?>