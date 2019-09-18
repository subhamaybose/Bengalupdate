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
             		<tr>
						 <?php $sql=mysql_query("select * from `rajjo` where `id`='".$_REQUEST['state']."'");
						if(mysql_num_rows($sql)> 0){
							while($sqlf=mysql_fetch_object($sql) ){
						?>
             			<th><img src="<?php echo 'images/uploaded/map/'.$sqlf->img;?>" height="150" /></th>
						<?php }}?>
              			<th colspan="7" class="">
                            <h1>পৌরসভার ফলাফল  <span><?php echo $_REQUEST['yr'];?></span></h1>
							 <?php $sql=mysql_query("select * from `municipality` where `id`='".$_REQUEST['municipality']."'");
							if(mysql_num_rows($sql)> 0){
							while($sqlf=mysql_fetch_object($sql) ){
						?>
						   <h1>পৌরসভা - <span><?php echo $sqlf->municipality;?> (মোট আসন - <span><?php echo $sqlf->seats;?></span>)</span></h1>
						<?php }}?>
                   		</th>
                  	</tr>
                    <?php $sql=mysql_query("SELECT state_wise_dol.id AS ids, state_wise_dol.status AS stat, rajjo.rajjo AS state, d1.dol_name AS dl1, d1.flag AS f1, d2.dol_name AS dl2, d2.flag AS f2, d3.dol_name AS dl3, d3.flag AS f3, d4.dol_name AS dl4, d4.flag AS f4 FROM state_wise_dol LEFT JOIN rajjo ON state_wise_dol.state=rajjo.id LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id where state_wise_dol.state='".$_REQUEST['state']."'");
							if(mysql_num_rows($sql)>0){
							while($sqlf=mysql_fetch_object($sql)){
							?>
						<tr>
							<th>ওয়ার্ড নম্বর</th>
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
                  <?php $sql=mysql_query("SELECT municipality_result.id, municipality_result.ward, municipality_result.ca_dol_1, municipality_result.vo_dol_1, municipality_result.ca_dol_2, municipality_result.vo_dol_2, municipality_result.ca_dol_3, municipality_result.vo_dol_3, municipality_result.ca_dol_4, municipality_result.vo_dol_4, municipality_result.ca_dol_5, municipality_result.vo_dol_5, municipality_result.status, municipality_result.round, municipality_result.result, municipality_result.difference FROM `municipality_result` WHERE municipality_result.kendro='".$_REQUEST['municipality']."' AND municipality_result.date='".$_REQUEST['yr']."' AND municipality_result.status='0' ORDER BY municipality_result.ward");
					if(mysql_num_rows($sql)==0){
					?>
					<tr>					
						<td colspan="8" align="center"> <strong>No Text Added</strong></td>
						
					</tr>
					<?php }else{
						while($sqlf=mysql_fetch_object($sql) ){
					?>
						<tr>
							<td>ওয়ার্ড নম্বর <?php echo $sqlf->ward;?>
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
          <?php if($_REQUEST['state']=='2'){?>
        	<div align="right"><a href="http://www.wbsec.gov.in">বিস্তারিত ফলাফল বিশ্লেষণ</a></div>
        <?php } ?>
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