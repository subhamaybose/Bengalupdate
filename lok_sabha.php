<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1elec.php');?>
<!--menu end-->
<div class="row">
	
    <div class="clear"></div>
		<!--Main content start-->
		<div class="span12">
			<div class="election">
				<table width="100%" class="Vtable">
					<thead>
						 <?php $sql=mysql_query("select * from `rajjo` where `id`='".$_REQUEST['state']."'");
						if(mysql_num_rows($sql)> 0){
							while($sqlf=mysql_fetch_object($sql) ){
						?>
						<tr>
							<th><img src="<?php echo 'images/uploaded/map/'.$sqlf->img;?>" height="150" />
							</th>
							<th colspan="7" class="">
							<?php $sql1=mysql_query("select * from `election_seats` where `id`='1'");
							if(mysql_num_rows($sql1)> 0){
								while($sqlf1=mysql_fetch_object($sql1) ){
							?>
								<h1>লোকসভার ফলাফল (<span><?php echo $sqlf1->loksabha;?></span> টি আসন) <span><?php echo $_REQUEST['yr'];?></span></h1>
							<?php }}?>
								<h1>রাজ্য / কেন্দ্র শাসিত অঞ্চল - <span><?php echo $sqlf->rajjo;?>(মোট আসন - <span><?php echo $sqlf->l_seat;?></span>)</span></h1> </th>
						</tr>
							<?php }}?>
							 <?php $sql=mysql_query("SELECT state_wise_dol.id AS ids, state_wise_dol.status AS stat, rajjo.rajjo AS state, d1.dol_name AS dl1, d1.flag AS f1, d2.dol_name AS dl2, d2.flag AS f2, d3.dol_name AS dl3, d3.flag AS f3, d4.dol_name AS dl4, d4.flag AS f4 FROM state_wise_dol LEFT JOIN rajjo ON state_wise_dol.state=rajjo.id LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.state='".$_REQUEST['state']."'");
							if(mysql_num_rows($sql)>0){
							while($sqlf=mysql_fetch_object($sql)){
							?>
						<tr>
							<th>কেন্দ্রের নাম</th>
							<th class=""><img src="<?php echo 'images/uploaded/flag/'.$sqlf->f1;?>" /><?php echo $sqlf->dl1;?></th>
							<th class=""><img src="<?php echo 'images/uploaded/flag/'.$sqlf->f2;?>" /><?php echo $sqlf->dl2;?></th>
							<th class=""><img src="<?php echo 'images/uploaded/flag/'.$sqlf->f3;?>" /><?php echo $sqlf->dl3;?></th>
							<th class=""><img src="<?php echo 'images/uploaded/flag/'.$sqlf->f4;?>" /><?php echo $sqlf->dl4;?></th>
							<th class="">Others</th>
							<th>জয়ী</th>
							<th>ব্যবধান</th>
						</tr>
							<?php }}?>
					</thead>
					<tbody>
					<?php $sql=mysql_query("SELECT loksabha_result.id, rajjo.rajjo, loksabha_constituency.constituency, loksabha_result.ca_dol_1, loksabha_result.vo_dol_1, loksabha_result.ca_dol_2, loksabha_result.vo_dol_2, loksabha_result.ca_dol_3, loksabha_result.vo_dol_3, loksabha_result.ca_dol_4, loksabha_result.vo_dol_4, loksabha_result.ca_dol_5, loksabha_result.vo_dol_5, loksabha_result.status, loksabha_result.round, loksabha_result.result, loksabha_result.difference FROM `loksabha_result` LEFT JOIN rajjo ON loksabha_result.state=rajjo.id LEFT JOIN loksabha_constituency ON loksabha_result.kendro=loksabha_constituency.id WHERE loksabha_result.state='".$_REQUEST['state']."' AND loksabha_result.date='".$_REQUEST['yr']."' AND loksabha_result.status='0' ");
					if(mysql_num_rows($sql)==0){
					?>
					<tr>					
						<td colspan="8" align="center"> <strong>No Text Added</strong></td>
						
					</tr>
					<?php }else{
						while($sqlf=mysql_fetch_object($sql) ){
					?>
						<tr>
							<td><?php echo $sqlf->constituency;?>
								<br />(<?php echo $sqlf->round;?> রাউন্ড এর শেষে)</td>
							<td><?php echo $sqlf->ca_dol_1;?>
								<br />(<?php echo $sqlf->vo_dol_1;?>)</td>
							<td><?php echo $sqlf->ca_dol_2;?>
								<br />(<?php echo $sqlf->vo_dol_2;?>)</td>
							<td><?php echo $sqlf->ca_dol_3;?>
								<br />(<?php echo $sqlf->vo_dol_3;?>)</td>
							<td><?php echo $sqlf->ca_dol_4;?>
								<br />(<?php echo $sqlf->vo_dol_4;?>)</td>
							<td><?php echo $sqlf->ca_dol_5;?>
								<br />(<?php echo $sqlf->vo_dol_5;?>)</td>
							<td><?php echo $sqlf->result;?></td>
							<td><?php echo $sqlf->difference;?></td>
						</tr>
					<?php }}?>
						<!--<tr>
							<td>কোলকাতা দঃ</td>
							<td>xxx</td>
							<td>xxx</td>
							<td>xxx</td>
							<td>xxx</td>
							<td>xxx</td>
							<td>xxx</td>
							<td>xxx</td>
						</tr>-->
					</tbody>
				</table>
			</div>
		</div>
		<!--Main content end-->
		<div class="clear"></div>
		<div class="clear"></div>
	<!--responsive ad section start-->
	<div class="span6">
    	<?php require_once('includes/banner-responsive-left.php');?>
    </div>
    <div class="span6">
    	<?php require_once('includes/banner-responsive-right.php');?>
    </div>
    <div class="clear"></div>
	<!--responsive ad section end-->
</div>
<!--footer section start-->
<?php require_once('includes/footer.php');?>
<!--footer section end-->
</body>
</html>