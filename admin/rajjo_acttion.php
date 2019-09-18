<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/map/";
    $qlf=mysql_fetch_object(mysql_query("select * from `rajjo` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->img!=''){
		@unlink($path.$qlf->img);
		}
	mysql_query("delete from `rajjo` where `id`='".$_REQUEST['id']."'",$conn);
	header('Location:rajjo_list.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `rajjo` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `rajjo` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:rajjo_list.php?msg=2');	
	break;
	default:	
	header('Location:rajjo_list.php?msg=0');	
	break;
	}
?>