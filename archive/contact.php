<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<div class="span12">
	<!--Prothom khobor start-->
	<div class="breaking-news">
		<div class="breaking-title">
			<i class="fa fa-bullhorn"></i>
			<span class="blink">প্রথম খবর</span>
			<div class="corner"></div>
		</div>
		<div class="breaking-block">
			<div class="ticker">
				<!--<strong style="float:left">News:</strong>-->
				<ul>
				   <?php $sql=mysql_query("select * from `scrooltext` where `status`='0' and `cat`='general' and date<='".$_REQUEST['dt']."' order by `id` limit 5");
					while($ff=mysql_fetch_object($sql)){
					?>
					<li><?php echo $ff->text;?></li>
					<?php }?>
				</ul>
			</div>
			<script>$('.ticker').ticker();</script>
			<div class="clear"></div>
		</div>
		<div class="breaking-controls">
			<div class="corner"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!--Prothom khobor end-->
	<!--Ticker Text start-->
    <div class="ticker-news">
        <div class="news_feed">
            <ul id="ticker01">
                <?php $sql=mysql_query("select * from `tickertext` where `status`='0' and `cat`='general' and date<='".$_REQUEST['dt']."' order by `id` limit 5");
				while($ff=mysql_fetch_object($sql)){
				?>
				<li><?php echo $ff->text;?></li>
				<?php }?>
            </ul>
        </div>
        <div class="clear"></div>
        <script src="js/index.js"></script>
    </div>
	<!--Ticker Text end-->
    <div class="clear"></div>
	</div>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
    <!--main content start-->
	<div class="span8">
	<div class="insidecont">
		<h1>যোগাযোগ করুন</h1>
		<div class="clear"></div>
		<div class="contact-us">
			<div class="contact-form">
				<form action="mailer.php" method="post">
					<input type="text" name="nm" placeholder="Name" required />
					<input type="email" name="em" placeholder="Email" required />
					<input type="text" name="phn" placeholder="Phone" />
					<input type="text" name="sub" placeholder="Subject" />
					<textarea name="msg" placeholder="Message" required></textarea> 
					<button class="btn" type="submit" name="submit"><i class="fa fa-envelope-o"></i>Send Message</button>
					<!--<a class="btn" href="#"><i class="fa fa-envelope-o"></i>Send Message</a>-->
					<div class="clear"></div>
				</form>
			</div>
			<div class="clear"></div>
			<ul class="address-details">
				<li> <i class="fa fa-map-marker"></i>
				<?php 
				$se=mysql_query('select * from `option` where `name`="address"');
				$ff=mysql_fetch_object($se);
				?>
					<p><?php echo $ff->value;?></p>
				</li>
				<li> <i class="fa fa-phone"></i>
				<?php 
				$se=mysql_query('select * from `option` where `name`="phone"');
				$ff=mysql_fetch_object($se);
				?>
					<p> <span><strong>Phone:</strong> <?php echo $ff->value;?></span> </p>
				</li>
				<li> <i class="fa fa-envelope-o"></i>
				<?php 
				$se=mysql_query('select * from `option` where `name`="email"');
				$ff=mysql_fetch_object($se);
				?>
					<p> <span><span><strong>Email:</strong> <?php echo $ff->value;?></span></span>
					</p>
				</li>
				<li> <i class="fa fa-globe"></i>
					<p> <span><span><strong>Website:</strong> www.bengalupdate.com/</span></span>
					</p>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
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

