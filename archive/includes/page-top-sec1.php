<!--Ad image Left side start-->
<!--<div class="adL">
	<div id="banner-fade2">
		<ul class="bjqs">
			<?php $set=mysql_query("select * from `advimg` where `pos`='1' and `status`='0' order by `id` desc");
		if(mysql_num_rows($set)>0){ 
		while($tm=mysql_fetch_object($set)){?>
            <li>
            	<img src="../images/uploaded/adv/<?php echo $tm->img;?>" alt="add" title="" />
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
            	<img src="../images/uploaded/adv/<?php echo $tm->img;?>" alt="add" title="" />
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
				<a class="googleplus" target="_blank" href="<?php echo $ff->value;?>">RSS<i class="fa fa-rss"></i></a>
            </div>
        </div>
		<!--Social Media link end-->
		<!--Date & Weather start-->
    	<div class="span8">
        	<div class="tw-sec">
            	<div class="weather">
                	<!--<div style="margin-top:5px;"><img src="../images/weather.png" /></div>-->
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
        	<a class="getb" href="../fonts/download_fonts.rar">ফন্টের জন্য</a>
        </div>-->
		<!--Date & Weather end-->
		<div class="clear"></div>
    </div>
	<div class="clear"></div>
	<div class="double-split"></div>
    <div class="clear"></div>
	<div class="row">
    	<div class="span3">
    		<a class="logo" href="../index.php"></a>
    	</div>
    	<div class="span6">
        	<a class="logo-name" href="../index.php"></a>
    	</div>
		<!--<div class="span3">
    		<input type="date" name="bday">
			<input type="submit">
    	</div>-->
    	<div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div class="clear"></div>

<div class="nav-sec">
	<div class="row">
    	<div class="span10">
        	<ul class="nav">
            	<li><a class="active" href="index.php?dt=<?php echo $_REQUEST['dt'];?>">প্রছদ</a></li>
            	<li class="dropdown"><a href="politics.php?dt=<?php echo $_REQUEST['dt'];?>">রাজনীতি</a>
                	<ul class="drop-nav">
                    	<li><a href="politics_state.php?dt=<?php echo $_REQUEST['dt'];?>">রাজ্য</a></li>
            			<li><a href="politics_country.php?dt=<?php echo $_REQUEST['dt'];?>">দেশ</a></li>
            			<li><a href="politics_international.php?dt=<?php echo $_REQUEST['dt'];?>">আন্তরজাতিক</a></li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="offbit.php?dt=<?php echo $_REQUEST['dt'];?>">আফবিট</a>
                	<ul class="drop-nav">
                    	<li class="flyout"><a href="my_world.php?dt=<?php echo $_REQUEST['dt'];?>">আমার দুনিয়া</a>
                        	<ul class="flyout-nav">
                                <li><a href="my_world_state.php?dt=<?php echo $_REQUEST['dt'];?>">রাজ্য</a></li>
                                <li><a href="my_world_country.php?dt=<?php echo $_REQUEST['dt'];?>">দেশ</a></li>
                                <li><a href="my_world_international.php?dt=<?php echo $_REQUEST['dt'];?>">আন্তরজাতিক</a></li>
                            </ul>
                        </li>
            			<li><a href="features.php?dt=<?php echo $_REQUEST['dt'];?>">ফিচার</a></li>
            			<li><a href="education.php?dt=<?php echo $_REQUEST['dt'];?>">শিক্ষ‌া</a></li>
            			<li><a href="health.php?dt=<?php echo $_REQUEST['dt'];?>">স্বাস্থ্য</a></li>
            			<li class="flyout"><a href="travel_and_traditions.php?dt=<?php echo $_REQUEST['dt'];?>">ভ্রমণ ও ঐতিহ্য</a>
                        	<ul class="flyout-nav">
                                <li><a href="stroller.php?dt=<?php echo $_REQUEST['dt'];?>">ভবঘুরে</a></li>
                                <li><a href="traditional.php?dt=<?php echo $_REQUEST['dt'];?>">ট্র্যাডিশন</a></li>
                            </ul>
                        </li>
            			<li class="flyout"><a href="industrial_employment.php?dt=<?php echo $_REQUEST['dt'];?>">কৃষি-শিল্প-স্বনিযুক্তি</a>
                        	<ul class="flyout-nav">
                                <li><a href="fields.php?dt=<?php echo $_REQUEST['dt'];?>">খেতখামার</a></li>
                                <li><a href="industry_world.php?dt=<?php echo $_REQUEST['dt'];?>">শিল্পের দুনিয়া</a></li>
                                <li><a href="sarojgari.php?dt=<?php echo $_REQUEST['dt'];?>">স্বরোজগারী</a></li>
                            </ul>
                        </li>
            			<li class="flyout"><a href="science_and_environment.php?dt=<?php echo $_REQUEST['dt'];?>">বিজ্ঞান ও পরিবেশ</a>
                        	<ul class="flyout-nav">
                                <li><a href="knowledge_science.php?dt=<?php echo $_REQUEST['dt'];?>">জ্ঞান-বিজ্ঞান</a></li>
                                <li><a href="green_earth.php?dt=<?php echo $_REQUEST['dt'];?>">সবুজ পৃথিবী</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="sports.php?dt=<?php echo $_REQUEST['dt'];?>">খেলা</a>
                	<ul class="drop-nav">
                    	<li><a href="more_sports.php?dt=<?php echo $_REQUEST['dt'];?>">আরও খেলা</a></li>
            			<li><a href="tennis.php?dt=<?php echo $_REQUEST['dt'];?>">টেনিস</a></li>
            			<li><a href="football.php?dt=<?php echo $_REQUEST['dt'];?>">ফুটবল</a></li>
            			<li><a href="badminton.php?dt=<?php echo $_REQUEST['dt'];?>">ব্যাডমিনটান</a></li>
            			<li><a href="cricket.php?dt=<?php echo $_REQUEST['dt'];?>">ক্রিকেট</a></li>
            			<li><a href="kolkata_maidan.php?dt=<?php echo $_REQUEST['dt'];?>">কলকাতা ময়দান</a></li>
                    </ul>
                </li>
            	<li class="dropdown"><a href="entertainment.php?dt=<?php echo $_REQUEST['dt'];?>">বিনোদন</a>
                	<ul class="drop-nav">
                    	<li><a href="box_office.php?dt=<?php echo $_REQUEST['dt'];?>">বক্স অফিস</a></li>
            			<li><a href="dramabaji.php?dt=<?php echo $_REQUEST['dt'];?>">ড্রামাবাজি</a></li>
            			<li><a href="surdariya.php?dt=<?php echo $_REQUEST['dt'];?>">সুরদরিয়া</a></li>
            			<li><a href="gray_album.php?dt=<?php echo $_REQUEST['dt'];?>">ধূসর অ্যালবাম ও কবিতা</a></li>
            			<li><a href="literature_time.php?dt=<?php echo $_REQUEST['dt'];?>">সাহিত্য সময়</a></li>
            			<!--<li><a href="poem.php?dt=<?php echo $_REQUEST['dt'];?>">কবিতা</a></li>-->
                    </ul>
                </li>
            	<li><a href="bangladesh.php?dt=<?php echo $_REQUEST['dt'];?>">বাংলাদেশ</a></li>
            	<li><a href="photo_gallery.php?dt=<?php echo $_REQUEST['dt'];?>">ফটো গ্যালারি</a></li>
            	<li><a href="blog.php?dt=<?php echo $_REQUEST['dt'];?>">ব্লগ</a></li>
            	<li><a href="advertising.php?dt=<?php echo $_REQUEST['dt'];?>">বিজ্ঞাপন</a></li>
            	<li><a href="contact.php?dt=<?php echo $_REQUEST['dt'];?>">যোগাযোগ</a></li>
            </ul>
        </div>
    	<div class="span2">
        	<a class="getb" target="_blank" href="#">সংরক্ষণ</a>
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