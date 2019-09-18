<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	
	mysql_query("delete from `rajjo` where `id`='".$_REQUEST['id']."'  ");
	header('Location:rajjolist.php?msg=1');	
	break;
	
	default:	
	header('Location:rajjolist.php?msg=0');	
	break;
	}
?>