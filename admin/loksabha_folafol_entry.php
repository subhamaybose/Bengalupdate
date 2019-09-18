<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
			$sql=mysql_query("insert into `loksabha_result` set 
			`id`='',
			`status`='0',
			`state`='".$_POST['state']."',
			`kendro`='".$_POST['kendro']."',
			`ca_dol_1`='".$_POST['p_dol1']."',
			`vo_dol_1`='".$_POST['v_dol1']."',
			`ca_dol_2`='".$_POST['p_dol2']."',
			`vo_dol_2`='".$_POST['v_dol2']."',
			`ca_dol_3`='".$_POST['p_dol3']."',
			`vo_dol_3`='".$_POST['v_dol3']."',
			`ca_dol_4`='".$_POST['p_dol4']."',
			`vo_dol_4`='".$_POST['v_dol4']."',
			`ca_dol_5`='".$_POST['p_dol5']."',
			`vo_dol_5`='".$_POST['v_dol5']."',
			`round`='".$_POST['round']."',
			`difference`='".$_POST['difference']."',
			`result`='".$_POST['result']."',
			`date`='".date("Y",time())."',
			`time`='".time()."'");
}else{
	
			$sql=mysql_query("update `loksabha_result` set 
			`state`='".$_POST['state']."',
			`kendro`='".$_POST['kendro']."',
			`ca_dol_1`='".$_POST['p_dol1']."',
			`vo_dol_1`='".$_POST['v_dol1']."',
			`ca_dol_2`='".$_POST['p_dol2']."',
			`vo_dol_2`='".$_POST['v_dol2']."',
			`ca_dol_3`='".$_POST['p_dol3']."',
			`vo_dol_3`='".$_POST['v_dol3']."',
			`ca_dol_4`='".$_POST['p_dol4']."',
			`vo_dol_4`='".$_POST['v_dol4']."',
			`ca_dol_5`='".$_POST['p_dol5']."',
			`vo_dol_5`='".$_POST['v_dol5']."',
			`round`='".$_POST['round']."',
			`difference`='".$_POST['difference']."',
			`result`='".$_POST['result']."',
			`date`='".date("Y",time())."',
			`time`='".time()."'
			where `id`='".$_REQUEST['id']."' ");

}
			echo "<script>window.location.href='loksabha_folafol_list.php';</script>";
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit Loksabha Result</h1></div>


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
			<div class="step-dark-left"><a href="">Result Entry Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	<!-- start id-form -->
	<?php 
	if(isset($_REQUEST['id'])){
		$sqll= mysql_query("select * from `loksabha_result` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
	?>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
	<input type="hidden" name="update" value="update" />
    <input type="hidden" name="id" id="id" value="<?php echo  $_REQUEST['id'];?>" />
		<tr>
			<th valign="top">রাজ্যর  নাম :</th>
			<td colspan="2">         
			<select  class="" id="state" name="state"  style="width:300px; padding:5px;" onBlur="javascript:getDataE(this.value);" autofocus >  
				<option value="0">Select State</option>
				<?php 
				$qls=mysql_query("select * from `rajjo` where `status`='0'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
				?>
				<option value="<?php echo $df->id;?>" <?php if($sqllf->state==$df->id){?> selected<?php }?>><?php echo $df->rajjo;?></option>
				<?php }}?>			 
			 </select> 
			</td>
		</tr>
		<tr>
			<th valign="top">লোকসভা কেন্দ্রের  নাম :</th>
			<td colspan="2">
			<select  class="" id="kendro" name="kendro"  style="width:300px; padding:5px;">  
				<?php 
				$qls=mysql_query("select * from `loksabha_constituency` where `status`='0' and `state`='".$sqllf->state."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
				?>
				<option value="<?php echo $df->id;?>" <?php if($df->id==$sqllf->kendro){?> selected<?php }?>><?php echo $df->constituency;?></option>
				<?php }}?>
			</select>
			</td>
		</tr>
		<tr><td colspan="2"><div id="res"><div></td></tr>
		<tr>
			<th valign="top">Round:</th>
			<td><input type="text" class="inp-form" name="round" id="round" value="<?php echo $sqllf->round;?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">ব্যাবধান:</th>
			<td><input type="text" class="inp-form" name="difference" id="difference" value="<?php echo $sqllf->difference;?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">ফলাফল:</th>
			<td><textarea rows="" cols="" class="form-textarea" name="result"><?php echo $sqllf->result;?></textarea></td>
			<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='loksabha_folafol_list.php'" />
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
			<td colspan="2">         
			<select  class="" id="state" name="state"  style="width:300px; padding:5px;" onChange="javascript:getData(this.value);">  
				<option value="0">Select State</option>
				<?php 
				$qls=mysql_query("select * from `rajjo` where `status`='0'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
				?>
				<option value="<?php echo $df->id;?>"><?php echo $df->rajjo;?></option>
				<?php }}?>			 
			 </select> 
			</td>
		</tr>  
		<tr>
			<th valign="top">লোকসভা কেন্দ্রের  নাম :</th>
			<td colspan="2">
			<select  class="" id="kendro" name="kendro"  style="width:300px; padding:5px;">  
				<option value="0" selected="" disabled="">Select Constituency</option>
			</select>
			</td>
		</tr>
		<tr><td colspan="2"><div id="res"><div></td></tr>
		<tr>
			<th valign="top">Round:</th>
			<td><input type="text" class="inp-form" name="round" id="round" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">ব্যাবধান:</th>
			<td><input type="text" class="inp-form" name="difference" id="difference" value=""/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">ফলাফল:</th>
			<td><textarea rows="" cols="" class="form-textarea" name="result"></textarea></td>
			<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='loksabha_folafol_list.php'" />
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
function getData(value){
	var rajjo =value;
	$.ajax({
			url:"ajax/lkendro.php",
			method:"GET",
			data:{rajjo:rajjo},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#kendro").html(data);
				}
			});
	$.ajax({
			url:"ajax/ldol.php",
			method:"GET",
			data:{rajjo:rajjo},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#res").html(data);
				}
			});
}

function getDataE(value){
	var rajjo = value;
	var id = document.getElementById("id").value;
	var election ="loksabha";
	$.ajax({
			url:"ajax/ldolE.php",
			method:"GET",
			data:{rajjo:rajjo,id:id,election:election},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#res").html(data);
				}
			});
	$.ajax({
			url:"ajax/lkendro.php",
			method:"GET",
			data:{rajjo:rajjo,id:id},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#kendro").html(data);
				}
			});
}
</script>
