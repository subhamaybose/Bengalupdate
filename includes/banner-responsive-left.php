<!--<div class="adLR1">
	<div id="banner-fadeR1">
		<ul class="bjqs">
		<?php $set=mysql_query("select * from `advimg` where `pos`='1' and `status`='0' order by `id` desc");
		if(mysql_num_rows($set)>0){ 
		while($tm=mysql_fetch_object($set)){?>
			<li> <img src="images/uploaded/adv/<?php echo $tm->img;?>"  alt="adds" title="" /> </li>
		<?php }}?>
		</ul>
	</div>
</div>-->