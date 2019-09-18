<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
			$sql=mysql_query("insert into `municipality` set 
			`id`='',
			`status`='0',
			`state`='".$_POST['state']."',
			`district`='".$_POST['district']."',
			`municipality`='".$_POST['municipality_name']."',
			`seats`='".$_POST['seats']."',
			`date`='".date("Y-m-d",time())."'",$conn);
			
			$sql1=mysql_query("insert into `municipality` set 
			`id`='',
			`status`='0',
			`state`='".$_POST['state']."',
			`district`='".$_POST['district']."',
			`municipality`='".$_POST['municipality_name']."',
			`seats`='".$_POST['seats']."',
			`date`='".date("Y-m-d",time())."'",$conn_archive);
}else{
	
			$sql=mysql_query("update `municipality` set 
			`state`='".$_POST['state']."',
			`municipality`='".$_POST['municipality_name']."',
			`seats`='".$_POST['seats']."',
			`district`='".$_POST['district']."',
			`date`='".date("Y-m-d",time())."'
			 where `id`='".$_REQUEST['id']."' ",$conn);
			 
			 $sql=mysql_query("update `municipality` set 
			`state`='".$_POST['state']."',
			`municipality`='".$_POST['municipality_name']."',
			`seats`='".$_POST['seats']."',
			`district`='".$_POST['district']."',
			`date`='".date("Y-m-d",time())."'
			 where `id`='".$_REQUEST['id']."' ",$conn_archive);

}
			echo "<script>window.location.href='municipality_list.php';</script>";
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit Municipality</h1></div>


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
			<div class="step-dark-left"><a href="">Municipality Entry Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
			if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `municipality` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
		<input type="hidden" name="update" value="update" />
        <input type="hidden" name="id" id="id" value="<?php echo  $_REQUEST['id'];?>" />
		
		<tr>
			<th valign="top">রাজ্য:</th>
			<td colspan="2">         
			<select  class="" id="cat" name="state"  style="width:300px; padding:5px;" onBlur="javascript:getDataE(this.value);">  
				<option value="0" selected="" disabled="">Select State</option>
				<?php 
				$qls=mysql_query("select * from `rajjo` where `status`='0'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
				?>
				<option value="<?php echo $df->id;?>" <?php if($sqllf->state==$df->id){?> selected="selected" <?php }?>><?php echo $df->rajjo;?></option>
				<?php }}?>			 
			 </select> 
			</td>
		</tr>
		<tr>
			<th valign="top">জেলার  নাম :</th>
			<td colspan="2">
			<select  class="" id="district" name="district"  style="width:300px; padding:5px;">  
				<?php 
				$qls=mysql_query("select * from `district` where `status`='0' and `state`='".$sqllf->state."'");
				if(mysql_num_rows($qls)>0){
				while($df=mysql_fetch_object($qls)){
				?>
				<option value="<?php echo $df->id;?>" <?php if($df->id==$sqllf->district){?> selected<?php }?>><?php echo $df->district;?></option>
				<?php }}?>
			</select>
			</td>
		</tr>
		<tr>
			<th valign="top">পৌরসভার  নাম :</th>
			<td><input type="text" class="inp-form" name="municipality_name" id="municipality_name" value="<?php echo $sqllf->municipality;?>"/></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">পৌরসভার আসন সংখ্যা:</th>
		<td><input type="text" class="inp-form" name="seats" id="seats" value="<?php echo $sqllf->seats;?>"/></td>
		<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='municipality_list.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post"  enctype="multipart/form-data">
             <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
		<tr>
			<th valign="top">রাজ্য:</th>
			<td colspan="2">         
			<select  class="" id="cat" name="state"  style="width:300px; padding:5px;" onChange="javascript:getData(this.value);">  
				<option value="0" selected="" disabled="">Select State</option>
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
			<th valign="top">জেলার  নাম :</th>
			<td colspan="2">
			<select  class="" id="district" name="district"  style="width:300px; padding:5px;">  
				<option value="0" selected="" disabled="">Select District</option>
			</select>
			</td>
		</tr>
		<tr>
			<th valign="top">পৌরসভার  নাম :</th>
			<td><input type="text" class="inp-form" name="municipality_name" id="municipality_name" value=""/></td>
			<td></td>
		</tr>
		<tr>
            <th valign="top">পৌরসভার  আসন সংখ্যা:</th>
            <td><input type="text" class="inp-form" name="seats" id="seats" value=""/></td>
            <td></td>
		</tr>
		
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='municipality_list.php'" />
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
function getData(value){
	var rajjo =value;
	$.ajax({
			url:"ajax/district.php",
			method:"GET",
			data:{rajjo:rajjo},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#district").html(data);
				}
			});

}

function getDataE(value){
	var rajjo = value;
	var id = document.getElementById("id").value;
	var election="municipalentry";
	$.ajax({
			url:"ajax/district.php",
			method:"GET",
			data:{rajjo:rajjo,id:id,election:election},//try to keep var_name=var1_name
			dataType:"text",
			success:function(data){
				$("#district").html(data);
				}
			});
}
</script>