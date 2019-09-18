<?php 
require_once('includes/header.php');?>
<body>
<?php require_once('includes/page-top-sec1.php');?>
<div class="row">
	<?php require_once('includes/page-top-sec2.php');?>
    <div class="clear"></div>
    
    <div class="span8">
    	<div class="insidecont">
        	<h1>ফটো গ্যালারি</h1>
            <div class="clear"></div>
            
            <ul class="bb-custom-grid" id="bb-custom-grid">
			<!--cartoon-gallery.html--> 
			<?php 
			$sqlz=mysql_query("select `name`, id as cid from `galcat` where `status`='0' order by `id` desc");
				while($ff=mysql_fetch_object($sqlz)){	  
			?>
			<li>
					<h3><?php echo $ff->name;?></h3>
					<div class="bb-bookblock">
						<?php
						$sqls=mysql_query("select * from `gallerys` where `status`='0' and `cat`='".$ff->cid."' order by `id` desc");
						$catid=$ff->cid;
						$catname=$ff->name;
						$cnt=0;
						while($ffs=mysql_fetch_object($sqls))
						{
							$cnt++;
							if(!empty($ffs->img)){
						?>
						<div class="bb-item"><a href="cartoon-gallery.php?id=<?php echo $catid;?>&name=<?php echo $catname;?>"><img src="<?php echo 'images/uploaded/gal/'.$ffs->img;?>" alt="image<?php echo $cnt;?>"/></a></div>
						<?php
							}
						}
						?>
					</div>
					<nav>
						<span class="bb-current"></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</nav>
			</li>
			  <?php
			  }
			  ?>
			</ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
	</div>
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
<!--script for image galery start-->
<script src="js/jquerypp.custom.js"></script>
<script src="js/jquery.bookblock.js"></script>
<script type="text/javascript">
var Page = (function()
{
	var $grid = $('#bb-custom-grid');
	return {
		init: function()
		{
			$grid.find('div.bb-bookblock').each(function(i)
			{
				var $bookBlock = $(this),
					$nav = $bookBlock.next().children('span'),
					bb = $bookBlock.bookblock(
					{
						speed: 600,
						shadows: false
					});
				// add navigation events
				$nav.each(function(i)
				{
					$(this).on('click touchstart', function(event)
					{
						var $dot = $(this);
						$nav.removeClass('bb-current');
						$dot.addClass('bb-current');
						$bookBlock.bookblock('jump', i + 1);
						return false;
					});
				});
				// add swipe events
				$bookBlock.children().on(
				{
					'swipeleft': function(event)
					{
						$bookBlock.bookblock('next');
						return false;
					},
					'swiperight': function(event)
					{
						$bookBlock.bookblock('prev');
						return false;
					}
				});
			});
		}
	};
})();
</script>
<script>
Page.init();
</script>
<!--script for image galery end-->
</body>
</html>
