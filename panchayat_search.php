<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1elec.php');?>
<!--menu end-->
<div class="row">
	
	<div class="clear"></div>
		<!--==============================================Election form================================================= -->
		<div class="span12">
			<div class="election">
				<form action="panchayat_search.php" method="post" class="election-form">
					<h1>Search</h1>
					<!--<div class="">
						<select name="v_id" id="v_id">
							<option selected="selected">Election Type</option>
							<option>Option 1</option>
							<option>Option 2</option>
							<option>Option 3</option>
							<option>Option 4</option>
							<option>Option 5</option>
						</select>
					</div>-->
					<div class="">
						<?php 
						$yr=date("Y");
						?>
						<select name="e_yr" id="e_yr">
							<?php
							for($i=2015;$i<=$yr;$i++) {
							?>
								<option value="<?php echo $i;?>" <?php if($i==$yr) echo "selected";?>/><?php echo $i ;?>
							<?php
								}
							?>
						</select>
					</div>
					<div class="">
						<select name="e_state" id="e_state" onChange="javascript:getData(this.value);">
							<option value="0" selected >Select State</option>
							<?php 
							$qls=mysql_query("select * from `rajjo` where `status`='0'");
							if(mysql_num_rows($qls)>0){
							while($df=mysql_fetch_object($qls)){
							?>
							<option value="<?php echo $df->id;?>"><?php echo $df->rajjo;?></option>
							<?php }}?>			 
						</select>
					</div>
					<div class="">
						<select name="e_district" id="e_district" onChange="javascript:getDataM(this.value);">
							<option value="0" selected >Select District</option>
						</select>
					</div>
					<div class="">
						<select name="e_panchayat" id="e_panchayat">
							<option value="0" selected >Select Panchayat</option>
						</select>
					</div>
					<div class="clear"></div>
					<button class="btn" type="submit" name="submit">Submit</button>
					<!--<a class="btn" href="#">Submit</a>-->
					<div class="clear"></div>
				</form>
				<div class="clear"></div>
			</div>
		</div>
		<?php 
		if(isset($_POST['submit'])){
			$yr=$_POST['e_yr'];
			$state=$_POST['e_state'];
			$district=$_POST['e_district'];
			$panchayat=$_POST['e_panchayat'];
			$url ="panchayat.php?state=".$state."&yr=".$yr."&district=".$district."&panchayat=".$panchayat;
			header('location: '.$url);
		}
		?>
		<!--==============================================Election form================================================= -->
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
<script type="text/javascript">
function getData(value){
	var rajjo =value;
	$.ajax({
			url:"admin/ajax/district.php",
			method:"GET",
			data:{rajjo:rajjo},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#e_district").html(data);
				}
			});
}
function getDataM(value){
	var district =value;
	$.ajax({
			url:"admin/ajax/pkendro.php",
			method:"GET",
			data:{district:district},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#e_panchayat").html(data);
				}
			});
}
</script>