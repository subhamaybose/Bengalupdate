<?php 


require_once('includes/header.php');?>

<body>

<?php require_once('includes/page-top-sec1.php');?>


<div class="row">
	<?php require_once('includes/page-top-sec2.php');?>
    <div class="clear"></div>

    

    <div class="span8">

    	<div class="insidecont">

        	<h1>ফটো গ্যালারি</h1>

            <div class="clear"></div>

            

            <ul class="bb-custom-grid" id="bb-custom-grid">

				<li>

					<h3>কার্টুন- সুরজিৎ মালিক</h3>

					<div class="bb-bookblock">

						<div class="bb-item"><a href="cartoon-gallery.html"><img src="images/gallery/group/img01.jpg" alt="image01"/></a></div>

						<div class="bb-item"><a href="cartoon-gallery.html"><img src="images/gallery/group/img02.jpg" alt="image02"/></a></div>

						<div class="bb-item"><a href="cartoon-gallery.html"><img src="images/gallery/group/img03.jpg" alt="image03"/></a></div>

					</div>

					<nav>

						<span class="bb-current"></span>

						<span></span>

						<span></span>

					</nav>

				</li>

				<li>

					<h3>হোয়াটস অ্যাপ রিপোর্টার-বেঙ্গল আপডেট</h3>

					<div class="bb-bookblock">

						<div class="bb-item"><a href="whatsapp_update_gallery.html"><img src="images/gallery/group/img01.jpg" alt="image01"/></a></div>

						<div class="bb-item"><a href="whatsapp_update_gallery.html"><img src="images/gallery/group/img02.jpg" alt="image02"/></a></div>

						<div class="bb-item"><a href="whatsapp_update_gallery.html"><img src="images/gallery/group/img03.jpg" alt="image03"/></a></div>

					</div>

					<nav>

						<span class="bb-current"></span>

						<span></span>

						<span></span>

					</nav>

				</li>

				<li>

					<h3>ছবিতে খবর</h3>

					<div class="bb-bookblock">

						<div class="bb-item"><a href="news_image_gallery.html"><img src="images/gallery/group/img01.jpg" alt="image01"/></a></div>

						<div class="bb-item"><a href="news_image_gallery.html"><img src="images/gallery/group/img02.jpg" alt="image02"/></a></div>

						<div class="bb-item"><a href="news_image_gallery.html"><img src="images/gallery/group/img03.jpg" alt="image03"/></a></div>

					</div>

					<nav>

						<span class="bb-current"></span>

						<span></span>

						<span></span>

					</nav>

				</li>

			</ul>

            <div class="clear"></div>

        </div>

        <div class="clear"></div>



<!--======================================OLD CODE-29072016======================================-->

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

<!--======================================OLD CODE-29072016======================================-->



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

