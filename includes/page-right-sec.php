<div class="conteiner">
	<!--Google Search bar start-->
	<div class="heading-panelTwo assbg" style="background-color:#fff !important;"><span class="" style="margin-left:-15px;"><img src = "images/google.png"></span> </div>
	<div class="clear"></div>
	<div class="section">
		<div class="" style="">
			<form method="get" action="https://www.google.com/search" TARGET=_blank>
				<table>
				<!--<img src = "https://www.google.com/accounts/google_transparent.gif">-->
					<tr><td><input type="text" name="q" size="22" maxlength="255" value=""/></td></tr>
					<tr><td><input type=radio name=sitesearch value="" checked>World Wide Web</td></tr>
					<tr><td><input type=radio name=sitesearch value="bengalupdate.in">bengalupdate.in</td></tr> 
					<tr><td><input type="submit" value="Google Search" /></td></tr>
				</table>
			</form>
		</div>
		
		<div class="clear"></div>
	</div>
	<!--Google Search bar end-->
	<!--sompadoker kolom start-->
	<div class="heading-panelTwo assbg"> <span class="icon"><img src="images/samkalam.png" /></span>সম্পাদকের কলম </div>
	<div class="clear"></div>
	<div class="section">
		<?php 
			$sql=mysql_query( "select * from `sompadokio` where status='0' order by id desc"); 
			if(mysql_num_rows($sql)>0){ 
			$ff=mysql_fetch_object($sql);
		?>
		<a href="sampadaker_kalam.php?id=<?php echo $ff->id;?>" class="sampkalm">
			<div class="thumb">
				<?php if(!empty($ff->topicimg)){?>
				<img src="images/uploaded/<?php echo $ff->topicimg;?>" alt="<?php echo $ff->title;?>"/> 
				<?php }else{?>
				<img src="images/no_img.png" alt="<?php echo $ff->title;?>"/>
				<?php }?>
			</div>
			<h2><?php echo $ff->title;?></h2>
		</a>
		<?php }?>
		<div class="clear"></div>
	</div>
	<!--sompadoker kolom end-->
	<div class="clear"></div>
	<!--photo galary start-->
	<div class="heading-panelTwo pinkbg"> <span class="icon"><img src="images/fotogalley.png" /></span>ফটো গ্যালারি </div>
	<div class="clear"></div>
	<div class="section">
		<div class="fotogal">
			<div id="banner-fade">
				<ul class="bjqs">
					<li>
						<a href="photo_gallery.php"><img src="images/demo1.jpg" title=""> </a>
					</li>
					<?php 
					$sqls=mysql_query("select * from `gallerys` where `status`='0' order by `id` desc limit 5");
				    $i=0;
					while($ffs=mysql_fetch_object($sqls)){$i++;	  
					?>
					<li>
						<a href="photo_gallery.php"> <img src="images/uploaded/gal/<?php echo $ffs->img;?>" title=""> </a>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!--photo galary end-->
	<div class="clear"></div>
	<!--angana start-->
	<div class="heading-panelTwo greenbg"> <span class="icon"><img src="images/angana.png" /></span>অঙ্গনা </div>
	<div class="clear"></div>
	<div class="section">
		<?php 
			$sql=mysql_query( "select * from `angana` where status='0' order by id desc"); 
			if(mysql_num_rows($sql)>0){ 
			$ff=mysql_fetch_object($sql);
		?>
		<a href="angana.php?id=<?php echo $ff->id;?>" class="sampkalm">
			<div class="thumb">
				<?php if(!empty($ff->topicimg)){?>
				<img src="images/uploaded/<?php echo $ff->topicimg;?>" alt="<?php echo $ff->title;?>"/> 
				<?php }else{?>
				<img src="images/no_img.png" alt="<?php echo $ff->title;?>"/>
				<?php }?>
			</div>
			<h2><?php echo $ff->title;?></h2>
		</a>
		<?php }?>
	</div>
	<!--angana end-->
	<div class="clear"></div>
	<!--polling start-->
	<div class="heading-panelTwo bluebg"> <span class="icon"><img src="images/balatbox.png" /></span>ব্যালট বক্স </div>
	<div class="clear"></div>
	<div class="section">
		<div id="q">
		<?php $sql=mysql_query("select * from `poll` where `status`='0' order by id desc limit 1");
		   $sf1=mysql_fetch_object($sql);
		   $to=$sf1->yes+$sf1->no+$sf1->not_known;
		   if($to>0){
			$yp=intval($sf1->yes*100/$to);
			$np=intval($sf1->no*100/$to);
			$nop=intval($sf1->not_known*100/$to);
			}else{
			$yp=0;
			$np=0;
			$nop=0;
			}
		?>
		<h4><?php echo $sf1->topic;?></h4>
		<form action="" method="post">
		<div class="blat-box"> 
			<span><input type="radio" class="" id="yes" name="pol" value="yes" />  হ্যাঁ</span>
			<span><input type="radio" class="" id="yes" name="pol" value="no" />  না</span>
			<span><input type="radio" class="" id="yes" name="pol" value="cannotsay" />  জানি না</span>
		</div>
		<input type="submit" name="votesub" value="ভোট দিন" class="btn fLeft redbg m-right"  />
		</form>
		<?php 
		/*Vote Result Submit*/
		if(isset($_REQUEST['votesub']))
		{
			if(!empty($_REQUEST['pol'])){
				$getinfo=mysql_query("select yes,no,not_known from poll where `status`='0' order by id desc limit 1");
				while($row = mysql_fetch_object($getinfo)){
					$y= $row->yes;
					$n= $row->no;
					$na= $row->not_known;
				}
				if($_REQUEST['pol']=='yes')
				{
					$y++;
					mysql_query("update poll set yes='".$y."' where `status`='0' order by id desc limit 1");
					header('Location:index.php');
				}
				elseif($_REQUEST['pol']=="no")
				{
					$n++;
					mysql_query("update poll set no='".$n."' where `status`='0' order by id desc limit 1");
					header('Location:index.php');
				}
				else
				{
					$na++;
					mysql_query("update poll set not_known='".$na."' where `status`='0' order by id desc limit 1");
					header('Location:index.php');
				}	
			}
		}
		?>
		<a onclick="javascript:showResult();" class="btn fLeft">ফালাফল জানতে ক্লিক করুন</a>
		</div>
		<div id="a">
			<?php
			$getinfo=mysql_query("select yes,no,not_known from poll where `status`='0' order by id desc limit 1");
			while($row = mysql_fetch_array($getinfo))
			{
			$yes= $row['yes'];
			$no= $row['no'];
			$not_known= $row['not_known'];
			}
			?>
			<!--<p><?php echo $yes.", ".$no.", ".$not_known;?></p>-->
			<h6>হ্যাঁ</h6>
				<div class="progress">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo(100*round($yes/($no+$yes+$not_known),3));?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(100*round($yes/($no+$yes+$not_known),3));?>%">
				<span class="sr-only"><?php echo(100*round($yes/($no+$yes+$not_known),3));?>% Complete (success)</span>
			  </div>
			</div>
			<h6>না</h6>
			<div class="progress">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo(100*round($no/($no+$yes+$not_known),3));?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(100*round($no/($no+$yes+$not_known),3));?>%">
				<span class="sr-only"><?php echo(100*round($no/($no+$yes+$not_known),3));?>% Complete</span>
			  </div>
			</div>
			<h6>জানি না</h6>
			<div class="progress">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo(100*round($not_known/($no+$yes+$not_known),3));?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo(100*round($not_known/($no+$yes+$not_known),3));?>%">
				<span class="sr-only"><?php echo(100*round($not_known/($no+$yes+$not_known),3));?>% Complete (warning)</span>
			  </div>
			</div>
			<a id="pb" class="btn btn-primary" onclick="javascript:qb();">&laquo; Back</a>
		</div>
		<div class="clear"></div>
	</div>
	<!--polling end-->
	<!--share bazar start-->
	<div class="heading-panelTwo assbg"> <span class="icon"><img src="images/searbazar.png" /></span>শেয়ার বাজার </div>
	<div class="clear"></div>
	<div class="section">
		<div class="sensex"><iframe id="moneywiz_widget" name="moneywiz_widget" width="270" height="300" src="//money.rediff.com/widget/moneywizwidget" scrolling="no" frameborder="0" marginHeight="0"></iframe><!--<script type="text/javascript">var _mcq=["6",""];</script><span id='_mc_mg6'></span><script language="JavaScript" src="https://stat1.moneycontrol.com/mcjs/common/https_mc_widget.js"></script><noscript><a href="https://www.moneycontrol.com">Sensex/Nifty</a></noscript>--><!--<img src="images/sensex.jpg" />--></div>
		<div class="clear"></div>
	</div>
	<!--share bazar end-->
	<div class="clear"></div>
	<!--quick link start-->
	<div class="heading-panelTwo pinkbg"> <span class="icon"><img src="images/quicklink.png" /></span>কুইক লিঙ্ক </div>
	<div class="clear"></div>
	<div class="section">
		<ul class="quick-L">
			<li>
				<a target="_blank" href="http://www.airindia.in/customer-support.htm"><img src="images/air_india.png" /> </a>
			</li>
			<li>
				<a target="_blank" href="https://wbtourismgov.in/"><img src="images/kmes.png" /> </a>
			</li>
			<li>
				<a target="_blank" href="http://enquiry.indianrail.gov.in/ntes/"><img src="images/india_railway.png" /> </a>
			</li>
			<li>
				<a target="_blank" href="http://www.kolkatatrafficpolice.gov.in/helpline.html"><img src="images/kp.png" /> </a>
			</li>
		</ul>
		<div class="clear"></div>
	</div>
	<!--quick link end-->
	<div class="clear"></div>
	<!--amader poribar start-->
	<div class="heading-panelTwo greenBbg"> <span class="icon"><img src="images/paribar.png" /></span>আমাদের পরিবার </div>
	<div class="clear"></div>
	<div class="sectionE">
		<div class="container">
		<marquee behavior="scroll" direction="up" scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();">
			<!--<ul class="sectionElist">-->
			<?php $set=mysql_query("select * from `option` where `name`='team'");
				if(mysql_num_rows($set)>0){ $setf=mysql_fetch_object($set);$tm=explode(',',$setf->value);
				foreach($tm as $v){
			?>		
				<p><?php echo $v;?></p>
			<?php
				}
			}?>
		</marquee>
		</div>
		<div class="clear"></div>
		<!--<a href="#">আরও দেখুন</a>-->
	</div>
	<!--amader poribar end-->
</div>
<script>
$(document).ready(function(){
		document.getElementById("q").style.display = "";
		document.getElementById("a").style.display = "none";
	});	
	function showResult(){
		document.getElementById("q").style.display = "none";
		document.getElementById("a").style.display = "";
	}
	function qb(){
		document.getElementById("q").style.display = "";
		document.getElementById("a").style.display = "none";
	}
</script>
<div class="clear"></div>