<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `our_team` where `id`='".$_REQUEST['id']."'  ");
	header('Location:teamlist.php?msg=1');	
	break;
	default:	
	header('Location:teamlist.php?msg=0');	
	break;
	}
?>