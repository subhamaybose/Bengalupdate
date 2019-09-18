<!--header section start-->
<?php require_once( 'includes/header.php');?>
<!--header section end-->
<!--hitcounter section start-->
<?php 
function addHit(){
	mysql_query("INSERT INTO sompadokio_hit_count ( pge_name, views) VALUES ( 'id=".$_GET['id']."', 3500) ON DUPLICATE KEY UPDATE views=views+1");
}
addHit();
function getHit(){
	$hits = mysql_query("SELECT * FROM `sompadokio_hit_count` WHERE `pge_name`='id=".$_GET['id']."'");
	$page_hits = mysql_fetch_assoc($hits);
	
	return $page_hits['views'];
}
?>
<!--hitcounter section end-->
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
			<?php 
				$sql=mysql_query( "select * from `sompadokio` where `id`='".$_REQUEST['id']."'"); 
				if(mysql_num_rows($sql)>0){ 
				$ff=mysql_fetch_object($sql); 
			?>
			<div class="insidecont">
				<h1><?php echo $ff->title;?></h1>
				<div class="clear"></div>
				<div class="social-plug">
					<div class="social-sharing" data-permalink="<?php echo curPageURL();?>">
						<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo curPageURL();?>" class="share-facebook"> <span class="fa fa-facebook" aria-hidden="true"></span> <span class="share-title">Share</span> <span class="share-count">0</span> </a>
						<a target="_blank" href="http://twitter.com/share?url=<?php echo curPageURL();?>" class="share-twitter"> <span class="fa fa-twitter" aria-hidden="true"></span> <span class="share-title">Tweet</span> <span class="share-count">0</span> </a>
					</div>
				</div>
				<div class="clear"></div>
				<div class="thumb">
					<?php if(!empty($ff->topicimg)){?>
					<img src="images/uploaded/<?php echo $ff->topicimg;?>" alt="<?php echo $ff->title;?>"/> 
					<?php }else{?>
					<img src="images/no_img.png" alt="<?php echo $ff->title;?>"/>
					<?php }?>
				</div>
				<div class="cont">
					<p><?php echo $ff->text;?></p>
					<p style="margin:15px 0; text-align:center; color:#393;" align="center">সংবাদটি <?php echo getHit();?> বার পঠিত</p>
					<div class="time"> <i class="fa fa-clock-o"></i><?php echo date('g:i a \o\n l jS F Y',$ff->now);?></div>
					<div class="writer"> <i class="fa fa-user"></i><?php echo $ff->author;?> </div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<?php }?>
			<div class="clear"></div>
		</div>
		<!--main content end-->
	    <!--main content right section start-->
		<div class="span4">
			<?php require_once( 'includes/page-right-sec.php');?>
		</div>
		<div class="clear"></div>
		<!--main content right section end-->
		<!--responsive ad section start-->
		<div class="span6">
			<?php require_once( 'includes/banner-responsive-left.php');?> 
		</div>
		<div class="span6">
			<?php require_once( 'includes/banner-responsive-right.php');?>
		</div>
		<!--responsive ad section end-->
		<div class="clear"></div>
	</div>
	<!--footer section start-->
	<?php require_once( 'includes/footer.php');?> 
	<!--footer section end-->
<?php
function curPageURL() {
 $pageURL = 'http';
 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
</body>
</html>