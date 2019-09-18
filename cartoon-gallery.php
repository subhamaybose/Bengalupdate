<!--header section start-->
<?php require_once('includes/header.php');?>
<!--header section end-->
<script>
$(document).ready(function() {
		
		$(".fancybox").fancybox({
			helpers: {
			title : {
			type : 'outside'
			},
			overlay : {
			speedOut : 0
			}
			}
		});

});
</script>
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
<div class="row">
	<!--breaking & scrollable news start-->
	<?php require_once('includes/page-top-sec2.php');?>
	<!--breaking & scrollable news end-->
    <div class="clear"></div>
    <!--main content start-->
	<div class="span8">
		<div class="insidecont">
			<h1><?php echo $_REQUEST['name'];?></h1>
			<div class="clear"></div>
			<ul class="pgallery">
				<?php
						$sqls=mysql_query("select * from `gallerys` where `status`='0' and `cat`='".$_REQUEST['id']."' order by `id` desc");
						$cnt=0;
						while($ffs=mysql_fetch_object($sqls))
						{
							$cnt++;
							if(!empty($ffs->img)){
				?>
				<!--<li>
                	<a class="fancybox" rel="gallery" href="images/uploaded/gal/<?php echo $ffs->img;?>" title="<?php echo $ffs->cap;?>">
                        <div class="thumb"><img src="images/uploaded/gal/<?php echo $ffs->img;?>" /></div>
                        <div class="cap"><?php echo $ffs->cap;?></div>
                    </a>
                </li>-->
				<li>
					<a class="fancybox" title="<?php echo $ffs->cap;?>" href="images/uploaded/gal/<?php echo $ffs->img;?>" rel="gallery"><img src="images/uploaded/gal/<?php echo $ffs->img;?>" /> </a>
					<div><?php echo $ffs->cap;?></div>
				</li>
				<?php
							}
						}
				?>
				<!--<li>
					<a class="fancybox-effects-a" href="images/gallery/cartoon/img01.jpg"><img src="images/gallery/cartoon/img01.jpg" /> </a>
					<div></div>
				</li>
				<li>
					<a class="fancybox-effects-a" href="images/gallery/cartoon/img02.jpg"><img src="images/gallery/cartoon/img02.jpg" /> </a>
					<div></div>
				</li>
				<li>
					<a class="fancybox-effects-a" href="images/gallery/cartoon/img03.jpg"><img src="images/gallery/cartoon/img03.jpg" /> </a>
					<div></div>
				</li>
				<li>
					<a class="fancybox-effects-a" href="images/gallery/cartoon/img04.jpg"><img src="images/gallery/cartoon/img04.jpg" /> </a>
					<div></div>
				</li>
				<li>
					<a class="fancybox-effects-a" href="images/gallery/cartoon/img05.jpg"><img src="images/gallery/cartoon/img05.jpg" /> </a>
					<div>ফেসবুক পোস্ট থেকে নেওয়া</div>
				</li>-->
			</ul>
			<div class="clear"></div>
			<div class="page-btn">
				<!--<span>Prev</span><span class="act">1</span><a href="#">2</a><a href="#">Next</a>-->
			</div>
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
</html>

<!--======================================OLD CODE-19072016====================================-->        
 <!--       
        
<div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">

<div class="panel panel-default">
  
  <div class="panel-body">
  
 <?php include_once("analyticstracking.php");?>

  <ol class="breadcrumb">
  <li><a href="<?php echo $siteurl;?>">Home</a></li>
  <li class="text-danger">Photogallery</li>   
</ol>
      
    
  <?php $sqlz=mysql_query("select `name`, id as cid from `galcat` where `status`='0' order by `id` desc");
      while($ff=mysql_fetch_object($sqlz)){	  
    ?>  
    <h3><?php echo $ff->name;?></h3>
        <hr/>  
  <div class="row">  
  <?php $sqls=mysql_query("select * from `gallerys` where `status`='0' and `cat`='".$ff->cid."' order by `id` desc");
  $i=0;
      while($ffs=mysql_fetch_object($sqls)){$i++;	  
    ?>
  <div class="col-sm-6 col-md-3">    
    <div class="thumbnail">
      <img src="<?php echo $siteurl.'images/uploaded/gal/'.$ffs->img;?>" alt="...">
      <div class="caption">     
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $ff->cid.'-'.$i;?>">view large</button>
      </div>
     </div>    
    </div>
    
    <div class="modal fade" id="myModal<?php echo $ff->cid.'-'.$i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $ff->cid.'-'.$i;?>"><?php echo $ffs->cap; ?></h4>
      </div>
      <div class="modal-body">
      <img src="<?php echo $siteurl.'images/uploaded/gal/'.$ffs->img;?>" alt="..." class="img-responsive">        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <?php }?> 
</div>
     <?php }?> 
    
  </div>
</div>
</div>  -->      
        
<!--======================================OLD CODE-19072016====================================--> 