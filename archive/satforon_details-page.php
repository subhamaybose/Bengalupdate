<!--header section start-->
<?php require_once( 'includes/header.php');?>
<!--header section end-->
<body>
	<!--upto menu start-->
	<?php require_once( 'includes/page-top-sec1.php');?>
	<!--upto menu end-->
	<div class="row">
		<!--breaking & scrollable news start-->
		<?php require_once( 'includes/page-top-sec2.php');?>
		<!--breaking & scrollable news end-->
		<div class="clear"></div>
		<!--main content start-->
		<?php 
		$sql=mysql_query( "select * from `post` where `status`='0' and `id`='".$_GET[ 'id']. "' "); 
		if(mysql_num_rows($sql)>0){ 
		$ff=mysql_fetch_object($sql); 
		?>
		<div class="span8">
			<div class="insidecont">
				<h1><?php echo $ff->title;?></h1>
				<div class="clear"></div>
				<div class="social-plug">
					<div class="social-sharing" data-permalink="http://dtechsystem.net/">
						<a target="_blank" href="http://www.facebook.com/sharer.php?u=http://dtechsystem.net/" class="share-facebook"> <span class="fa fa-facebook" aria-hidden="true"></span> <span class="share-title">Share</span> <span class="share-count">0</span> </a>
						<a target="_blank" href="http://twitter.com/share?url=http://dtechsystem.net/" class="share-twitter"> <span class="fa fa-twitter" aria-hidden="true"></span> <span class="share-title">Tweet</span> <span class="share-count">0</span> </a>
					</div>
				</div>
				<div class="clear"></div>
				<div class="thumb"><img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>"> </div>
				<div class="cont">
					<p><?php echo strip_tags($ff->text);?></p>
					<p style="margin:15px 0; text-align:center; color:#393;" align="center">সংবাদটি ৩৬৩ বার পঠিত</p>
					<div class="time"> <i class="fa fa-clock-o"></i>
						<?php echo date( 'g:i a \o\n l jS F Y',$ff->now);?> </div>
					<div class="writer"> <i class="fa fa-user"></i>
						<?php echo $ff->author_name;?> </div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<?php }?>
		<!--main content end-->
		<!--main content right section start-->
		<div class="span4">
			<?php require_once( 'includes/page-right-sec.php');?> 
		</div>
		<!--main content right section end-->
		<div class="clear"></div>
		<!--responsive ad section start-->
		<div class="span6">
			<?php require_once( 'includes/banner-responsive-left.php');?> 
			</div>
		<div class="span6">
			<?php require_once( 'includes/banner-responsive-right.php');?> 
		</div>
		<div class="clear"></div>
		<!--responsive ad section end-->
	</div>
	<!--footer section start-->
	<?php require_once( 'includes/footer.php');?>
	<!--footer section end-->
</body>
</html>