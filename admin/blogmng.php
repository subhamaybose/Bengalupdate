<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
if($_FILES['image']['name']!=''){	
	$path="../images/uploaded/blog/";
	$name=time().$_FILES['image']['name'];
	
	@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
	$im=getimagesize($path.$name);
	
	$ext=explode('.', $name);
	$extf=end($ext);
	$name_1=str_replace('.'.$extf,'',$name);
	
	if($im[1]!=320 || $im[0]!=400){		
	$image = new Image($path.$name);
	$image->resize(400,320,'crop');	
	$image->save($name_1,$path,$extf);
	}
}
$bimg= $name_1.'.'.$extf;			
			$sql=mysql_query("insert into `blog` set 
			`status`='0', 
			`small_text`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`author_name`='".addslashes($_POST['author'])."',
			`date`='".date('Y-m-d')."',			
			`keyword`='".$_POST['keywords']."',
			`description`='".addslashes($_POST['description'])."',
			`image`='".$bimg."' ");
			
			
}else{

	$path="../images/uploaded/blog/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `blog` where `id`='".$_REQUEST['id']."' "));
		if($_FILES['image']['name']!=''){
		@unlink($path.$qlf->image);
		
		$name=time().$_FILES['image']['name'];
		
		@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
		$im=getimagesize($path.$name);
		
		$ext=explode('.', $name);
		$extf=end($ext);
		$name_1=str_replace('.'.$extf,'',$name);
		
			if($im[1]!=320 || $im[0]!=400){		
			$image = new Image($path.$name);
			$image->resize(400,320,'crop');	
			$image->save($name_1,$path,$extf);
			}
			$st=",`image`='".$name_1.'.'.$extf."' ";
		
		}
			
			$sql=mysql_query("update `blog` set 
			`small_text`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`author_name`='".addslashes($_POST['author'])."',
			`date`='".date('Y-m-d')."',			
			`keyword`='".$_POST['keywords']."',
			`description`='".addslashes($_POST['description'])."'
			".$st." where `id`='".$_REQUEST['id']."' ") ;

			
	}
	echo "<script>window.location.href='bloglist.php';</script>";
}
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.jquery.min.js"></script>
<script type="text/javascript" >
tinymce.init({
	toolbar: "sizeselect | bold italic | fontselect |  fontsizeselect",
	 theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
    font_size_style_values: "12px,13px,14px,16px,18px,20px",
    selector: 'textarea.form-textarea1'
});
</script>
<div id="page-heading">
  <h1>Add Edit Blog Posts </h1></div>


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
			<div class="step-dark-left"><a href="">Blog Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php 
		if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `blog` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" /> 
      
    <tr>
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="caption"><?php echo $sqllf->small_text;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Title:</th>
        <td><textarea rows="" cols="" name="title" class="form-textarea"><?php echo $sqllf->title;?></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Image:</th>
         <td><a onclick="viewimg(1)" style="cursor:pointer;">View Image</a> <input type="file" name="image" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> width 400px height 320px </div>
        <div class="bubble-right"></div></td>
    </tr>
    <tr>
        <th valign="top">Text:</th>
        <td><textarea rows="" cols="" name="text" class="form-textarea1"><?php echo $sqllf->text;?></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Author Name:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="author"><?php echo $sqllf->author_name;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">keyword:</th>
        <td><textarea rows="" cols="" name="keywords" class="form-textarea"><?php echo $sqllf->keyword;?></textarea></td>
        <td></td>
    </tr>       
	<tr>
        <th valign="top">Description:</th>
        <td><textarea rows="" cols="" name="description" class="form-textarea"><?php echo $sqllf->description;?></textarea></td>
        <td></td>
    </tr>       
              
         
         
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='bloglist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> 
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
        <div class="bubble-inner"> width 400px height 320px </div>
        <div class="bubble-right"></div></td>
    </tr>
    <tr>
        <th valign="top">Text:</th>
        <td><textarea rows="" cols="" name="text" class="form-textarea1"></textarea></td>
        <td></td>
    </tr>    
    <tr>
        <th valign="top">Author Name:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="author"></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Keyword:</th>
        <td><textarea rows="" cols="" name="Keywords" class="form-textarea"></textarea></td>
        <td></td>
    </tr> 
        <tr>
        <th valign="top">Description:</th>
        <td><textarea rows="" cols="" name="description" class="form-textarea"></textarea></td>
        <td></td>
    </tr>       
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='bloglist.php'" />
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
<img  src="<?php echo $siteurl.'images/uploaded/blog/'.$sqllf->image;?>" />
</div>