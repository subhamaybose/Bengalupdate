<?php
include("../../config/config.php");
if(isset($_REQUEST[id])){
	$sqll= mysql_query("select * from `bidhansabha_result` where `id`='".$_REQUEST['id']."'");
			$sqllf=mysql_fetch_object($sqll);
			$kendro = $sqllf->kendro;
			
	$qls=mysql_query("select * from `bidhansabha_constituency` where `status`='0' AND `district`='".$_REQUEST['district']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'" '.(($kendro==''.$df->id.'')?'selected="selected"':'').'>'.$df->constituency.'</option>';
			}}
}else{
			echo '<option value="0"  selected="" disabled="">Select Constituency</option>';
	$qls=mysql_query("select * from `bidhansabha_constituency` where `status`='0' AND `district`='".$_REQUEST['district']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'">'.$df->constituency.'</option>';
			}}
}
?>