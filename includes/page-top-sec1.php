<!--Ad image Left side start-->
<!--<div class="adL">
	<div id="banner-fade2">
		<ul class="bjqs">
			<?php $set=mysql_query("select * from `advimg` where `pos`='1' and `status`='0' order by `id` desc");
		if(mysql_num_rows($set)>0){ 
		while($tm=mysql_fetch_object($set)){?>
            <li>
            	<img src="images/uploaded/adv/<?php echo $tm->img;?>" alt="add" title="" />
			</li>
			<?php }}?>
			
		</ul>
	</div>
</div>-->
<!--Ad image Left side end-->
<!--Ad image Right side start-->
<!--<div class="adR">
	<div id="banner-fade3">
		<ul class="bjqs">
			<?php $set=mysql_query("select * from `advimg` where `pos`='1' and `status`='0' order by `id` asc");
		if(mysql_num_rows($set)>0){ 
		while($tm=mysql_fetch_object($set)){?>
            <li>
            	<img src="images/uploaded/adv/<?php echo $tm->img;?>" alt="add" title="" />
			</li>
		<?php }}?>	
			
		</ul>
	</div>
</div>-->
<!--Ad image Right side end-->
<div class="header">
	<div class="row">
    	<!--Social Media link start-->
		<div class="span4">
        	<div class="social-top">
				<?php 
				$se=mysql_query('select * from `option` where `name`="facebook"');
				$ff=mysql_fetch_object($se);
				?>
            	<a class="facebook" target="_blank" href="<?php echo $ff->value;?>">facebook<i class="fa fa-facebook-f"></i></a>
            	<?php 
				$se=mysql_query('select * from `option` where `name`="twitter"');
				$ff=mysql_fetch_object($se);
				?>
				<a class="twitter" target="_blank" href="<?php echo $ff->value;?>">Twitter<i class="fa fa-twitter"></i></a>
            	<?php 
				$se=mysql_query('select * from `option` where `name`="youtube"');
				$ff=mysql_fetch_object($se);
				?>
				<a class="youtube" target="_blank" href="<?php echo $ff->value;?>">Youtube<i class="fa fa-youtube"></i></a>
				<?php 
				$se=mysql_query('select * from `option` where `name`="rss"');
				$ff=mysql_fetch_object($se);
				?>
				<a class="googleplus" target="_blank" href="<?php echo $ff->value;?>">RSS<i class="fa fa-rss" aria-hidden="true"></i></a>
            </div>
        </div>
		<!--Social Media link end-->
		<!--Date & Weather start-->
    	<div class="span8">
        	<div class="tw-sec">
            	<div class="weather">
                	<!--<div style="margin-top:5px;"><img src="images/weather.png" /></div>-->
					<div style="margin-top:5px;"><div id="weather"></div></div>
                </div>
            	<div class="time">
					<div id="time" style="float:left; margin-top:10px;margin-right:7px;color:#344165;font-size:14px;"></div>
                	<?php date_default_timezone_set("Asia/Calcutta");?>
					<div style="margin-top:10px;color:#344165;float:right;font-size:14px;"><?php echo date(" l, F d, Y ",time());?></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
		<!--<div class="span2">
        	<a class="getb" href="fonts/download_fonts.rar">ফন্টের জন্য</a>
        </div>-->
		<!--Date & Weather end-->
		<div class="clear"></div>
    </div>
	<div class="clear"></div>
	<div class="double-split"></div>
    <div class="clear"></div>
	<div class="row">
    	<div class="span3">
    		<a class="logo" href="index.php"></a>
    	</div>
    	<div class="span9">
        	<a class="logo-name" href="index.php"></a>
    	</div>
    	<div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

<div class="nav-sec">
	<div class="row">
    	<div class="span12 archive-btn">
        	<a class="getba resbtn" target="_blank" href="archive/date.php">সংরক্ষণ</a>
        </div>
		<div class="span10">
        	<ul class="nav">
            	<li><a class="active" href="index.php">প্রছদ</a></li>
            	<li class="dropdown"><a href="politics.php">রাজনীতি</a>
                	<ul class="drop-nav">
                    	<li><a href="politics_state.php">রাজ্য</a></li>
            			<li><a href="politics_country.php">দেশ</a></li>
            			<li><a href="politics_international.php">আন্তরজাতিক</a></li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="offbit.php">আফবিট</a>
                	<ul class="drop-nav">
                    	<li class="flyout"><a href="my_world.php">আমার দুনিয়া</a>
                        	<ul class="flyout-nav">
                                <li><a href="my_world_state.php">রাজ্য</a></li>
                                <li><a href="my_world_country.php">দেশ</a></li>
                                <li><a href="my_world_international.php">আন্তরজাতিক</a></li>
                            </ul>
                        </li>
            			<li><a href="features.php">ফিচার</a></li>
            			<li><a href="education.php">শিক্ষ‌া</a></li>
            			<li><a href="health.php">স্বাস্থ্য</a></li>
            			<li class="flyout"><a href="travel_and_traditions.php">ভ্রমণ ও ঐতিহ্য</a>
                        	<ul class="flyout-nav">
                                <li><a href="stroller.php">ভবঘুরে</a></li>
                                <li><a href="traditional.php">ট্র্যাডিশন</a></li>
                            </ul>
                        </li>
            			<li class="flyout"><a href="industrial_employment.php">কৃষি-শিল্প-স্বনিযুক্তি</a>
                        	<ul class="flyout-nav">
                                <li><a href="fields.php">খেতখামার</a></li>
                                <li><a href="industry_world.php">শিল্পের দুনিয়া</a></li>
                                <li><a href="sarojgari.php">স্বরোজগারী</a></li>
                            </ul>
                        </li>
            			<li class="flyout"><a href="science_and_environment.php">বিজ্ঞান ও পরিবেশ</a>
                        	<ul class="flyout-nav">
                                <li><a href="knowledge_science.php">জ্ঞান-বিজ্ঞান</a></li>
                                <li><a href="green_earth.php">সবুজ পৃথিবী</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="sports.php">খেলা</a>
                	<ul class="drop-nav">
                    	<li><a href="more_sports.php">আরও খেলা</a></li>
            			<li><a href="tennis.php">টেনিস</a></li>
            			<li><a href="football.php">ফুটবল</a></li>
            			<li><a href="badminton.php">ব্যাডমিনটান</a></li>
            			<li><a href="cricket.php">ক্রিকেট</a></li>
            			<li><a href="kolkata_maidan.php">কলকাতা ময়দান</a></li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="entertainment.php">বিনোদন</a>
                	<ul class="drop-nav">
                    	<li><a href="box_office.php">বক্স অফিস</a></li>
            			<li><a href="dramabaji.php">ড্রামাবাজি</a></li>
            			<li><a href="surdariya.php">সুরদরিয়া</a></li>
            			<li><a href="gray_album.php">ধূসর অ্যালবাম ও কবিতা</a></li>
            			<li><a href="literature_time.php">সাহিত্য সময়</a></li>
            			<!--<li><a href="poem.php">কবিতা</a></li>-->
                    </ul>
                </li>
            	<li><a href="bangladesh.php">বাংলাদেশ</a></li>
            	<li><a href="photo_gallery.php">ফটো গ্যালারি</a></li>
            	<li><a href="blog.php">ব্লগ</a></li>
            	<li><a href="advertising.php">বিজ্ঞাপন</a></li>
            	<li><a href="contact.php">যোগাযোগ</a></li>
            </ul>
        </div>
    	<div class="span2">
        	<a class="getba resbtnn" target="_blank" href="archive/date.php">সংরক্ষণ</a>
        </div>
		
		<div class="clear"></div>
    </div>
</div>
<div class="clear"></div>
<script>
setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
	
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours; 
	currentHours = ( currentHours < 10 ? "0" : "" ) + currentHours;
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
	document.getElementById("time").innerHTML= currentTimeString;
	},1000);
</script>