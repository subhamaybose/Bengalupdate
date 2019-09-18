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
				   <?php $sql=mysql_query("select * from `scrooltext` where `status`='0' and `cat`='offbeat' and date<='".$_REQUEST['dt']."' limit 5");
					if(mysql_num_rows($sql)>0){
					while($ff=mysql_fetch_object($sql)){
					?>
					<li><?php echo $ff->text;?></li>
					<?php }}else{?>
					<li>No post available in this section</li>	
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
                <?php $sql=mysql_query("select * from `tickertext` where `status`='0' and `cat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` limit 5");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li><?php echo $ff->text;?></li>
				<?php }}else{?>
					<li>No post available in this section</li>	
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
		<!--slider start-->
		<div class="banner2">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap_2">
			<?php $sql=mysql_query("select * from `banner` where `status`='0' and `cat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` limit 6");
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
		<!--slider end-->
		<div class="insidecont">
			<div class="heading-panelTwo blueCbg m-bottom">আফবিট</div>
			<div class="clear"></div>
			<!--lead news start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>Lead News</div>
				<div class="panelR"> <a href="lead_news.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `lead`='1' and `pagecat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` desc limit 1");
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
			<!--Diner sera start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>দিনের সেরা</div>
				<div class="panelR"> <a href="diner_sera.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `dinersera`='1' and `pagecat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` desc limit 1");
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
			<!--Diner sera end-->
			<div class="heading-panel">
				<div class="panelL bluebg">আমার দুনিয়া</div>
				<div class="panelR"> <a href="my_world.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and (`cat`='4' or `cat`='5' or `cat`='6') and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL redbg">ফিচার</div>
				<div class="panelR"> <a href="features.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='38' and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL greenBbg">শিক্ষ‌া</div>
				<div class="panelR"> <a href="education.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='8' and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL bluebg">স্বাস্থ্য</div>
				<div class="panelR"> <a href="health.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='9' and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL redbg">ভ্রমণ ও ঐতিহ্য</div>
				<div class="panelR"> <a href="travel_and_traditions.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and (`cat`='24' or `cat`='25') and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL greenBbg">কৃষি-শিল্প-স্বনিযুক্তি</div>
				<div class="panelR"> <a href="industrial_employment.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and (`cat`='15' or `cat`='16' or `cat`='29') and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<div class="heading-panel">
				<div class="panelL bluebg">বিজ্ঞান ও পরিবেশ</div>
				<div class="panelR"> <a href="science_and_environment.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and (`cat`='22' or `cat`='23') and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<!--khobore jholok section start-->
			<div class="heading-panel">
				<div class="panelL assbg"> <span class="icon"><img src="../images/satforan.png" /></span>খবরের ঝলক </div>
				<div class="panelR"> <a href="khobore_jholok.php?dt=<?php echo $_REQUEST['dt'];?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="">
				<ul class="sectioninlist">
					<?php 
					$sql=mysql_query("select * from `post` where `status`='0' and `exclusive`='1' and `pagecat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
					if(mysql_num_rows($sql)>0){
					while($ff=mysql_fetch_object($sql)){
					?>
					<li>
						<div class="thumb"><?php if(!empty($ff->image)){?>
						<img src="<?php echo '../images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" />
						<?php } else{?>
						<img src="../images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
						</div>
						<div class="clear"></div>
						<p><?php echo $ff->title.' '.$ff->smalltext;?></p> <a href="post_details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> 
					</li>
					<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php }?>
				</ul>
				<div class="clear"></div>
			</div>
			<!--khobore jholok section end-->
			<!--Ei muhurte start-->
			<div class="heading-panel">
				<div class="panelL bluebg"><span class="icon"><img src="../images/diner-sera.png" /></span>এই মুহূর্তে</div>
				<div class="panelR"> <a href="ei_muhurte.php?dt=<?php echo $_REQUEST['dt']?>">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `topnews`='1' and `pagecat`='offbeat' and date<='".$_REQUEST['dt']."' order by `id` desc limit 2");
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
			<!--Ei muhurte end-->
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