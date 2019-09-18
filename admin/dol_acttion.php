<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/flag/";
    $qlf=mysql_fetch_object(mysql_query("select * from `dol` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->flag!=''){
		@unlink($path.$qlf->flag);
		}
	mysql_query("delete from `dol` where `id`='".$_REQUEST['id']."'  ",$conn);
	header('Location:dol_list.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `dol` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `dol` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:dol_list.php?msg=2');	
	break;
	default:	
	header('Location:dol_list.php?msg=0');	
	break;
	}
?>