<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	mysql_query("delete from `gallerys` where `id`='".$_REQUEST['id']."'  ");
	header('Location:picturegal.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `gallerys` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `gallerys` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:picturegal.php?msg=2');	
	break;
	case 'archive':
	#$path="../images/uploaded/blog/";
       
	$qlf=mysql_fetch_object(mysql_query("select * from `gallerys` where `id`='".$_REQUEST['id']."' ",$conn));
		/*if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}*/
        $sql=mysql_query("insert into `gallerys` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."', 
			`cat`='".$qlf->cat."',
			`cap`='".$qlf->cap."',
			`date`='".$qlf->date."',
			`img`='".$qlf->img."' ",$conn_archive);
	mysql_query("delete from `gallerys` where `id`='".$_REQUEST['id']."'  ",$conn);
	header('Location:picturegal.php?msg=4');	
	break;
	default:	
	header('Location:picturegal.php?msg=0');	
	break;
	}
?>