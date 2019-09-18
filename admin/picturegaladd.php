<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	$path="../images/uploaded/gal/";
	$name=time().$_FILES['image']['name'];
	
	@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
	$im=getimagesize($path.$name);
	
	$ext=explode('.', $name);
	$extf=end($ext);
	$name_1=str_replace('.'.$extf,'',$name);
	$name_1=str_replace(' ','',$name_1);
	if($im[1]!=800){		
	$image = new Image($path.$name);
	$image->resize(800,600,'crop');	
	$image->save($name_1,$path,$extf);
	}
	
			$sql=mysql_query("insert into `gallerys` set 
			`status`='0', 
			`cat`='".$_POST['cat']."',
			`cap`='".$_POST['name']."',
			`date`='".date("Y-m-d",time())."',
			`img`='".$name_1.'.'.$extf."'");
			
}else{
	$path="../images/uploaded/gal/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `gallerys` where `id`='".$_REQUEST['id']."' "));
		if($_FILES['image']['name']!=''){
		@unlink($path.$qlf->img);
		
		$name=time().$_FILES['image']['name'];
		
		@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
		$im=getimagesize($path.$name);
		
		$ext=explode('.', $name);
		$extf=end($ext);
		$name_1=str_replace('.'.$extf,'',$name);
		$name_1=str_replace(' ','',$name_1);
		if($im[1]!=800){		
		$image = new Image($path.$name);
		$image->resize(800,600,'crop');	
		$image->save($name_1,$path,$extf);
		}
		
			$st=",`img`='".$name_1.'.'.$extf."'";
		
		}
		
	
			
			$sql=mysql_query("update `gallerys` set 
			`cat`='".$_POST['cat']."',
			`cap`='".$_POST['name']."',
			`date`='".date("Y-m-d",time())."'
			".$st." where `id`='".$_REQUEST['id']."' ");

		
			
	}
	echo "<script>window.location.href='picturegal.php';</script>";
}
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit Picture </h1></div>


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
			<div class="step-dark-left"><a href=""> image </a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
		if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `gallerys` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
    <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <select  class="" id="cat" name="cat"  style="width:300px; padding:5px;">  
            <?php 
			$qls=mysql_query("select * from `galcat` where `status`='0'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
			?>
            <option value="<?php echo $df->id;?>" <?php if($sqllf->cat==$df->id){?> selected="selected" <?php }?>><?php echo $df->name;?></option>
			<?php }}?>			 
         </select> 
        </td>
    </tr>   
      <tr>
        <th valign="top">Caption:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="name"><?php echo $sqllf->cap;?></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Image:</th>
         <td><a onclick="viewimg(1)" style="cursor:pointer;">View Image</a> &nbsp;<input type="file" name="image" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner">  </div>
        <div class="bubble-right"></div></td>
    </tr>
                
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='picturegal.php'" />
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
        <select  class="" id="cat" name="cat"  style="width:300px; padding:5px;">  
            <?php 
			$qls=mysql_query("select * from `galcat` where `status`='0'");
			if(mysql_num_rows($qls)>0){
			while($df=mysql_fetch_object($qls)){
			?>
            <option value="<?php echo $df->id;?>"><?php echo $df->name;?></option>
			<?php }}?>			 
         </select> 
        </td>
    </tr>
    <tr>
        <th valign="top">Caption:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="name"></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Image:</th>
         <td><input type="file" name="image" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> </div>
        <div class="bubble-right"></div></td>
    </tr>
          
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='picturegal.php'" />
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
<img  src="<?php echo $siteurl.'images/uploaded/gal/'.$sqllf->img;?>" />
</div>