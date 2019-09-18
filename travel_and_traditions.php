<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<?php #require_once('includes/page-top-sec2.php');?>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
	<!--main content start-->
	<div class="span8">
		<div class="insidecont">
			<h1>ভ্রমণ ও ঐতিহ্য</h1>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL bluebg">ভবঘুরে</div>
				<div class="panelR"> <a href="stroller.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='24' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo 'images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php }
				?> 
			</ul>
			<div class="clear"></div>
			<div class="heading-panel">
				<div class="panelL bluebg">ট্র্যাডিশন</div>
				<div class="panelR"> <a href="traditional.php">আরও খবর দেখুন</a> </div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				$sql=mysql_query("select * from `post` where `status`='0' and `cat`='25' order by `id` desc limit 2");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb">
						<?php if(!empty($ff->image)){?>
						<img src="<?php echo 'images/uploaded/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> 
						<?php } else{?>
						<img src="images/no_img.png" alt="<?php echo $ff->title;?>" />
						<?php } ?>
					</div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="post_details-page.php?id=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found in this section";?></div>
				<?php } 
				?> 
			</ul>
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
</body>
</html><?php 


require_once('includes/header.php');?>

<body>

<?php require_once('includes/page-top-sec1.php');?>


<div class="row">
	<?php require_once('includes/page-top-sec2.php');?>
    <div class="clear"></div>

    

    <div class="span8">

    	<div class="insidecont">

        	<h1>রাজনীতি (রাজ্য)</h1>

            <div class="clear"></div>

            

            <ul class="sectionBlist2">

            	<li>

               		<div class="thumb"><img src="images/slider/slide01.jpg" /></div>

                    <div class="cont">

                    	<h3>জানুয়ারি মাস থেকে কল ড্রপের মাশুল সংশ্লিষ্ট পরিষেবা প্রদানকারীই মেটাবে</h3>

                    	<p>ভারতের টেলিযোগাযোগ কর্তৃপক্ষ ট্রাই-এর চেয়ারম্যান শ্রী আর এস শর্মা জানিয়েছেন, আগামী মাস থেকেই কল ড্রপের মাশুল পরিষেবা প্রদানকারী সংস্থাগুলিকেই মেটাতে হবে। তাঁর যুক্তি, গ্রাহকদের গুণগত মানের পরিষেবা দিতে না পারলে তার খেসারত দিতেই হবে। মোবাইল টাওয়ার থেকে নির্গত রেডিও ওয়েভের ক্ষতিকর প্রভাবের বিষয়টিকে তিনি সম্পূর্ণ ভিত্তিহীন বলে উড়িয়ে দেন।</p>

                        <a href="politics_state_details-page.html">বিস্তারিত পড়ুন</a>

                   	</div>

                    <div class="clear"></div>

                </li>

            	<li>

               		<div class="thumb"><img src="images/slider/slide01.jpg" /></div>

                    <div class="cont">

                    	<h3>জানুয়ারি মাস থেকে কল ড্রপের মাশুল সংশ্লিষ্ট পরিষেবা প্রদানকারীই মেটাবে</h3>

                    	<p>ভারতের টেলিযোগাযোগ কর্তৃপক্ষ ট্রাই-এর চেয়ারম্যান শ্রী আর এস শর্মা জানিয়েছেন, আগামী মাস থেকেই কল ড্রপের মাশুল পরিষেবা প্রদানকারী সংস্থাগুলিকেই মেটাতে হবে। তাঁর যুক্তি, গ্রাহকদের গুণগত মানের পরিষেবা দিতে না পারলে তার খেসারত দিতেই হবে। মোবাইল টাওয়ার থেকে নির্গত রেডিও ওয়েভের ক্ষতিকর প্রভাবের বিষয়টিকে তিনি সম্পূর্ণ ভিত্তিহীন বলে উড়িয়ে দেন।</p>

                        <a href="politics_state_details-page.html">বিস্তারিত পড়ুন</a>

                   	</div>

                    <div class="clear"></div>

                </li>

            	<li>

               		<div class="thumb"><img src="images/slider/slide01.jpg" /></div>

                    <div class="cont">

                    	<h3>জানুয়ারি মাস থেকে কল ড্রপের মাশুল সংশ্লিষ্ট পরিষেবা প্রদানকারীই মেটাবে</h3>

                    	<p>ভারতের টেলিযোগাযোগ কর্তৃপক্ষ ট্রাই-এর চেয়ারম্যান শ্রী আর এস শর্মা জানিয়েছেন, আগামী মাস থেকেই কল ড্রপের মাশুল পরিষেবা প্রদানকারী সংস্থাগুলিকেই মেটাতে হবে। তাঁর যুক্তি, গ্রাহকদের গুণগত মানের পরিষেবা দিতে না পারলে তার খেসারত দিতেই হবে। মোবাইল টাওয়ার থেকে নির্গত রেডিও ওয়েভের ক্ষতিকর প্রভাবের বিষয়টিকে তিনি সম্পূর্ণ ভিত্তিহীন বলে উড়িয়ে দেন।</p>

                        <a href="politics_state_details-page.html">বিস্তারিত পড়ুন</a>

                   	</div>

                    <div class="clear"></div>

                </li>

            	<li>

               		<div class="thumb"><img src="images/slider/slide01.jpg" /></div>

                    <div class="cont">

                    	<h3>জানুয়ারি মাস থেকে কল ড্রপের মাশুল সংশ্লিষ্ট পরিষেবা প্রদানকারীই মেটাবে</h3>

                    	<p>ভারতের টেলিযোগাযোগ কর্তৃপক্ষ ট্রাই-এর চেয়ারম্যান শ্রী আর এস শর্মা জানিয়েছেন, আগামী মাস থেকেই কল ড্রপের মাশুল পরিষেবা প্রদানকারী সংস্থাগুলিকেই মেটাতে হবে। তাঁর যুক্তি, গ্রাহকদের গুণগত মানের পরিষেবা দিতে না পারলে তার খেসারত দিতেই হবে। মোবাইল টাওয়ার থেকে নির্গত রেডিও ওয়েভের ক্ষতিকর প্রভাবের বিষয়টিকে তিনি সম্পূর্ণ ভিত্তিহীন বলে উড়িয়ে দেন।</p>

                        <a href="politics_state_details-page.html">বিস্তারিত পড়ুন</a>

                   	</div>

                    <div class="clear"></div>

                </li>

            </ul>

            

        </div>

        <div class="clear"></div>

    </div>

	<div class="span4">
    	<?php require_once('includes/page-right-sec.php');?>
    </div>
    <div class="clear"></div>


    <div class="span6">
    	<?php require_once('includes/banner-responsive-left.php');?>
    </div>
    <div class="span6">
    	<?php require_once('includes/banner-responsive-right.php');?>
    </div>
    <div class="clear"></div>

</div>

<?php require_once('includes/footer.php');?>

</body>
</html>

