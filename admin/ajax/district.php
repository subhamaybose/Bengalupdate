<?php
include("../../config/config.php");
if(isset($_REQUEST['id'])){
	if($_REQUEST['election']=='bidhansabha'){
		$sqll= mysql_query("select * from `bidhansabha_result` where `id`='".$_REQUEST['id']."'");
			$sqllf=mysql_fetch_object($sqll);
			$district = $sqllf->district;
		
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
				echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
			}}
	}else if($_REQUEST['election']=='municipalentry'){
		$sqll= mysql_query("select * from `municipality` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}else if($_REQUEST['election']=='panchayatentry'){
		$sqll= mysql_query("select * from `panchayat` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}else if($_REQUEST['election']=='municipality'){
		$sqll= mysql_query("select * from `municipality_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}else if($_REQUEST['election']=='by_bidhansabha'){
		$sqll= mysql_query("select * from `by_election_bidhansabha_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}else if($_REQUEST['election']=='panchayat'){
		$sqll= mysql_query("select * from `panchayat_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}else{
		$sqll= mysql_query("select * from `bidhansabha_constituency` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$district = $sqllf->district;
		$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
					echo '<option value="'.$df->id.'" '.(($district==''.$df->id.'')?'selected="selected"':'').'>'.$df->district.'</option>';
				}}
	}
}else{
	$qls=mysql_query("select * from `district` where `status`='0' AND 	`state`='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
			echo '<option value="0" selected="" disabled="">Select District</option>';
		while($df=mysql_fetch_object($qls)){
			echo '<option value="'.$df->id.'">'.$df->district.'</option>';
		}}
}
?>