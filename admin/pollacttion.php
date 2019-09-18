<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `poll` where `id`='".$_REQUEST['id']."'  ");
	header('Location:polllist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `poll` set  `status`='1' where `id`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `poll` set `status`='0' where `id`='".$_REQUEST['id']."'  ");;
	}
	header('Location:polllist.php?msg=2');	
	break;
	case 'archive':
	$qlf=mysql_fetch_object(mysql_query("select * from `poll` where `id`='".$_REQUEST['id']."' ",$conn));
	$sql=mysql_query("insert into `poll` set 
			`id`='".$qlf->id."',
			`topic`='".$qlf->topic."',
			`name`='".$qlf->name."',
			`cat`='".$qlf->cat."',
			`yes`='".$qlf->yes."',
			`no`='".$qlf->no."',
			`not_known`='".$qlf->not_known."',
			`startdate`='".$qlf->startdate."',
			`date`='".$qlf->date."',
			`status`='".$qlf->status."'",$conn_archive)or die(mysql_error());
	
	mysql_query("delete from `poll` where `id`='".$_REQUEST['id']."'",$conn);
	header('Location:polllist.php?msg=4');	
	break;
	default:	
	header('Location:polllist.php?msg=0');	
	break;
	}
?>