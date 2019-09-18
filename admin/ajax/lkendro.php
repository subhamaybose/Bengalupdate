<?php
include("../../config/config.php");
if(isset($_REQUEST['id'])){
	if($_REQUEST['election']=='by_loksabha'){
	$sqll= mysql_query("select * from `by_election_loksabha_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$kendro = $sqllf->kendro;
	$qls=mysql_query("select * from `loksabha_constituency` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'" '.(($kendro==''.$df->id.'')?'selected="selected"':'').'>'.$df->constituency.'</option>';
			}}	
	}else{
	$sqll= mysql_query("select * from `loksabha_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$kendro = $sqllf->kendro;
	$qls=mysql_query("select * from `loksabha_constituency` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'" '.(($kendro==''.$df->id.'')?'selected="selected"':'').'>'.$df->constituency.'</option>';
			}}	
	}
}else{
	$qls=mysql_query("select * from `loksabha_constituency` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'">'.$df->constituency.'</option>';
			}}
}
?>