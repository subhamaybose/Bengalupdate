<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<?php require_once('includes/page-top-sec2.php');?>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
    <!--main content start-->
	<div class="span8">
	<div class="">
		<div class="heading-panelTwo blueCbg m-bottom">ভিডিও</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">খবর</div>
			<div class="panelR"> <a href="video_news.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='general' order by `id` desc limit 0,2");
					  while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_news_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">রাজনীতি</div>
			<div class="panelR"> <a href="video_politics.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='rajnity' order by `id` desc limit 0,2");
					  while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_politics_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">বিনোদন</div>
			<div class="panelR"> <a href="video_entertainment.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='entertainment' order by `id` desc limit 0,2");
					  while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_entertainment_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">খেলা</div>
			<div class="panelR"> <a href="video_sports.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='sports' order by `id` desc limit 0,2");
						while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_sports_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">অফবিট</div>
			<div class="panelR"> <a href="video_offbit.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='offbeat' order by `id` desc limit 0,2");
					  while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_offbit_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="heading-panel">
			<div class="panelL bluebg">প্রাসঙ্গিক</div>
			<div class="panelR"> <a href="video_relevant.php">আরও খবর দেখুন</a> </div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
		<div class="sectionD">
			<ul class="Videolist">
				<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='prasongik' order by `id` desc limit 0,2");
					  while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<a class="vdo">
						<iframe width="265" height="130" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
						<h2><?php 
						if(!empty($ff->title)){
							echo $ff->title;
						}else{
							echo "No Post Available.";
						}
						?></h2>
					</a>
					<div class="hoverlay-box"> <a class="btn" href="video_offbit_details-page.php?vid=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
				</li>
				<?php } ?>
			</ul>
			<div class="clear"></div>
		</div>
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

