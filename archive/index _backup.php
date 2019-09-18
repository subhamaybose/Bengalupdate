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
				   <?php $sql=mysql_query("select * from `scrooltext` where `status`='0' and `cat`='general'");
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
                <?php $sql=mysql_query("select * from `tickertext` where `status`='0' and `cat`='general'");
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
	<!--index page slider start-->
	<div class="span9">
		<div class="banner">
			<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
				<?php $sql=mysql_query("select * from `banner` where `status`='0' and `cat`='general' order by `id` desc limit 6 ");
				$i=0;
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				$i++;
				?>
				<div data-thumb="<?php echo '../images/uploaded/banner/'.$ff->image;?>" data-src="<?php echo '../images/uploaded/banner/'.$ff->image;?>">
					<div class="camera_caption top">
						<h1><?php echo $ff->caption;?><?php echo $ff->title;?></h1> 
					</div>
				</div>
				<?php }}else{?>
					<div data-thumb="../images/no_img.png" data-src="../images/no_img.png">
					<div class="camera_caption top">
						<h1>No post available in this section</h1> 
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
	<!--index page slider end-->
	<!--index page slider right panel start-->
    <div class="span3">
		<a target="_blank" href="http://bengalupdatenews.com/" class="banrightB">
			<div class="thumb"><img src="../images/logo_jpg.jpg" /></div>
			<div class="clear"></div>
			<h3>রাজ্য রাজনীতি বেঙ্গল আপডেট ইংরেজি সংস্করন</h3> <span>www.bengalupdatenews.com</span> 
		</a>
		<div class="clear"></div> 
		<a target="_blank" href="admin/epaper/epaper.pdf" class="e-button"><i class="fa fa-newspaper-o"></i>ই-পেপার</a> </div>
	<!--index page slider right panel end-->
	<div class="clear"></div>
	<!--main content start-->
	<div class="span8">
		<div class="conteiner">
			<!--lead news start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>Lead News</div>
				<div class="panelR"> <a href="lead_news.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="list-page-dtls">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `lead`='1' and `pagecat`='general' order by `id` desc limit 1");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
			<div class="clear"></div>
			<!--lead news end-->
			<!--index page Diner sera start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>দিনের সেরা</div>
				<div class="panelR"> <a href="diner_sera.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="list-page-dtls">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `dinersera`='1' and `pagecat`='general' order by `id` desc limit 1");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
			<div class="clear"></div>
			<!--index page Diner sera end-->
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL redbg"><span class="icon"><img src="../images/rjniti.png" /></span>রাজনীতি</div>
				<div class="panelR"> <a href="politics.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<!--<div class="sectionB">
				<h2>চেন্নাইয়ের বন্যায় সমস্তরকম সহায়তা করার জন্য মন্ত্রক ও সরকার নিয়ন্ত্রিত সংস্থা..</h2>
				<div class="thumb"><img src="../images/slider/slide01.jpg" />
				</div>
				<div class="cont">
					<p>ভারতের টেলিযোগাযোগ কর্তৃপক্ষ ট্রাই-এর চেয়ারম্যান শ্রী আর এস শর্মা জানিয়েছেন, আগামী মাস থেকেই কল ড্রপের মাশুল পরিষেবা প্রদানকারী সংস্থাগুলিকেই মেটাতে হবে। তাঁর যুক্তি, গ্রাহকদের গুণগত মানের পরিষেবা দিতে না পারলে তার খেসারত দিতেই হবে। মোবাইল টাওয়ার থেকে নির্গত রেডিও ওয়েভের ক্ষতিকর প্রভাবের বিষয়টিকে তিনি সম্পূর্ণ ভিত্তিহীন বলে উড়িয়ে দেন।</p> <a href="politics_state_details-page.html">বিস্তারিত পড়ুন</a> </div>
				<div class="clear"></div>
			</div>-->
			<div class="sectionD">
				<ul class="sectionDlist">
				<?php 
				$sql=mysql_query("select * from `post` where `status`='0' and (`cat`='30' or `cat`='31' or `cat`='32') order by `id` desc limit 2");
				while($ff=mysql_fetch_object($sql)){
				?>
					<li>
						<div class="thumb"><img src="../images/uploaded/<?php echo $ff->image;?>" />
						</div>
						<div class="clear"></div>
						<p><?php echo $ff->title.'  '.$ff->smalltext;?></p> <a href="post_details-page.php?id=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> 
					</li>
				<?php }?>
				</ul>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL greenbg"><span class="icon"><img src="../images/video.png" /></span>ভিডিও শেকসান</div>
				<div class="panelR"> <a href="video.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<!--index page video section start-->
			<div class="section">
				<div id="main-slider" class="liquid-slider">
					<div>
						<h2 class="title">খবর</h2>
						<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='general' order by `id` desc limit 0,1");
						$ff=mysql_fetch_object($sql);
						?>
						<iframe width="590" height="180" src="http://www.youtube.com/embed/<?php echo $ff->text;?>?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						<!--<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3> -->
					</div>
					<div>
						<h2 class="title">রাজনীতি</h2>
						<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='rajnity' order by `id` desc limit 0,1");
						$ff=mysql_fetch_object($sql);
						?>
						<iframe width="590" height="180" src="http://www.youtube.com/embed/<?php echo $ff->text;?>?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						<!--<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3>-->
					</div>
					<div>
						<h2 class="title">খেলা</h2>
						<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='sports' order by `id` desc limit 0,1");
						$ff=mysql_fetch_object($sql);
						?>
						<iframe width="590" height="180" src="http://www.youtube.com/embed/<?php echo $ff->text;?>?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						<!--<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3> -->
					</div>
					<div>
						<h2 class="title">বিনোদন</h2>
						<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='entertainment' order by `id` desc limit 0,1");
						$ff=mysql_fetch_object($sql);
						?>
						<iframe width="590" height="180" src="http://www.youtube.com/embed/<?php echo $ff->text;?>?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						<!--<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3> -->
					</div>
					<div>
						<h2 class="title">অফবিট</h2>
						<?php $sql=mysql_query("select * from `video` where `status`='0' and `cat`='offbeat' order by `id` desc limit 0,1");
						$ff=mysql_fetch_object($sql);
						?>
						<iframe width="590" height="180" src="http://www.youtube.com/embed/<?php echo $ff->text;?>?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
						<!--<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবেকমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3>--> 
					</div>
					<div>
						<h2 class="title">প্রাসঙ্গিক</h2>
						<iframe width="590" height="180" src="https://www.youtube.com/embed/xQKoYndTABw?controls=0" frameborder="0" allowfullscreen></iframe>
						<h3>কমিশন রাজ্যে বিধানসভা নির্বাচনে প্রতিটি বুথে কেন্দ্রীয় বাহিনীর মোতায়েন সুনিশ্চিত করবে</h3> </div>
				</div>
				<script src="js/jquery.liquid-slider.min.js"></script>
				<script src="js/jquery.touchSwipe.min.js"></script>
				<script>
					$('#main-slider').liquidSlider();
				</script>
				<div class="clear"></div>
			</div>
			<!--index page video section end-->
			<div class="clear"></div>
			<!--index page satforon section start-->
			<div class="heading-panel">
				<div class="panelL assbg"> <span class="icon"><img src="../images/satforan.png" /></span>সাতফোড়ন </div>
				<div class="panelR"> <a href="satforon.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="sectionD">
				<ul class="sectionDlist">
				<?php 
				$sql=mysql_query("select * from `post` where `status`='0' and `exclusive`='1' and `pagecat`='general' order by `id` desc limit 2");
				while($ff=mysql_fetch_object($sql)){
				?>
					<li>
						<div class="thumb"><img src="../images/uploaded/<?php echo $ff->image;?>" />
						</div>
						<div class="clear"></div>
						<p><?php echo $ff->title.'  '.$ff->smalltext;?></p> <a href="post_details-page.php?id=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> 
					</li>
				<?php }?>
				</ul>
				<div class="clear"></div>
			</div>
			<!--index page satforon section end-->
			<div class="clear"></div>
			<!--Ei muhurte start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>এই মুহূর্তে</div>
				<div class="panelR"> <a href="ei_muhurte.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="list-page-dtls">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `topnews`='1' and `pagecat`='general' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php 
						#need to fit every where# 
						if (strlen($ff->text)>1000){
							echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));
						}else{
							echo strip_tags($ff->text);
						}
						?>
						<?php ?>
						 <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
			<div class="clear"></div>
			<!--Ei muhurte end-->
			<div class="heading-panel blueBbg">
				<div class="panelL blueDbg"> <span class="icon"><img src="../images/satforan.png" /></span>Follow Us </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="section">
				<div class="pluginF">
					<div class="fb-page" data-href="https://www.facebook.com/mainak.banerjee.587/" data-width="285" data-hide-cover="false" data-show-facepile="true">
						<div class="fb-xfbml-parse-ignore">
							<blockquote cite="https://www.facebook.com/mainak.banerjee.587/"> <a href="https://www.facebook.com/mainak.banerjee.587/">Bengal Update</a> </blockquote>
						</div>
					</div>
					<div id="fb-root"></div>
					<script>
						(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s);
							js.id = id;
							js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));
					</script>
				</div>
				<div class="pluginT"> <a class="twitter-timeline" href="https://twitter.com/BengalUpdate" data-widget-id="687929490597634048">Tweets by @BengalUpdate</a>
					<script>
						! function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0],
								p = /^http:/.test(d.location) ? 'http' : 'https';
							if (!d.getElementById(id)) {
								js = d.createElement(s);
								js.id = id;
								js.src = p + "://platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js, fjs);
							}
						}(document, "script", "twitter-wjs");
					</script>
				</div>
				<div class="clear"></div>
			</div>
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

