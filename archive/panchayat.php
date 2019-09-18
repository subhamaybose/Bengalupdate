<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1dt.php');?>
<!--menu end-->
<div class="row">
	
    <div class="clear"></div>
		<!--Main content start-->
		<div class="span12">
			 <div class="election">
       	<h1>পঞ্চায়েতের ফলাফল <span>(<?php echo $_REQUEST['yr'];?>)</span></h1>
        <!--<h1><span>উত্তর ২৪ পরগণা</span></h1>-->
         <table width="100%" class="Vtable">
              <thead>
                  <tr>
					<?php $sql=mysql_query("select * from `panchayat` where `id`='".$_REQUEST['panchayat']."'");
							if(mysql_num_rows($sql)> 0){
							while($sqlf=mysql_fetch_object($sql) ){
								$zseat = $sqlf->zseats;
								$psseat = $sqlf->ps_seats;
								$gpseat = $sqlf->gpseats;
					?>
                      <th>জেলা - <?php echo $sqlf->panchayat;?></th>
					<?php }} ?>
					<?php $sql=mysql_query("SELECT state_wise_dol.id AS ids, state_wise_dol.status AS stat, rajjo.rajjo AS state, d1.dol_name AS dl1, d1.flag AS f1, d2.dol_name AS dl2, d2.flag AS f2, d3.dol_name AS dl3, d3.flag AS f3, d4.dol_name AS dl4, d4.flag AS f4 FROM state_wise_dol LEFT JOIN rajjo ON state_wise_dol.state=rajjo.id LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.state='".$_REQUEST['state']."'");
							if(mysql_num_rows($sql)>0){
							while($sqlf=mysql_fetch_object($sql)){
					?>
						<th class=""><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f1;?>" /><?php echo $sqlf->dl1;?></th>
						<th class=""><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f2;?>" /><?php echo $sqlf->dl2;?></th>
						<th class=""><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f3;?>" /><?php echo $sqlf->dl3;?></th>
						<th class=""><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f4;?>" /><?php echo $sqlf->dl4;?></th>
						<th class="">Others</th>
					<?php }}?>
                  </tr>
              </thead>
              <tbody>
			  <?php $sql=mysql_query("SELECT panchayat_result.id, panchayat_result.vo_dol_1, panchayat_result.vo_dol_2, panchayat_result.vo_dol_3, panchayat_result.vo_dol_4, panchayat_result.vo_dol_5 FROM `panchayat_result` WHERE panchayat_result.kendro='".$_REQUEST['panchayat']."' AND panchayat_result.date='".$_REQUEST['yr']."' AND panchayat_result.status='0' AND panchayat_result.result_type='zseats'");
					if(mysql_num_rows($sql)==0){
					?>
					<tr>
						<td style="color:#fff; text-align:left; background-color:#6e96d2;">জেলা পরিসদ (মোট আসন - <span><?php echo $zseat; ?></span>)</td>
						<td colspan="5" align="center"> <strong>No Text Added</strong></td>
					</tr>
					<?php }else{
						while($sqlf=mysql_fetch_object($sql) ){
							?>
					<tr>
					  <td style="color:#fff; text-align:left; background-color:#6e96d2;">জেলা পরিসদ (মোট আসন - <span><?php echo $zseat; ?></span>)</td>
					  <td><?php echo $sqlf->vo_dol_1;?></td>
                      <td><?php echo $sqlf->vo_dol_2;?></td>
                      <td><?php echo $sqlf->vo_dol_3;?></td>
                      <td><?php echo $sqlf->vo_dol_4;?></td>
                      <td><?php echo $sqlf->vo_dol_5;?></td>
                  </tr>	
						<?php }}?>
			  <?php $sql=mysql_query("SELECT panchayat_result.id, panchayat_result.vo_dol_1, panchayat_result.vo_dol_2, panchayat_result.vo_dol_3, panchayat_result.vo_dol_4, panchayat_result.vo_dol_5 FROM `panchayat_result` WHERE panchayat_result.kendro='".$_REQUEST['panchayat']."' AND panchayat_result.date='".$_REQUEST['yr']."' AND panchayat_result.status='0' AND panchayat_result.result_type='ps_seats'");
					if(mysql_num_rows($sql)==0){
					?>
                  <tr>
                      <td style="color:#fff; text-align:left; background-color:#4979bf;">পঞ্চায়েত সমিতি (মোট - <span><?php echo $psseat; ?></span>)</td>
                      <td colspan="5" align="center"> <strong>No Text Added</strong></td>
				  </tr>
				  <?php }else{
						while($sqlf=mysql_fetch_object($sql) ){
							?>
				  <tr>
                      <td style="color:#fff; text-align:left; background-color:#4979bf;">পঞ্চায়েত সমিতি (মোট - <span><?php echo $psseat; ?></span>)</td>
                      <td><?php echo $sqlf->vo_dol_1;?></td>
                      <td><?php echo $sqlf->vo_dol_2;?></td>
                      <td><?php echo $sqlf->vo_dol_3;?></td>
                      <td><?php echo $sqlf->vo_dol_4;?></td>
                      <td><?php echo $sqlf->vo_dol_5;?></td>
				  </tr>
				  <?php }}?>
				   <?php $sql=mysql_query("SELECT panchayat_result.id, panchayat_result.vo_dol_1, panchayat_result.vo_dol_2, panchayat_result.vo_dol_3, panchayat_result.vo_dol_4, panchayat_result.vo_dol_5 FROM `panchayat_result` WHERE panchayat_result.kendro='".$_REQUEST['panchayat']."' AND panchayat_result.date='".$_REQUEST['yr']."' AND panchayat_result.status='0' AND panchayat_result.result_type='gpseats'");
					if(mysql_num_rows($sql)==0){
					?>
                  <tr>
                      <td style="color:#fff; text-align:left; background-color:#6e96d2;">গ্রাম পঞ্চায়েত (মোট - <span><?php echo $gpseat; ?></span>)</td>
                     <td colspan="5" align="center"> <strong>No Text Added</strong></td>
                  </tr>
				   <?php }else{
						while($sqlf=mysql_fetch_object($sql) ){
							?>
					  <tr>
                      <td style="color:#fff; text-align:left; background-color:#6e96d2;">গ্রাম পঞ্চায়েত (মোট - <span><?php echo $gpseat; ?></span>)</td>
                      <td><?php echo $sqlf->vo_dol_1;?></td>
                      <td><?php echo $sqlf->vo_dol_2;?></td>
                      <td><?php echo $sqlf->vo_dol_3;?></td>
                      <td><?php echo $sqlf->vo_dol_4;?></td>
                      <td><?php echo $sqlf->vo_dol_5;?></td>
                  </tr>
				  <?php }}?>
                  <!--<tr>
                      <td style="color:#fff; text-align:left; background-color:#9e9e9e;">মোট</td>
                      <td>xxx</td>
                      <td>xxx</td>
                      <td>xxx</td>
                      <td>xxx</td>
                      <td>xxx</td>
                  </tr>-->
              </tbody>
          </table>
           <?php if($_REQUEST['state']=='2'){?>
        <div align="right"><a href="http://www.wbsec.gov.in">বিস্তারিত ফলাফল বিশ্লেষণ</a></div>
        <?php } ?>
        </div>
		</div>
		<!--Main content end-->
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