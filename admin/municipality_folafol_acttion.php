<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `municipality_result` where `id`='".$_REQUEST['id']."'");
	header('Location:municipality_folafol_list.php?msg=1');	
	break;
	case 'archive':
	$qlf=mysql_fetch_object(mysql_query("select * from `municipality_result` where `id`='".$_REQUEST['id']."' ",$conn));
		$sql=mysql_query("insert into `municipality_result` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."',
			`state`='".$qlf->state."',
			`district`='".$qlf->district."',
			`kendro`='".$qlf->kendro."',
			`ward`='".$qlf->ward."',
			`ca_dol_1`='".$qlf->ca_dol_1."',
			`vo_dol_1`='".$qlf->vo_dol_1."',
			`ca_dol_2`='".$qlf->ca_dol_2."',
			`vo_dol_2`='".$qlf->vo_dol_2."',
			`ca_dol_3`='".$qlf->ca_dol_3."',
			`vo_dol_3`='".$qlf->vo_dol_3."',
			`ca_dol_4`='".$qlf->ca_dol_4."',
			`vo_dol_4`='".$qlf->vo_dol_4."',
			`ca_dol_5`='".$qlf->ca_dol_5."',
			`vo_dol_5`='".$qlf->vo_dol_5."',
			`round`='".$qlf->round."',
			`difference`='".$qlf->difference."',
			`result`='".$qlf->result."',
			`date`='".$qlf->date."'",$conn_archive);
	mysql_query("delete from `municipality_result` where `id`='".$_REQUEST['id']."' ",$conn);
	header('Location:municipality_folafol_list.php?msg=4');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `municipality_result` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `municipality_result` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:municipality_folafol_list.php?msg=2');	
	break;
	default:	
	header('Location:municipality_folafol_list.php?msg=0');	
	break;
	}
?>