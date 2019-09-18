<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1dt.php');?>
<!--menu end-->
<div class="row">
	
    <div class="clear"></div>
		<!--Main content start-->
		<div class="span12">
			<div class="election">
				<div class="heading-panel">
				<div class="panelL bluebg">Search Result</div>
				<!--<div class="panelR"> <a href="more_sports.php?dt=<?php echo $_REQUEST['dt'];?>">আরও খবর দেখুন</a> </div>-->
				<div class="clear"></div>
			</div>
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
				$sql=mysql_query("select * from `post` where `status`='0' and `key` like '%".$_REQUEST['srch']."%' order by `id` desc limit  ".$lim." ,10 ");
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
						<?php if (strlen($ff->text)>1000){
							echo substr(strip_tags($ff->text),0,strpos(strip_tags($ff->text),' ',1000));
						}else{
							echo strip_tags($ff->text);
						}?>
						<div class="clear"></div> <a href="post_details-page1.php?id=<?php echo $ff->id;?>">বিস্তারিত পড়ুন</a> </div>
					<div class="clear"></div>
				</li>
				<?php }}else{?>
					<div class="cont" style="text-align:center;"><?php echo "No Post found";?></div>
				<?php
				}
				$sql=mysql_query("select * from `post` where `status`='0' and `key` like '%".$_REQUEST['srch']."%' order by `id` desc ");
				$num=mysql_num_rows($sql);
				$baseurl=$siteurl.'search.php?id='.(!empty($_GET['id']));
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
			<div class="clear"></div>
			</div>
		</div>
		<!--Main content end-->
		<div class="clear"></div>
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