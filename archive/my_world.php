<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<?php #require_once('includes/page-top-sec2.php');?>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
	<!--main content start-->
	<div class="span8">
		<div class="insidecont">
			<h1>আমার দুনিয়া</h1>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL bluebg">রাজ্য</div>
				<div class="panelR"> <a href="my_world_state.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='4' and `date`<='".$_REQUEST['dt']."' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL bluebg">দেশ</div>
				<div class="panelR"> <a href="my_world_country.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='5' and `date`<='".$_REQUEST['dt']."' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL bluebg">আন্তর্জাতিক</div>
				<div class="panelR"> <a href="my_world_international.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='6' and `date`<='".$_REQUEST['dt']."' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } ?> 
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<!--main content end-->
	<!--main content right section start-->
	<div class="span4">
    	<?php require_once('includes/page-right-sec.php');?>
    </div>
	<!--main content right section end-->
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