<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `municipality` where `id`='".$_REQUEST['id']."'  ",$conn);
	header('Location:municipality_list.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update `municipality` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update `municipality` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:municipality_list.php?msg=2');	
	break;
	default:	
	header('Location:municipality_list.php?msg=0');	
	break;
	}
?>