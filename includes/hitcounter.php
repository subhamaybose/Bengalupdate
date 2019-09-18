<?php 
function addHit(){
	mysql_query("INSERT INTO hit_count ( pge_name, views) VALUES ( 'id=".$_GET['id']."', 3500) ON DUPLICATE KEY UPDATE views=views+1");
}
addHit();
function getHit(){
	$hits = mysql_query("SELECT * FROM `hit_count` WHERE `pge_name`='id=".$_GET['id']."'");
	$page_hits = mysql_fetch_assoc($hits);
	
	return $page_hits['views'];
}
?>