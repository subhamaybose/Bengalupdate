<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	
	mysql_query("delete from `loksova` where `id`='".$_REQUEST['id']."'  ");
	header('Location:loksovalist.php?msg=1');	
	break;
	
	default:	
	header('Location:loksovalist.php?msg=0');	
	break;
	}
?>