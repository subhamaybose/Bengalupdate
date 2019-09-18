<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/adv/";
	$qlf=mysql_fetch_object(mysql_query("select * from `advimg` where `id`='".$_REQUEST['id']."' "));
		if($qlf->image!=''){
		@unlink($path.$qlf->img);
		}
	mysql_query("delete from `advimg` where `id`='".$_REQUEST['id']."'  ");
	header('Location:advmng.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `advimg` set  `status`='1' where `id`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `advimg` set `status`='0' where `id`='".$_REQUEST['id']."'  ");;
	}
	header('Location:advmng.php?msg=2');	
	break;
	default:	
	header('Location:advmng.php?msg=0');	
	break;
	}
?>