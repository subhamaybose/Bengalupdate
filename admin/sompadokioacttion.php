<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/";
    //$path1="../images/uploaded/author/";
	$qlf=mysql_fetch_object(mysql_query("select * from `sompadokio` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->topicimage!=''){
		@unlink($path.$qlf->topicimage);
		}
        /*if($qlf->author_image!=''){
		@unlink($path1.$qlf->author_image);
		}*/
	mysql_query("delete from `sompadokio` where `id`='".$_REQUEST['id']."'  ",$conn);
	mysql_query("delete from `sompadokio_hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:sompadokiolist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `sompadokio` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `sompadokio` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	header('Location:sompadokiolist.php?msg=2');	
	break;
	case 'archive':
	#$path="../images/uploaded/";
    #$path1="../images/uploaded/author/";
	$qlf=mysql_fetch_object(mysql_query("select * from `sompadokio` where `id`='".$_REQUEST['id']."' ",$conn));
		/*if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}
               if($qlf->author_image!=''){
		@unlink($path1.$qlf->author_image);
		}*/
		$sql=mysql_query("insert into `sompadokio` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."',
			`date`='".$qlf->date."',
			`title`='".$qlf->title."',
			`text`='".$qlf->text."',
			`key`='".$qlf->key."',
			`now`='".$qlf->now."',
			`author`='".$qlf->author."',
			`topicimg`='".$qlf->topicimg."'",$conn_archive);
	$qlfctr=mysql_fetch_object(mysql_query("select * from `sompadokio_hit_count` where `pge_name`='id=".$_REQUEST['id']."' ",$conn));
		$sql1=mysql_query("insert into `sompadokio_hit_count` set `pge_name`='".$qlfctr->pge_name."', `views`='".$qlfctr->views."'",$conn_archive);
	mysql_query("delete from `sompadokio` where `id`='".$_REQUEST['id']."' ",$conn);
	mysql_query("delete from `sompadokio_hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:sompadokiolist.php?msg=4');	
	break;
	default:	
	header('Location:sompadokiolist.php?msg=0');	
	break;
	}
?>