<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
		
	mysql_query("delete from `galcat` where `id`='".$_REQUEST['id']."'",$conn);
	mysql_query("delete from `galcat` where `id`='".$_REQUEST['id']."'",$conn_archive);
	header('Location:picturegalcat.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `galcat` set  `status`='1' where `id`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `galcat` set `status`='0' where `id`='".$_REQUEST['id']."'  ");;
	}
	header('Location:picturegalcat.php?msg=2');	
	break;
	default:	
	header('Location:picturegalcat.php?msg=0');	
	break;
	}
?>