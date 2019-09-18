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
				   <?php $sql=mysql_query("select * from `scrooltext` where `status`='0' and `cat`='general' and date<='".$_REQUEST['dt']."' limit 5");
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