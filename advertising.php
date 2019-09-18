<!--header section start-->
<?php require_once( 'includes/header.php');?>
<!--header section end-->
<body>
	<!--menu start-->
	<?php require_once( 'includes/page-top-sec1.php');?>
	<!--menu end-->
	<div class="row">
		<!--breaking & scrollable news start-->
		<?php require_once( 'includes/page-top-sec2.php');?>
		<!--breaking & scrollable news end-->
		<div class="clear"></div>
		<!--main content start-->
		<div class="span8">
			<div class="insidecont">
				<?php 
				$sql=mysql_query( "select * from `advertisepage`"); 
				if(mysql_num_rows($sql)>0){ 
				$ff=mysql_fetch_object($sql); 
				?>
				<h5 class="Eng-Head">Advertisement Bengal Update</h5>
				<div class="clear"></div>
				<div class="thumb"><img src="images/uploaded/<?php echo $ff->image;?>" alt="<?php echo $ff->title;?>" /> </div>
				<div class="cont">
					<?php echo $ff->text;?> 
				</div>
				<div class="clear"></div>
				<?php } ?>
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