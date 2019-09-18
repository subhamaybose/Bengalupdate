<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `video` where `id`='".$_REQUEST['id']."'",$conn);
	header('Location:videolist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `video` set  `status`='1' where `id`='".$_REQUEST['id']."'",$conn);;
	}
	else{
		mysql_query("update  `video` set `status`='0' where `id`='".$_REQUEST['id']."'",$conn);;
	}
	header('Location:videolist.php?msg=2');	
	break;
	case 'archive':
	$qlf=mysql_fetch_object(mysql_query("select * from `video` where `id`='".$_REQUEST['id']."' ",$conn));
	$sql=mysql_query("insert into `video` set 
			`id`='".$qlf->id."',
			`title`='".$qlf->title."',
			`text`='".$qlf->text."',
			`cat`='".$qlf->cat."',
			`date`='".$qlf->date."',
			`now`='".$qlf->now."',
			`status`='".$qlf->status."'",$conn_archive)or die(mysql_error());
	mysql_query("delete from `video` where `id`='".$_REQUEST['id']."'",$conn);
	header('Location:videolist.php?msg=4');	
	break;
	default:	
	header('Location:videolist.php?msg=0');	
	break;
	}
?>