<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `category` where `slug`='".$_REQUEST['id']."'  ");
	header('Location:categorylist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `category` set  `status`='1' where `slug`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `category` set `status`='0' where `slug`='".$_REQUEST['id']."'  ");;
	}
	header('Location:categorylist.php?msg=2');	
	break;
	default:	
	header('Location:categorylist.php?msg=0');	
	break;
	}
?>