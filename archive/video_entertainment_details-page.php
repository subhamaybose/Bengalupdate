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
	<div class="insidecont">
		<!--<h1>ভারত বিনিয়োগের ক্ষেত্রে এক গুরুত্বপূর্ণ দেশ, ৮ শতাংশ হারে জি ডি পি’র বিকাশ শীঘ্রই অর্জন সম্ভব : রাষ্ট্রপতি শ্রী প্রণব মুখোপাধ্যায়</h1>-->
		<div class="clear"></div>
		<div class="social-plug">
			<div class="social-sharing" data-permalink="<?php echo curPageURL();?>">
				<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo curPageURL();?>" class="share-facebook"> <span class="fa fa-facebook" aria-hidden="true"></span> <span class="share-title">Share</span> <span class="share-count">0</span> </a>
				<a target="_blank" href="http://twitter.com/share?url=<?php echo curPageURL();?>" class="share-twitter"> <span class="fa fa-twitter" aria-hidden="true"></span> <span class="share-title">Tweet</span> <span class="share-count">0</span> </a>
			</div>
		</div>
		<div class="clear"></div>
		<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='entertainment' and `id`='".$_REQUEST['vid']."'");
			  $ff=mysql_fetch_object($sql);
		?>
		<div class="Videodetailspage">
			<iframe width="590" height="300" src="https://www.youtube.com/embed/<?php echo $ff->text;?>?controls=0" frameborder="0" allowfullscreen></iframe>
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

