<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/banner/";
	$qlf=mysql_fetch_object(mysql_query("select * from `banner` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}
	mysql_query("delete from `banner` where `id`='".$_REQUEST['id']."'  ",$conn);
	header('Location:bannerlist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `banner` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `banner` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:bannerlist.php?msg=2');	
	break;
	case 'archive':
	#$path="../images/uploaded/banner/";
	$qlf=mysql_fetch_object(mysql_query("select * from `banner` where `id`='".$_REQUEST['id']."' ",$conn));
		/*if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}*/
	$sql=mysql_query("insert into `banner` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."',
			`cat`='".$qlf->cat."',
			`caption`='".$qlf->caption."',
			`title`='".$qlf->title."',
			`text`='".$qlf->text."',
			`date`='".$qlf->date."',
			`order`='".$qlf->order."',
			`image`='".$qlf->image."'",$conn_archive);
	mysql_query("delete from `banner` where `id`='".$_REQUEST['id']."'  ",$conn);
	header('Location:bannerlist.php?msg=4');	
	break;
	default:	
	header('Location:bannerlist.php?msg=0');	
	break;
	}
?>