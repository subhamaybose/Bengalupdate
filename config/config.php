<?php
//ini_set('session.save_path','/home/bengalup/' . '/tmp');
#$conn=mysql_connect('localhost','BengalSom','SukMitBen@2016#%') or die('Error: connection');
#$db=mysql_select_db('bengalup_newdb',$conn);
$conn_archive=@mysql_connect('localhost','root','nopass@12345',true) or die('Error: connection');
$conn=@mysql_connect('localhost','root','nopass@12345',true) or die('Error: connection');
$db_archive=mysql_select_db('newsdb_archive',$conn_archive);
$db=mysql_select_db('newsdb',$conn);
$siteurl="";
$adminsiteurl="";
#$siteurl="http://bengalupdate.com/bengalupdate-new/";
#$adminsiteurl="http://bengalupdate.com/bengalupdate-new/admin/";
?>