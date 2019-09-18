<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/";
        $path1="../images/uploaded/author/";
	$qlf=mysql_fetch_object(mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}
               if($qlf->author_image!=''){
		@unlink($path1.$qlf->author_image);
		}
	mysql_query("delete from `post` where `id`='".$_REQUEST['id']."'  ",$conn);
	mysql_query("delete from `hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:postlist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `post` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	else{
		mysql_query("update  `post` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);;
	}
	if(isset($_REQUEST['aid'])){
	header('Location:postlist.php?msg=2&id='.$_REQUEST['aid']);		
	}else{
	header('Location:postlist.php?msg=2');		
	}
	break;
	case 'archive':
	#$path="../images/uploaded/";
    #$path1="../images/uploaded/author/";
	$qlf=mysql_fetch_object(mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' ",$conn));
		/*if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}
               if($qlf->author_image!=''){
		@unlink($path1.$qlf->author_image);
		}*/
		$sql=mysql_query("insert into `post` set 
			`id`='".$qlf->id."',
			`admin_id`='".$qlf->admin_id."',
			`status`='".$qlf->status."',
			`order`='".$qlf->order."',
			`date`='".$qlf->date."',
			`time`='".$qlf->time."',
			`pagecat`='".$qlf->pagecat."',
			`cat`='".$qlf->cat."',
			`topnews`='".$qlf->topnews."',
			`exclusive`='".$qlf->exclusive."',
			`dinersera`='".$qlf->dinersera."',
			`khoborkholok`='".$qlf->khoborkholok."',
			`khelarjholok`='".$qlf->khelarjholok."',
			`lead`='".$qlf->lead."',
			`lead_text`='".$qlf->lead_text."',
			`smalltext`='".$qlf->smalltext."',
			`title`='".$qlf->title."',
			`text`='".$qlf->text."',
			`key`='".$qlf->key."',
			`now`='".$qlf->now."',
			`author_name`='".$qlf->author_name."',
			`author_image`='".$qlf->author_image."',
			`image`='".$qlf->image."'",$conn_archive);
	$qlfctr=mysql_fetch_object(mysql_query("select * from `hit_count` where `pge_name`='id=".$_REQUEST['id']."' ",$conn));
		$sql1=mysql_query("insert into `hit_count` set `pge_name`='".$qlfctr->pge_name."', `views`='".$qlfctr->views."'",$conn_archive);
	mysql_query("delete from `post` where `id`='".$_REQUEST['id']."' ",$conn);
	mysql_query("delete from `hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:postlist.php?msg=4');	
	break;
	default:	
	header('Location:postlist.php?msg=0');	
	break;
	}
?>