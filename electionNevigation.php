<!--header section start-->
<?php 
ob_start();
require_once('includes/header.php');
?>
<!--header section end-->
<body>

<!--menu start-->
<?php require_once('includes/page-top-sec1elec.php');?>
<!--menu end-->
	<!--main content start-->
	<div class="row">
    	<div class="span12">
		<div style="margin-top:15px;">
        <!--Ticker Text start-->
        <div id="loksabha" class="ticker-news">
            <div class="news_feed">
                <ul id="ticker01">
                    <?php $sql=mysql_query("SELECT rajjo.rajjo, loksabha_constituency.constituency,`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`,`vo_dol_5`,`result`,`round`, GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) AS Great, 
CASE GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) 
         WHEN `vo_dol_1` THEN `ca_dol_1`
         WHEN `vo_dol_2` THEN `ca_dol_2`
         WHEN `vo_dol_3` THEN `ca_dol_3`
         WHEN `vo_dol_4` THEN `ca_dol_4`
       END AS col_name
FROM `loksabha_result`  LEFT JOIN rajjo ON loksabha_result.state=rajjo.id LEFT JOIN loksabha_constituency ON loksabha_result.kendro=loksabha_constituency.id ORDER BY `time` DESC;");
                    if(mysql_num_rows($sql)>0){
                    while($ff=mysql_fetch_object($sql)){
                    ?>
                    <li><?php echo "রাজ্য - ".$ff->rajjo." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  এগিয়ে";?></li>
					<li><?php echo "রাজ্য - ".$ff->rajjo." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  ".$ff->result;?></li>
                    <?php }}else{?>
                        <li>No post available in this section</li>	
                    <?php }?>
                </ul>
            </div>
            <div class="clear"></div>
            <script src="js/index.js"></script>
        </div>
        <!--Ticker Text end-->
        
        <!--Ticker Text start-->
        <div id="loksabhaby" class="ticker-news">
            <div class="news_feed">
                <ul id="ticker01">
                    <?php $sql=mysql_query("SELECT rajjo.rajjo, loksabha_constituency.constituency,`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`,`vo_dol_5`,`result`,`round`, GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) AS Great, 
CASE GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) 
         WHEN `vo_dol_1` THEN `ca_dol_1`
         WHEN `vo_dol_2` THEN `ca_dol_2`
         WHEN `vo_dol_3` THEN `ca_dol_3`
         WHEN `vo_dol_4` THEN `ca_dol_4`
       END AS col_name
FROM `by_election_loksabha_result` LEFT JOIN rajjo ON by_election_loksabha_result.state=rajjo.id LEFT JOIN loksabha_constituency ON by_election_loksabha_result.kendro=loksabha_constituency.id ORDER BY `time` DESC;");
                    if(mysql_num_rows($sql)>0){
                    while($ff=mysql_fetch_object($sql)){
                    ?>
                    <li><?php echo "রাজ্য - ".$ff->rajjo." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  এগিয়ে";?></li>
					<li><?php echo "রাজ্য - ".$ff->rajjo." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  ".$ff->result;?></li>
                    <?php }}else{?>
                        <li>No post available in this section</li>	
                    <?php }?>
                </ul>
            </div>
            <div class="clear"></div>
            <script src="js/index.js"></script>
        </div>
        <!--Ticker Text end-->
        
        <!--Ticker Text start-->
        <div id="bidhansabha" class="ticker-news">
            <div class="news_feed">
                <ul id="ticker01">
                    <?php $sql=mysql_query("SELECT rajjo.rajjo,district.district, bidhansabha_constituency.constituency, `vo_dol_1`, `vo_dol_2`, `vo_dol_3`, `vo_dol_4`, `vo_dol_5`,`result`,`round`, GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) AS Great, 
CASE GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) 
         WHEN `vo_dol_1` THEN `ca_dol_1`
         WHEN `vo_dol_2` THEN `ca_dol_2`
         WHEN `vo_dol_3` THEN `ca_dol_3`
         WHEN `vo_dol_4` THEN `ca_dol_4`
       END AS col_name
FROM `bidhansabha_result`  LEFT JOIN rajjo ON bidhansabha_result.state=rajjo.id LEFT JOIN bidhansabha_constituency ON bidhansabha_result.kendro=bidhansabha_constituency.id LEFT JOIN district ON bidhansabha_result.district=district.id ORDER BY `time` DESC;");
                    if(mysql_num_rows($sql)>0){
                    while($ff=mysql_fetch_object($sql)){
                    ?>
                    <li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  এগিয়ে";?></li>
					<li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  ".$ff->result;?></li>
                    <?php }}else{?>
                        <li>No post available in this section</li>	
                    <?php }?>
                </ul>
            </div>
            <div class="clear"></div>
            <script src="js/index.js"></script>
        </div>
        <!--Ticker Text end-->
        
        <!--Ticker Text start-->
        <div id="bidnansabhaby" class="ticker-news">
            <div class="news_feed">
                <ul id="ticker01">
                    <?php $sql=mysql_query("SELECT rajjo.rajjo,district.district, bidhansabha_constituency.constituency, `vo_dol_1`, `vo_dol_2`, `vo_dol_3`, `vo_dol_4`, `vo_dol_5`,`result`,`round`, GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) AS Great, 
CASE GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) 
         WHEN `vo_dol_1` THEN `ca_dol_1`
         WHEN `vo_dol_2` THEN `ca_dol_2`
         WHEN `vo_dol_3` THEN `ca_dol_3`
         WHEN `vo_dol_4` THEN `ca_dol_4`
       END AS col_name
FROM `by_election_bidhansabha_result`  LEFT JOIN rajjo ON by_election_bidhansabha_result.state=rajjo.id LEFT JOIN bidhansabha_constituency ON by_election_bidhansabha_result.kendro=bidhansabha_constituency.id LEFT JOIN district ON by_election_bidhansabha_result.district=district.id ORDER BY `time` DESC;");
                    if(mysql_num_rows($sql)>0){
                    while($ff=mysql_fetch_object($sql)){
                    ?>
                    <li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  এগিয়ে";?></li>
					<li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." কেন্দ্র- ".$ff->constituency." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  ".$ff->result;?></li>
                    <?php }}else{?>
                        <li>No post available in this section</li>	
                    <?php }?>
                </ul>
            </div>
            <div class="clear"></div>
            <script src="js/index.js"></script>
        </div>
        <!--Ticker Text end-->
        
        <!--Ticker Text start-->
        <div id="municipal" class="ticker-news">
            <div class="news_feed">
                <ul id="ticker01">
                    <?php $sql=mysql_query("SELECT rajjo.rajjo,district.district, municipality.municipality, `vo_dol_1`, `vo_dol_2`, `vo_dol_3`, `vo_dol_4`, `vo_dol_5`,`result`,`round`,`ward`, GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) AS Great, 
CASE GREATEST(`vo_dol_1`,`vo_dol_2`,`vo_dol_3`,`vo_dol_4`) 
         WHEN `vo_dol_1` THEN `ca_dol_1`
         WHEN `vo_dol_2` THEN `ca_dol_2`
         WHEN `vo_dol_3` THEN `ca_dol_3`
         WHEN `vo_dol_4` THEN `ca_dol_4`
       END AS col_name
FROM `municipality_result` LEFT JOIN rajjo ON municipality_result.state=rajjo.id LEFT JOIN municipality ON municipality_result.kendro=municipality.id LEFT JOIN district ON municipality_result.district=district.id ORDER BY `time` DESC;");
                    if(mysql_num_rows($sql)>0){
                    while($ff=mysql_fetch_object($sql)){
                    ?>
                    <li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." পৌরসভা- ".$ff->municipality." ওয়ার্ড নম্বর - ".$ff->ward." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  এগিয়ে";?></li>
					<li><?php echo "রাজ্য - ".$ff->rajjo." জেলা- ".$ff->district." পৌরসভা- ".$ff->municipality." ওয়ার্ড নম্বর - ".$ff->ward." : ".$ff->col_name." ".$ff->round." রাউন্ড এর শেষে ".$ff->Great." ভোটে  ".$ff->result;?></li>
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
        <div>
        
    
    </div>
    <div class="clear"></div>
</div>
        	<ul class="list">
            	<li id="l"><a href="loksabha_search.php">লোকসভা নির্বাচনের ফলাফল</a></li>
                <li id="lb"><a href="by_loksabha_search.php">লোকসভা উপ-নির্বাচনের ফলাফল</a></li>
                <li id="b"><a href="bidhansabha_search.php">বিধানসভা নির্বাচনের ফলাফল </a></li>
                <li id="bb"><a href="by_bidhansabha_search.php">বিধানসভা উপ-নির্বাচনের ফলাফল</a></li>
                <li id="m"><a href="municipality_search.php">পৌরসভা নির্বাচনের ফলাফল </a></li>
				<li id="p"><a href="panchayat_search.php">পঞ্চায়েত নির্বাচনের ফলাফল </a></li>
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
<!--script to hide election scroll start-->
<script>
	$(document).ready(function(){
		<?php
		$sqll= mysql_query("select * from `scroll_window` where `id`='1' ");
		if(mysql_num_rows($sqll)>0){
		$sqllf=mysql_fetch_object($sqll);
		?>
		if(<?php if($sqllf->window =="l"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "";
			document.getElementById("loksabhaby").style.display = "none";
			document.getElementById("bidhansabha").style.display = "none";
			document.getElementById("bidnansabhaby").style.display = "none";
			document.getElementById("municipal").style.display = "none";
			document.getElementById("l").style.display = "";
			document.getElementById("lb").style.display = "none";
			document.getElementById("b").style.display = "none";
			document.getElementById("bb").style.display = "none";
			document.getElementById("m").style.display = "none";
			document.getElementById("p").style.display = "none";
		}else if(<?php if($sqllf->window =="lb"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "none";
			document.getElementById("loksabhaby").style.display = "";
			document.getElementById("bidhansabha").style.display = "none";
			document.getElementById("bidnansabhaby").style.display = "none";
			document.getElementById("municipal").style.display = "none";
			document.getElementById("l").style.display = "none";
			document.getElementById("lb").style.display = "";
			document.getElementById("b").style.display = "none";
			document.getElementById("bb").style.display = "none";
			document.getElementById("m").style.display = "none";
			document.getElementById("p").style.display = "none";
		}else if(<?php if($sqllf->window =="b"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "none";
			document.getElementById("loksabhaby").style.display = "none";
			document.getElementById("bidhansabha").style.display = "";
			document.getElementById("bidnansabhaby").style.display = "none";
			document.getElementById("municipal").style.display = "none";
			document.getElementById("l").style.display = "none";
			document.getElementById("lb").style.display = "none";
			document.getElementById("b").style.display = "";
			document.getElementById("bb").style.display = "none";
			document.getElementById("m").style.display = "none";
			document.getElementById("p").style.display = "none";
		}else if(<?php if($sqllf->window =="bb"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "none";
			document.getElementById("loksabhaby").style.display = "none";
			document.getElementById("bidhansabha").style.display = "none";
			document.getElementById("bidnansabhaby").style.display = "";
			document.getElementById("municipal").style.display = "none";
			document.getElementById("l").style.display = "none";
			document.getElementById("lb").style.display = "none";
			document.getElementById("b").style.display = "none";
			document.getElementById("bb").style.display = "";
			document.getElementById("m").style.display = "none";
			document.getElementById("p").style.display = "none";
		}else if(<?php if($sqllf->window =="m"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "none";
			document.getElementById("loksabhaby").style.display = "none";
			document.getElementById("bidhansabha").style.display = "none";
			document.getElementById("bidnansabhaby").style.display = "none";
			document.getElementById("municipal").style.display = "";
			document.getElementById("l").style.display = "none";
			document.getElementById("lb").style.display = "none";
			document.getElementById("b").style.display = "none";
			document.getElementById("bb").style.display = "none";
			document.getElementById("m").style.display = "";
			document.getElementById("p").style.display = "none";
		}else if(<?php if($sqllf->window =="p"){echo "1";}else{echo "0";}?>){
			document.getElementById("loksabha").style.display = "none";
			document.getElementById("loksabhaby").style.display = "none";
			document.getElementById("bidhansabha").style.display = "none";
			document.getElementById("bidnansabhaby").style.display = "none";
			document.getElementById("municipal").style.display = "none";
			document.getElementById("l").style.display = "none";
			document.getElementById("lb").style.display = "none";
			document.getElementById("b").style.display = "none";
			document.getElementById("bb").style.display = "none";
			document.getElementById("m").style.display = "none";
			document.getElementById("p").style.display = "";
		}
		<?php } ?>
	});
</script>
<!--script to hide election scroll end-->
</body>
</html>

