<?php
include("../../config/config.php");
if(isset($_REQUEST[id])){
	$sqll= mysql_query("select * from `municipality_result` where `id`='".$_REQUEST['id']."'");
			$sqllf=mysql_fetch_object($sqll);
			$kendro = $sqllf->kendro;
			
	$qls=mysql_query("select * from `municipality` where `status`='0' AND `district`='".$_REQUEST['district']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'" '.(($kendro==''.$df->id.'')?'selected="selected"':'').'>'.$df->municipality.'</option>';
			}}
}else{
				echo '<option value="0" selected="" disabled="">Select Municipality</option>';
	$qls=mysql_query("select * from `municipality` where `status`='0' AND `district`='".$_REQUEST['district']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'">'.$df->municipality.'</option>';
			}}
}
?>