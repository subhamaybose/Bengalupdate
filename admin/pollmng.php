<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			
			$sql=mysql_query("insert into `poll` set 
			`status`='0', 		
			`name`='".addslashes($_POST['name'])."', 			
			`topic`='".addslashes($_POST['topic'])."',
			`cat`='".$_POST['cat']."',			
			`startdate`='".time()."'") or die(mysql_error());
			
			$sql1=mysql_query("UPDATE `poll` SET `date`='".date("Y-m-d",time())."' WHERE `id`=(SELECT * FROM (SELECT `id` FROM `poll` ORDER BY `id` DESC LIMIT 1 OFFSET 1) AS p);") or die(mysql_error());
			
		
}else{
		$sql=mysql_query("update `poll` set 		
			`cat`='".$_POST['cat']."',	
			`name`='".addslashes($_POST['name'])."', 						
			`topic`='".addslashes($_POST['topic'])."'			
			where `id`='".$_REQUEST['id']."' ") or die(mysql_error());
			 
	}
	echo "<script>window.location.href='polllist.php';</script>";
}
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

<script type="text/javascript" src="tinymce/js/tinymce/tinymce.jquery.min.js"></script>
<script type="text/javascript" >/*
tinymce.init({
	toolbar: "sizeselect | bold italic | fontselect |  fontsizeselect",
	 theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
    font_size_style_values: "12px,13px,14px,16px,18px,20px",
    selector: 'textarea.form-textarea1'
});*/
</script>
<div id="page-heading"><h1>Add Edit Posts </h1></div>


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
			<div class="step-dark-left"><a href="">Post Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
		if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `poll` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     	<input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />
    
        <tr>
        <th valign="top">Heading:</th>
        <td><textarea rows="" cols="" name="name" class="form-textarea"><?php echo $sqllf->name;?></textarea></td>
        <td></td>
    </tr> 
    <tr>
        <th valign="top">Topic:</th>
        <td><textarea rows="" cols="" name="topic" class="form-textarea"><?php echo $sqllf->topic;?></textarea></td>
        <td></td>
    </tr>       
      <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
<select  class="" id="cat" name="cat"  style="width:300px; padding:5px;">  
<option value="sports" <?php if($sqllf->cat=='sports'){?> selected<?php }?>>sports</option>
<option value="entertainment" <?php if($sqllf->cat=='entertainment'){?> selected<?php }?>>entertainment</option>
<option value="rajnity" <?php if($sqllf->cat=='rajnity'){?> selected<?php }?>>rajnity</option>
<option value="offbeat" <?php if($sqllf->cat=='offbeat'){?> selected<?php }?>>offbeat</option>
<option value="general" <?php if($sqllf->cat=='general'){?> selected<?php }?>>general</option>				
</select> 
        </td>
    </tr>     
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='polllist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> 
    <tr>
        <th valign="top">Heading:</th>
        <td><textarea rows="" cols="" name="name" class="form-textarea"></textarea></td>
        <td></td>
    </tr> 
    <tr>
        <th valign="top">Topic:</th>
        <td><textarea rows="" cols="" name="topic" class="form-textarea"></textarea></td>
        <td></td>
    </tr>               
   <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <select  class="" id="cat" name="cat" style="width:300px; padding:5px;">  
            <option value="sports">sports</option>
            <option value="rajnity">rajnity</option>
			<option value="entertainment">entertainment</option>
            <option value="offbeat">offbeat</option>
            <option value="general">general</option>				 
         </select> 
        </td>
    </tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='polllist.php'" />
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