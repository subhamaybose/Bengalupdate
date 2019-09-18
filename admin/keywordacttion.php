<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `keyword` where `id`='".$_REQUEST['id']."'  ",$conn);
	mysql_query("delete from `keyword` where `id`='".$_REQUEST['id']."'  ",$conn_archive);
	header('Location:keywordlist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `keyword` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);
		mysql_query("update  `keyword` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn_archive);
	}
	else{
		mysql_query("update  `keyword` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);
		mysql_query("update  `keyword` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn_archive);
	}
	header('Location:keywordlist.php?msg=2');	
	break;
	default:	
	header('Location:bloglist.php?msg=0');	
	break;
	}
?>