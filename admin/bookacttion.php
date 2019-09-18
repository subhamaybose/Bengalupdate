<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/book/";
	$qlf=mysql_fetch_object(mysql_query("select * from `boiwala` where `id`='".$_REQUEST['id']."' "));
		if($qlf->img!=''){
		@unlink($path.$qlf->img);
		}
            /*   if($qlf->author_image!=''){
		@unlink($path1.$qlf->author_image);
		}*/
	mysql_query("delete from `boiwala` where `id`='".$_REQUEST['id']."'  ");
	header('Location:booklist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `boiwala` set  `status`='1' where `id`='".$_REQUEST['id']."'  ");;
	}
	else{
		mysql_query("update  `boiwala` set `status`='0' where `id`='".$_REQUEST['id']."'  ");;
	}
	header('Location:booklist.php?msg=2');	
	break;
	default:	
	header('Location:booklist.php?msg=0');	
	break;
	}
?>