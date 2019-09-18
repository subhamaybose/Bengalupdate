<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `page_manager` where `id`='".$_REQUEST['id']."'  ");
	header('Location:pagelist.php?msg=1');	
	break;
	default:	
	header('Location:pagelist.php?msg=0');	
	break;
	}
?>