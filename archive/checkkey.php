<?php
include('config/config.php');
if(isset($_REQUEST["prod_name"])){
	$sql_id=mysql_query("SELECT * FROM `post` WHERE `key` LIKE '%".$_REQUEST["prod_name"]."%'");
	if(mysql_num_rows($sql_id) > 0)
		{
			$result = "<div class='key'><ul>";
			while($df=mysql_fetch_object($sql_id)){
				$result.="<li>".$df->key."</li>";
			}
			$result.="</ul></div>";
		}
		echo $result;
}
?>