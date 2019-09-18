<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
  if($_FILES['image']['name']!=''){
	$path="../images/uploaded/book/";
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
     $ss=$name_1.'.'.$extf;
     }else{
     $ss='';
     }
		
			$sql=mysql_query("insert into `boiwala` set 
			`status`='0', 
			`name`='".addslashes($_POST['title'])."',			
			`smalltext`='".addslashes($_POST['smalltext'])."',			
			`desc`='".addslashes($_POST['text'])."',
			`author`='".addslashes($_POST['author'])."',
			`author_desc`='".addslashes($_POST['author_desc'])."',			
			`price`='".addslashes($_POST['price'])."',			
			`offer`='".addslashes($_POST['offer'])."',			
			`offer_rate`='".addslashes($_POST['offer_rate'])."',						
			`our_review`='".addslashes($_POST['our_review'])."',						
			`publisher`='".addslashes($_POST['publisher'])."',						
			`published_date`='".addslashes($_POST['date'])."',
			`img`='".$ss."' ") or die(mysql_error());
			
}else{
	$path="../images/uploaded/book/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `boiwala` where `id`='".$_REQUEST['id']."' "));
		if($_FILES['image']['name']!=''){
		@unlink($path.$qlf->img);
		
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
			$st=",`img`='".$name_1.'.'.$extf."'";
		
		}
	
	
	
			
			$sql=mysql_query("update `boiwala` set 
			`name`='".addslashes($_POST['title'])."',			
			`smalltext`='".addslashes($_POST['smalltext'])."',			
			`desc`='".addslashes($_POST['text'])."',
			`author`='".addslashes($_POST['author'])."',
			`author_desc`='".addslashes($_POST['author_desc'])."',			
			`price`='".addslashes($_POST['price'])."',			
			`offer`='".addslashes($_POST['offer'])."',			
			`offer_rate`='".addslashes($_POST['offer_rate'])."',						
			`our_review`='".addslashes($_POST['our_review'])."',						
			`publisher`='".addslashes($_POST['publisher'])."',						
			`published_date`='".addslashes($_POST['date'])."'".$st." where `id`='".$_REQUEST['id']."' ");

		
			
	}
	echo "<script>window.location.href='booklist.php';</script>";
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
			$sqll= mysql_query("select * from `boiwala` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     
    <tr>
        <th valign="top">Offer :</th>
        <td colspan="2"> 
         <input type="checkbox" value="1" name="offer" <?php if($sqllf->offer==1){?> checked="checked" <?php }?> />&nbsp;        
        <div class="clear" style="margin:10px;"></div>        
        </td>
    </tr> 
     <tr>
        <th valign="top">Offer Rate:</th>
        <td colspan="2"> 
         <input type="text" value="<?php echo $sqllf->offer_rate;?>" name="offer_rate" class="inp-form" />&nbsp;        
        <div class="clear" style="margin:10px;"></div>        
        </td>
    </tr> 
    <tr>
        <th valign="top">Title:</th>
        <td><textarea rows="" cols="" name="title" class="form-textarea"><?php echo $sqllf->name;?></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="smalltext"><?php echo $sqllf->smalltext;?></textarea></td>
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
        <td><textarea rows="" cols="" name="text" class="form-textarea1"><?php echo $sqllf->desc;?></textarea></td>
        <td></td>
    </tr>    
    <tr>
        <th valign="top">Author Name:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="author"><?php echo $sqllf->author;?></textarea></td>
        <td></td>
    </tr>
       <tr>
        <th valign="top">About Author:</th>
        <td><textarea rows="" cols="" name="author_desc" class="form-textarea1"><?php echo $sqllf->author_desc;?></textarea></td>
        <td></td>
    </tr>
        <tr>
        <th valign="top">Our Review:</th>
        <td><textarea rows="" cols="" name="our_review" class="form-textarea1"><?php echo $sqllf->our_review;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Publisher:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="publisher"><?php echo $sqllf->publisher;?></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Published Date:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="date"><?php echo $sqllf->published_date;?></textarea></td>
        <td></td>
    </tr>   
    <tr>
        <th valign="top">Price:</th>
        <td><input type="text" value="<?php echo $sqllf->price;?>" name="price" class="inp-form" /></td>
        <td></td>
    </tr>      
         
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='booklist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form">       
     <tr>
        <th valign="top">Offer :</th>
        <td colspan="2"> 
         <input type="checkbox" value="1" name="offer" />&nbsp;        
        <div class="clear" style="margin:10px;"></div>        
        </td>
    </tr> 
     <tr>
        <th valign="top">Offer Rate:</th>
        <td colspan="2"> 
         <input type="text" value="" name="offer_rate" class="inp-form" />&nbsp;        
        <div class="clear" style="margin:10px;"></div>        
        </td>
    </tr> 
    <tr>
        <th valign="top">Title:</th>
        <td><textarea rows="" cols="" name="title" class="form-textarea"></textarea></td>
        <td></td>
    </tr>         
    <tr>
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="smalltext"></textarea></td>
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
        <th valign="top">About Author:</th>
        <td><textarea rows="" cols="" name="author_desc" class="form-textarea1"></textarea></td>
        <td></td>
    </tr>
        <tr>
        <th valign="top">Our Review:</th>
        <td><textarea rows="" cols="" name="our_review" class="form-textarea1"></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Publisher:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="publisher"></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Published Date:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="date"></textarea></td>
        <td></td>
    </tr>   
    <tr>
        <th valign="top">Price:</th>
        <td><input type="text" value="" name="price" class="inp-form" /></td>
        <td></td>
    </tr>  
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='booklist.php'" />
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
<img  src="<?php echo $siteurl.'images/uploaded/book/'.$sqllf->img;?>" />
</div>