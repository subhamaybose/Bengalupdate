<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `tickertext` where `id`='".$_REQUEST['id']."'  ");
	header('Location:tickerlist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `tickertext` set  `status`='1' where `id`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `tickertext` set `status`='0' where `id`='".$_REQUEST['id']."'  ");;
	}
	header('Location:tickerlist.php?msg=2');	
	break;
	case 'archive':
	$qlf=mysql_fetch_object(mysql_query("select * from `tickertext` where `id`='".$_REQUEST['id']."' ",$conn));
	$sql=mysql_query("insert into `tickertext` set 
			`id`='".$qlf->id."',
			`order`='".$qlf->order."',
			`text`='".$qlf->text."',
			`cat`='".$qlf->cat."',
			`date`='".$qlf->date."',
			`status`='".$qlf->status."'",$conn_archive)or die(mysql_error());
	mysql_query("delete from `scrooltext` where `id`='".$_REQUEST['id']."'",$conn);
	header('Location:tickerlist.php?msg=4');	
	break;
	default:	
	header('Location:tickerlist.php?msg=0');	
	break;
	}
?>