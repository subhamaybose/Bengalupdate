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
	<h1>অফবিট</h1>
	<div class="clear"></div>
	<div class="sectionD">
		<ul class="Videolist">
			<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='prasongik' and date<='".$_REQUEST['dt']."' order by `id` desc");
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
				<div class="hoverlay-box"> <a class="btn" href="video_relevant_details-page.php?vid=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
			</li>
		    <?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
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

