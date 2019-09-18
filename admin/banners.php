<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	$path="../images/uploaded/banner/";
	$name=time().$_FILES['image']['name'];
	
	@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
	$im=getimagesize($path.$name);
	
	$ext=explode('.', $name);
	$extf=end($ext);
	$name_1=str_replace('.'.$extf,'',$name);
	
	if($im[1]!=300 || $im[0]!=700){		
	$image = new Image($path.$name);
	$image->resize(700,300,'crop');	
	$image->save($name_1,$path,$extf);
	}
	
			$sql=mysql_query("insert into `banner` set 
			`status`='0', 
			`cat`='".$_POST['cat']."',			
			`caption`='".addslashes($_POST['caption'])."',
			`date`='".date("Y-m-d",time())."',
			`title`='".$_POST['title']."',			
			`image`='".$name_1.'.'.$extf."'");
			
}else{
	$path="../images/uploaded/banner/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `banner` where `id`='".$_REQUEST['id']."' "));
		if($_FILES['image']['name']!=''){
		@unlink($path.$qlf->image);
		
		$name=time().$_FILES['image']['name'];
		
		@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
		$im=getimagesize($path.$name);
		
		$ext=explode('.', $name);
		$extf=end($ext);
		$name_1=str_replace('.'.$extf,'',$name);
		
		if($im[1]!=454 || $im[0]!=720){		
		$image = new Image($path.$name);
		$image->resize(720,454,'crop');	
		$image->save($name_1,$path,$extf);
		}
			$st=",`image`='".$name_1.'.'.$extf."'";
		
		}
		
	
			
			$sql=mysql_query("update `banner` set 
			`date`='".date("Y-m-d",time())."',
			`cat`='".$_POST['cat']."',
			`caption`='".addslashes($_POST['caption'])."',
			`title`='".$_POST['title']."'
			".$st." where `id`='".$_REQUEST['id']."' ");

		
			
	}
	echo "<script>window.location.href='bannerlist.php';</script>";
}
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit Banner </h1></div>


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
			<div class="step-dark-left"><a href="">Banner Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
		if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `banner` where `id`='".$_REQUEST['id']."'");
			$sqllf=mysql_fetch_object($sqll);
		?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
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
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="caption"><?php echo $sqllf->caption;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Title:</th>
        <td><textarea rows="" cols="" name="title" class="form-textarea"><?php echo $sqllf->title;?></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Image:</th>
         <td><a onclick="viewimg(1)" style="cursor:pointer;">View Image</a> &nbsp;<input type="file" name="image" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> width 720px height 454px </div>
        <div class="bubble-right"></div></td>
    </tr>
          
              
         
          
            
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='bannerlist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  
    <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <select  class="" id="cat" name="cat" style="width:300px; padding:5px;">  
            <option value="sports">sports</option>
			<option value="entertainment">entertainment</option>
			<option value="rajnity">rajnity</option>
            <option value="offbeat">offbeat</option>
            <option value="general">general</option>				 
         </select> 
        </td>
    </tr>
    <tr>
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="caption"></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Title:</th>
        <td><textarea rows="" cols="" name="title" class="form-textarea"></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Image:</th>
         <td><input type="file" name="image" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> width 720px height 454px </div>
        <div class="bubble-right"></div></td>
    </tr>
         
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='bannerlist.php'" />
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
<div id="img1" style=" padding:10px; display:none; position:fixed; top:20%; left:25%; z-index:1000; background:#ccc;">
<img  src="<?php echo $siteurl.'images/uploaded/banner/'.$sqllf->image;?>" />
</div>