<?php
include("../../config/config.php");
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `panchayat_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="50%" >দল</th>
				'.(($_REQUEST['pct']=='zseats')?'<td width="50%" >প্রাপ্ত আসন</td>':'<td width="50%" >জয়ী</td>').'
			</tr>
			<tr>
				<th width="50%" >'.$df->dl1.':</th>
				<td width="50%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="50%" >'.$df->dl2.':</th>
				<td width="50%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="50%" >'.$df->dl3.':</th>
				<td width="50%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="50%" >'.$df->dl4.':</th>
				<td width="50%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="50%" >অন্ন্যান্য:</th>
				<td width="50%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}	
?>