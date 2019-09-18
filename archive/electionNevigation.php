<!--header section start-->
<?php 
ob_start();
require_once('includes/header.php');
?>
<!--header section end-->
<body>
<!--menu start-->
<?php require_once('includes/page-top-sec1.php');?>
<!--menu end-->
	<!--main content start-->
	<div class="row">
    	<div class="span12">
        	<ul class="list">
            	<li><a href="loksabha_search.php">লোকসভা নির্বাচনের ফলাফল</a></li>
                <li><a href="by_loksabha_search.php">লোকসভা উপ-নির্বাচনের ফলাফল</a></li>
                <li><a href="bidhansabha_search.php">বিধানসভা নির্বাচনের ফলাফল </a></li>
                <li><a href="by_bidhansabha_search.php">বিধানসভা উপ-নির্বাচনের ফলাফল</a></li>
                <li><a href="municipality_search.php">পৌরসভা নির্বাচনের ফলাফল </a></li>
				<li><a href="panchayat_search.php">পঞ্চায়েত নির্বাচনের ফলাফল </a></li>
            </ul>
    	</div>
	</div>
	<!--main content end-->
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

