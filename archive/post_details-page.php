<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<!--hitcounter section start-->
<?php require_once('includes/hitcounter.php');?>
<!--hitcounter section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<?php #require_once('includes/page-top-sec2.php');?>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
    <?php $sql=mysql_query("select * from `post` where `status`='0' and `id`='".$_GET['id']."' ");
      $ff=mysql_fetch_object($sql);      
    ?>
	<!--main content start-->
    <div class="span8">
        <div class="insidecont">
            <h1><?php echo $ff->title;?></h1>
            <div class="clear"></div>
            
            <div class="social-plug">                
                <div class="social-sharing" data-permalink="http://dtechsystem.net/">
                    <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo curPageURL();?>" class="share-facebook">
                      <span class="fa fa-facebook" aria-hidden="true"></span>
                      <span class="share-title">Share</span>
                      <span class="share-count">0</span>
                    </a>
                    
                    <a target="_blank" href="http://twitter.com/share?url=<?php echo curPageURL();?>" class="share-twitter">
                      <span class="fa fa-twitter" aria-hidden="true"></span>
                      <span class="share-title">Tweet</span>
                      <span class="share-count">0</span>
                    </a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="thumb">
				<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
			</div>
            <div class="cont">
                <?php echo strip_tags($ff->text);?>
				<?php $count=getHit();if($count!=''){?>
				<p style="margin:15px 0; text-align:center; color:#393;" align="center">সংবাদটি <?php echo getHit();?> বার পঠিত</p>
				<?php }?>
				<div class="clear"></div>
                <div class="time">
                    <i class="fa fa-clock-o"></i><?php echo date('g:i a \o\n l jS F Y',$ff->now);?>
                </div>
                <div class="writer">
                    <i class="fa fa-user"></i><?php echo $ff->author_name;?>
                </div>
                <div class="clear"></div>
                
                <div class="comments_plug">
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    
                    <div class="fb-comments" data-href="politics_state_details-page.php?id=<?php echo $ff->id;?>l" data-width="590" data-numposts="10"></div>
                </div>
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
<!--<script>
    var n = localStorage.getItem('on_load_counter');
    if (n === null) {
        n = 0;
    }
    n++;
    localStorage.setItem("on_load_counter", n);
    document.getElementById('counter').innerHTML = n;
</script>-->
</body>
</html>
