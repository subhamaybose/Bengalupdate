<?php
include("../../config/config.php");
if($_REQUEST['election']=='bidhansabha'){
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `bidhansabha_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="33.33%" >দল</th>
				<td width="33.33%" >প্রার্থী</td>
				<td width="33.33%" >প্রাপ্ত ভোট</td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl1.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol1" id="p_dol1" value="'.$sqllf->ca_dol_1.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl2.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol2" id="p_dol2" value="'.$sqllf->ca_dol_2.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl3.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol3" id="p_dol3" value="'.$sqllf->ca_dol_3.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="33.33%" >'.$df->dl4.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol4" id="p_dol4" value="'.$sqllf->ca_dol_4.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="33.33%" >অন্ন্যান্য:</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol5" id="p_dol5" value="'.$sqllf->ca_dol_5.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}	
}
else if($_REQUEST['election']=='loksabha'){
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `loksabha_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="33.33%" >দল</th>
				<td width="33.33%" >প্রার্থী</td>
				<td width="33.33%" >প্রাপ্ত ভোট</td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl1.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol1" id="p_dol1" value="'.$sqllf->ca_dol_1.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl2.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol2" id="p_dol2" value="'.$sqllf->ca_dol_2.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl3.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol3" id="p_dol3" value="'.$sqllf->ca_dol_3.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="33.33%" >'.$df->dl4.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol4" id="p_dol4" value="'.$sqllf->ca_dol_4.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="33.33%" >অন্ন্যান্য:</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol5" id="p_dol5" value="'.$sqllf->ca_dol_5.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}
}
else if($_REQUEST['election']=='municipality'){
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `municipality_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="33.33%" >দল</th>
				<td width="33.33%" >প্রার্থী</td>
				<td width="33.33%" >প্রাপ্ত ভোট</td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl1.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol1" id="p_dol1" value="'.$sqllf->ca_dol_1.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl2.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol2" id="p_dol2" value="'.$sqllf->ca_dol_2.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl3.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol3" id="p_dol3" value="'.$sqllf->ca_dol_3.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="33.33%" >'.$df->dl4.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol4" id="p_dol4" value="'.$sqllf->ca_dol_4.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="33.33%" >অন্ন্যান্য:</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol5" id="p_dol5" value="'.$sqllf->ca_dol_5.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}	
}
else if($_REQUEST['election']=='by_loksabha'){
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `by_election_loksabha_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="33.33%" >দল</th>
				<td width="33.33%" >প্রার্থী</td>
				<td width="33.33%" >প্রাপ্ত ভোট</td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl1.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol1" id="p_dol1" value="'.$sqllf->ca_dol_1.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl2.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol2" id="p_dol2" value="'.$sqllf->ca_dol_2.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl3.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol3" id="p_dol3" value="'.$sqllf->ca_dol_3.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="33.33%" >'.$df->dl4.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol4" id="p_dol4" value="'.$sqllf->ca_dol_4.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="33.33%" >অন্ন্যান্য:</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol5" id="p_dol5" value="'.$sqllf->ca_dol_5.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}
}
else if($_REQUEST['election']=='by_bidhansabha'){
$qls=mysql_query("select d1.dol_name AS dl1, d2.dol_name AS dl2, d3.dol_name AS dl3, d4.dol_name AS dl4 from `state_wise_dol` LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.status='0' AND state_wise_dol.state='".$_REQUEST['rajjo']."'");
		if(mysql_num_rows($qls)>0){
		while($df=mysql_fetch_object($qls)){
			$sqll= mysql_query("select * from `by_election_bidhansabha_result` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			echo '<tr>
				<th width="33.33%" >দল</th>
				<td width="33.33%" >প্রার্থী</td>
				<td width="33.33%" >প্রাপ্ত ভোট</td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl1.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol1" id="p_dol1" value="'.$sqllf->ca_dol_1.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol1" id="v_dol1" value="'.$sqllf->vo_dol_1.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl2.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol2" id="p_dol2" value="'.$sqllf->ca_dol_2.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol2" id="v_dol2" value="'.$sqllf->vo_dol_2.'"/></td>
			</tr>
			<tr>
				<th width="33.33%" >'.$df->dl3.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol3" id="p_dol3" value="'.$sqllf->ca_dol_3.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol3" id="v_dol3" value="'.$sqllf->vo_dol_3.'"/></td>
			</tr><tr>
				<th width="33.33%" >'.$df->dl4.':</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol4" id="p_dol4" value="'.$sqllf->ca_dol_4.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol4" id="v_dol4" value="'.$sqllf->vo_dol_4.'"/></td>
			</tr><tr>
				<th width="33.33%" >অন্ন্যান্য:</th>
				<td width="33.33%" ><input type="text" class="inp-form" name="p_dol5" id="p_dol5" value="'.$sqllf->ca_dol_5.'"/></td>
				<td width="33.33%" ><input type="text" class="inp-form" name="v_dol5" id="v_dol5" value="'.$sqllf->vo_dol_5.'"/></td>
			</tr>';
		}}
}
?>