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
                <?php $sql=mysql_query("select * from `tickertext` where `status`='0' and `cat`='general' and date<='".$_REQUEST['dt']."' order by `id` limit 5");
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
		<div class="insidecont">
			<div class="heading-panelTwo blueCbg m-bottom">ব্লগ</div>
			<div class="clear"></div>
			<ul class="sectionBlist2">
				<?php
				if(isset($_GET['page'])){
				  $page=$_GET['page'];
				  $pagein=$page-1;
				  $lim=$pagein*10;
				  
				}else{
				  $page=1;
				  $pagein=$page-1;
				  $lim=$pagein*10;
				  
				}
				$sql=mysql_query("select * from `blog` where `status`='0' order by `id` desc limit ".$lim." ,10 ");
				if(mysql_num_rows($sql)>0){
				while($ff=mysql_fetch_object($sql)){
				?>
				<li>
					<div class="thumb"><img src="<?php echo '../images/uploaded/blog/'.$ff->image;?>" alt="<?php echo $ff->title;?>" /> </div>
					<div class="cont">
						<h3><?php echo $ff->title;?></h3>
						<?php echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text), ' ', 1000));?>
						<div class="clear"></div> <a href="blog-details-page.php?id=<?php echo $ff->id;?>&dt=<?php echo $_REQUEST['dt']?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}
				$sql=mysql_query("select * from `blog` where `status`='0'  order by `id` desc ");
				$num=mysql_num_rows($sql);
				$baseurl=$siteurl.'blog.php?id='.(!empty($_GET['id'])).'&dt='.$_REQUEST['dt'];
				$totalpage=ceil($num/10);
			   ?> 
			</ul>
			<div class="clear"></div>
			<!--pagination start-->
			<ul class="pagination">
				<?php if($page==1){?>
				  <li class="disabled"><a href="#">&laquo;</a></li>
				<?php }else{?>
				<li><a href="<?php echo  $baseurl.'&page='.($page-1);?>">&laquo;</a></li>
				  <?php }for($i=1;$i<=$totalpage;$i++){?>
				  <li <?php if($page==$i){?>class="active"<?php }?>><a href="<?php echo  $baseurl.'&page='.$i;?>"><?php echo $i;?> <?php //if($page==$i){?><!--<span class="sr-only">(current)</span>--><?php //}?></a></li>
				  <?php }?>  
				<?php if($page==$totalpage){?>  
				  <li class="disabled"><a href="#">&raquo;</a></li>
				<?php }else{?>  
				  <li><a href="<?php echo  $baseurl.'&page='.($page+1);?>">&raquo;</a></li>

				<?php }?>    
			</ul>
			<!--pagination end-->
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