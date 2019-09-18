<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	$path="../images/uploaded/map/";
	/*$name=time().$_FILES['anganamenuimg']['name'];
	
	@move_uploaded_file($_FILES['anganamenuimg']['tmp_name'],$path.$name);
	$im=getimagesize($path.$name);
	
	$ext=explode('.', $name);
	$extf=end($ext);
	$name_1=str_replace('.'.$extf,'',$name);
	
	if($im[0]>190){
		$hr=floatval($im[1]/$im[0]);
		$ht=190*$hr;
		
	$image = new Image($path.$name);
	$image->resize(190,$ht,'crop');
	
	$image->save($name_1,$path,$extf);
	}*/
	
	$name1=time().$_FILES['anganatopicimg']['name'];	
	@move_uploaded_file($_FILES['anganatopicimg']['tmp_name'],$path.$name1);
	$im1=getimagesize($path.$name1);
	
	$ext1=explode('.', $name1);
	$extf1=end($ext1);
	$name1_1=str_replace('.'.$extf1,'',$name1);
	
	if($im1[0]>400){
		$hr1=floatval($im1[1]/$im1[0]);
		$ht1=400*$hr1;
	$image1 = new Image($path.$name1);
	$image1->resize(400,$ht1,'crop');
	
	$image1->save($name1_1,$path,$extf1);
	}
			$sql=mysql_query("insert into `rajjo` set 
			`id`='',
			`status`='0',
			`img`='".$name1_1.'.'.$extf1."',
			`rajjo`='".$_POST['state_name']."',
			`l_seat`='".$_POST['seat_loksabha']."',
			`date`='".date("Y-m-d",time())."'",$conn);
			
			$sql1=mysql_query("insert into `rajjo` set 
			`id`='',
			`status`='0',
			`img`='".$name1_1.'.'.$extf1."',
			`rajjo`='".$_POST['state_name']."',
			`l_seat`='".$_POST['seat_loksabha']."',
			`date`='".date("Y-m-d",time())."'",$conn_archive);
}else{
	$st='';
	$path="../images/uploaded/map/";
	$qlf=mysql_fetch_object(mysql_query("select * from `rajjo` where `id`='".$_REQUEST['id']."' "));
	
	if($_FILES['anganatopicimg']['name']!=''){
		@unlink($path.$qlf->topicimg);
		$name1=time().$_FILES['anganatopicimg']['name'];	
		@move_uploaded_file($_FILES['anganatopicimg']['tmp_name'],$path.$name1);
		$im1=getimagesize($path.$name1);		
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name1_1=str_replace('.'.$extf1,'',$name1);
		
		if($im1[0]>400){
			$hr1=floatval($im1[1]/$im1[0]);
			$ht1=400*$hr1;
		$image1 = new Image($path.$name1);
		$image1->resize(400,$ht1,'crop');
		
		$image1->save($name1_1,$path,$extf1);
		}
		
		$st="`img`='".$name1_1.'.'.$extf1."',";
		
	}
			$sql=mysql_query("update `rajjo` set 
			".$st."
			`rajjo`='".$_POST['state_name']."',
			`date`='".date("Y-m-d",time())."',
			`l_seat`='".$_POST['seat_loksabha']."',
			where `id`='".$_REQUEST['id']."' ",$conn);
			
			$sql=mysql_query("update `rajjo` set 
			".$st."
			`rajjo`='".$_POST['state_name']."',
			`date`='".date("Y-m-d",time())."',
			`l_seat`='".$_POST['seat_loksabha']."',
			where `id`='".$_REQUEST['id']."' ",$conn_archive);
}
			echo "<script>window.location.href='rajjo_list.php';</script>";
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit State </h1></div>


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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">			
			<div class="step-dark-left"><a href="">State Entry Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
			if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `rajjo` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
		<input type="hidden" name="update" value="update" />
        <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />
<!--                 <tr>
            <th>Angana Menu Image:</th>
            <td> <a onclick="viewimg(1)" style="cursor:pointer;">View Image</a>  &nbsp; <input type="file" name="anganamenuimg" class="file_1" /></td>
            <td><div class="bubble-left"></div>
            <div class="bubble-inner"> width 190px </div>
            <div class="bubble-right"></div></td>
            </tr>
-->
		<tr>
			<th valign="top">রাজ্যর  নাম :</th>
			<td><input type="text" class="inp-form" name="state_name" id="state_name" value="<?php echo $sqllf->rajjo;?>"/></td>
			<td></td>
		</tr>    

            <tr>
            <th>রাজ্যর ম্যাপ :</th>
            <td> <a onclick="viewimg(2)" style="cursor:pointer;">View Image</a> &nbsp; <input type="file" name="anganatopicimg" class="file_1" /></td>
            <td><div class="bubble-left"></div>
            <div class="bubble-inner"> width 400px </div>
            <div class="bubble-right"></div></td>
            </tr>
            <tr>
            <th valign="top">লোকসভা আসন সংখ্যা:</th>
            <td><input type="text" class="inp-form" name="seat_loksabha" id="seat_loksabha" value="<?php echo $sqllf->l_seat;?>"/></td>
            <td></td>
            </tr>
			<!--<tr>
            <th valign="top">বিধানসভা আসন সংখ্যা:</th>
            <td><input type="text" class="inp-form" name="seat_bidhansabha" id="seat_bidhansabha" value="<?php echo $sqllf->b_seat;?>"/></td>
            <td></td>
            </tr>-->
                
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='rajjo_list.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">
             <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
			<tr>
			<th valign="top">রাজ্যর  নাম :</th>
			<td><input type="text" class="inp-form" name="state_name" id="state_name" value=""/></td>
			<td></td>
		</tr>  
			<!-- <tr>
           <th>Angana Menu Image:</th>
            <td>  <input type="file" name="anganamenuimg" class="file_1" /></td>
            <td><div class="bubble-left"></div>
            <div class="bubble-inner"> width 190px height 200px</div>
            <div class="bubble-right"></div></td>
            </tr>-->
            <tr>
            <th>রাজ্যর ম্যাপ :</th>
            <td width="30%">  <input type="file" name="anganatopicimg" class="file_1" /></td>
            <td width="30%"></td>
			<td width="30%"><div class="bubble-left"></div>
            <div class="bubble-inner"> width 400px height 320px</div>
            <div class="bubble-right"></div></td>
            </tr>
            <tr>
            <th valign="top">লোকসভা আসন সংখ্যা:</th>
            <td><input type="text" class="inp-form" name="seat_loksabha" id="seat_loksabha" value=""/></td>
            <td></td>
            </tr>
			<!--<tr>
            <th valign="top">বিধানসভা আসন সংখ্যা:</th>
            <td><input type="text" class="inp-form" name="seat_bidhansabha" id="seat_bidhansabha" value=""/></td>
            <td></td>
            </tr>--> 
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='rajjo_list.php'" />
		</td>
		<td></td>
	</tr>
	</table>
 </form >    
     <?php }?>
	<!-- end id-form  -->


 
	</td>
	<td>

	

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
<script type="text/javascript">
function viewimg(id){
	$('#img'+id).toggle();
}
</script>
<div id="img1" style=" padding:10px; display:none; position:fixed; top:38%; left:38%; z-index:1000; background:#ccc;">
<img  src="<?php echo $siteurl.'images/uploaded/'.$sqllf->smallimg;?>" />
</div>
<div id="img2" style=" padding:10px; display:none; position:fixed; top:30%; left:30%; z-index:1000; background:#ccc;">
<img  src="<?php echo $siteurl.'../images/uploaded/map/'.$sqllf->img;?>" />
</div>