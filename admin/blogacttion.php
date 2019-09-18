<?php
session_start();
include("../config/config.php");
$act=$_REQUEST['act'];
switch($act){
	case 'delete':
	$path="../images/uploaded/blog/";
       
	$qlf=mysql_fetch_object(mysql_query("select * from `blog` where `id`='".$_REQUEST['id']."' ",$conn));
		if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}
        
	mysql_query("delete from `blog` where `id`='".$_REQUEST['id']."'  ",$conn);
	mysql_query("delete from `blog_hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:bloglist.php?msg=1');	
	break;
	case 'status':
	if($_REQUEST['st']==0){
		mysql_query("update  `blog` set  `status`='1' where `id`='".$_REQUEST['id']."'  ",$conn);
	}
	else{
		mysql_query("update  `blog` set `status`='0' where `id`='".$_REQUEST['id']."'  ",$conn);
	}
	header('Location:bloglist.php?msg=2');	
	break;
	case 'archive':
	#$path="../images/uploaded/blog/";
       
	$qlf=mysql_fetch_object(mysql_query("select * from `blog` where `id`='".$_REQUEST['id']."' ",$conn));
		/*if($qlf->image!=''){
		@unlink($path.$qlf->image);
		}*/
        $sql=mysql_query("insert into `blog` set 
			`id`='".$qlf->id."',
			`status`='".$qlf->status."', 
			`small_text`='".$qlf->small_text."',
			`title`='".$qlf->title."',
			`text`='".$qlf->text."',
			`author_name`='".$qlf->author_name."',
			`date`='".$qlf->date."',			
			`keyword`='".$qlf->keyword."',
			`description`='".$qlf->description."',
			`comment_id`='".$qlf->comment_id."',
			`image`='".$qlf->image."' ",$conn_archive);
		$qlfctr=mysql_fetch_object(mysql_query("select * from `blog_hit_count` where `pge_name`='id=".$_REQUEST['id']."' ",$conn));
		$sql1=mysql_query("insert into `blog_hit_count` set `pge_name`='".$qlfctr->pge_name."', `views`='".$qlfctr->views."'",$conn_archive);
	mysql_query("delete from `blog` where `id`='".$_REQUEST['id']."'  ",$conn);
	mysql_query("delete from `blog_hit_count` where `pge_name`='id=".$_REQUEST['id']."'  ",$conn);
	header('Location:bloglist.php?msg=4');	
	break;
	default:	
	header('Location:bloglist.php?msg=0');	
	break;
	}
?>