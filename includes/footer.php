<div class="footer">
    <div class="row">
        <div class="span3">
        Copyright © 
		<script type="text/javascript">
			document.write(new Date().getFullYear());
		</script> 
		BENGAL UPDATE
        </div>
        <div class="span4">
            <div class="wapp">
			<?php 
				$se=mysql_query('select * from `option` where `name`="phone"');
				$ff=mysql_fetch_object($se);
			?>
                <i class="fa fa-whatsapp"></i><span><?php echo $ff->value;?></span>
            </div>
        </div>
        <div class="span5">
            <div class="f-social">
                <span>Follow us on social media</span>
				<?php 
				$se=mysql_query('select * from `option` where `name`="facebook"');
				$ff=mysql_fetch_object($se);
				?>
                <a target="_blank" href="<?php echo $ff->value;?>"><i class="fa fa-facebook-f"></i></a>
                <?php 
				$se=mysql_query('select * from `option` where `name`="twitter"');
				$ff=mysql_fetch_object($se);
				?>
				<a target="_blank" href="<?php echo $ff->value;?>"><i class="fa fa-twitter"></i></a>
                <?php 
				$se=mysql_query('select * from `option` where `name`="youtube"');
				$ff=mysql_fetch_object($se);
				?>
				<a target="_blank" href="<?php echo $ff->value;?>"><i class="fa fa-youtube"></i></a>
				<?php 
				$se=mysql_query('select * from `option` where `name`="rss"');
				$ff=mysql_fetch_object($se);
				?>
				<a target="_blank" href="<?php echo $ff->value;?>"><i class="fa fa-rss"></i></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });
</script>
