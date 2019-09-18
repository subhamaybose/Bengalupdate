<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
?>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Dashboard</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			<ul class="dashboardmenu">
        <?php if($_SESSION['admintype']=='1'){?>
        <li><span class="post"></span><a href="postlist.php">Post Management</a></li>
        <li><span class="post"></span><a href="pagelist.php">Page Management</a></li>
        <li><span class="draw"></span><a href="bannerlist.php">Banner Management</a></li>
        <?php }?>        
        <?php if($_SESSION['admintype']=='1' || $_SESSION['admintype']=='2'){?>
        <li><span class="draw"></span><a href="textscrolllist.php">Scroll Management</a></li>
        <?php }?>        
        <?php if($_SESSION['admintype']=='1'){?>
        <li><span class="draw"></span><a href="tickerlist.php">Ticker Management</a></li>
        <li><span class="advertise"></span><a href="advmng.php">Advertise Management</a></li>
        <li><span class="mouse"></span><a href="sompadokiomng.php">সম্পাদকীয়</a></li>
        <li><span class="post"></span><a href="categorylist.php">Category Management</a></li>
        <li><span class="post"></span><a href="booklist.php">Boiwala Management</a></li>
        <li><span class="post"></span><a href="anganamng.php">Angana Management</a></li>
        <li><span class="post"></span><a href="sloganmanagement.php">Special Slogan</a></li>
        <li><span class="post"></span><a href="teamlist.php">Team Page</a></li>
        <li><span class="post"></span><a href="advertisementpage.php">Addvertise Page</a></li>
        <li><span class="post"></span><a href="bloglist.php">blog Page</a></li>
        <li><span class="post"></span><a href="polllist.php">Poll</a></li>
        <li><span class="post"></span><a href="rajjolist.php">Rajoyo vitik folafol</a></li>
        <li><span class="post"></span><a href="loksovalist.php">Loksova folafol</a></li>
        <li><span class="post"></span><a href="videolist.php">Video managemeant</a></li>
        <li><span class="post"></span><a href="headlinelist.php">Headline managemeant</a></li>
        <li><span class="post"></span><a href="adminlist.php">Admin managemeant</a></li>
        <li><span class="post"></span><a href="picturegalcat.php">Picture gallery Category</a></li>
        <li><span class="post"></span><a href="picturegal.php">Picture gallery Image</a></li>
        <li><span class="post"></span><a href="post_epaper.php">Update E-paper</a></li>
        <?php }?> 
        </ul>
			
			</div>
			<!--  end table-content  -->
	
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->
<?php 
include("includes/footer.php");
?>