<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `panchayat_result` where `id`='".$_REQUEST['id']."'");
	header('Location:panchayat_folafol_list.php?msg=1');	
	break;
	case 'archive':
	$qlf=mysql_fetch_object(mysql_query("select * from `panchayat_result` where `id`='".$_REQUEST['id']."' ",$conn));
		$sql=mysql_query("insert into `panchayat_result` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."',
			`state`='".$qlf->state."',
			`district`='".$qlf->district."',
			`kendro`='".$qlf->kendro."',
			`result_type`='".$qlf->result_type."',
			`vo_dol_1`='".$qlf->vo_dol_1."',
			`vo_dol_2`='".$qlf->vo_dol_2."',
			`vo_dol_3`='".$qlf->vo_dol_3."',
			`vo_dol_4`='".$qlf->vo_dol_4."',
			`vo_dol_5`='".$qlf->vo_dol_5."',
			`seats`='".$qlf->seats."',
			`date`='".$qlf->date."'",$conn_archive);
	mysql_query("delete from `panchayat_result` where `id`='".$_REQUEST['id']."' ",$conn);
	header('Location:panchayat_folafol_list.php?msg=4');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `panchayat_result` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `panchayat_result` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:panchayat_folafol_list.php?msg=2');	
	break;
	default:	
	header('Location:panchayat_folafol_list.php?msg=0');	
	break;
	}
?>