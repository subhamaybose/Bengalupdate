<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("mail.php");
include("includes/header.php");
if($_SESSION['admintype']=='1'){
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
if($_FILES['image']['name']!=''){	
	$path="../images/uploaded/";
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
	if($_FILES['auimage']['name']!=''){
		
		$path1="../images/uploaded/author/";
		$name1=time().$_FILES['auimage']['name'];
		
		@move_uploaded_file($_FILES['auimage']['tmp_name'],$path1.$name1);
		$im1=getimagesize($path1.$name1);
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name_2=str_replace('.'.$extf1,'',$name1);
		
		if($im1[1]!=100 || $im1[0]!=75){		
		$image = new Image($path1.$name1);
		$image->resize(100,75,'crop');	
		$image->save($name_2,$path1,$extf1);
		}
		
		$st1=",`author_image`='".$name_2.'.'.$extf1."'";
	}
		
			$sql=mysql_query("insert into `post` set 
			`status`='0',
			`admin_id`='".$_SESSION['id']."',
			`pagecat`='".$_POST['pgct']."',
			`cat`='".implode(',',$_POST['category'])."',
			`topnews`='".$_POST['topnews']."',
			`exclusive`='".$_POST['exclusive']."',
			`dinersera`='".$_POST['dinersera']."',
			`khoborkholok`='".$_POST['khoborkholok']."',
			`khelarjholok`='".$_POST['khelarjholok']."',
			`lead`='".$_POST['islead']."',
			`lead_text`='".addslashes($_POST['lead'])."',
			`smalltext`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`key`='".addslashes($_POST['key'])."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`author_name`='".addslashes($_POST['author'])."'".$st1."
			,`image`='".$name_1.'.'.$extf."'",$conn);
			
}else{
	$path="../images/uploaded/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' "));
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
			$st=",`image`='".$name_1.'.'.$extf."'";
		
		}
		
		if($_FILES['auimage']['name']!=''){
		
		$path1="../images/uploaded/author/";
		$name1=time().$_FILES['auimage']['name'];
		
		@move_uploaded_file($_FILES['auimage']['tmp_name'],$path1.$name1);
		$im1=getimagesize($path1.$name1);
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name_2=str_replace('.'.$extf1,'',$name1);
		
		if($im1[1]!=100 || $im1[0]!=75){		
		$image = new Image($path1.$name1);
		$image->resize(100,75,'crop');	
		$image->save($name_2,$path1,$extf1);
		}
		$st1=",`author_image`='".$name_2.'.'.$extf1."'";
	}
			$sql=mysql_query("update `post` set 
			`pagecat`='".$_POST['pgct']."',
			`cat`='".implode(',',$_POST['category'])."',
			`topnews`='".$_POST['topnews']."',
			`exclusive`='".$_POST['exclusive']."',
			`dinersera`='".$_POST['dinersera']."',
			`khoborkholok`='".$_POST['khoborkholok']."',
			`khelarjholok`='".$_POST['khelarjholok']."',
			`lead`='".$_POST['islead']."',
			`lead_text`='".addslashes($_POST['lead'])."',
			`smalltext`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`key`='".addslashes($_POST['key'])."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`author_name`='".addslashes($_POST['author'])."'
			".$st.$st1." where `id`='".$_REQUEST['id']."' ") ;
	}
	echo "<script>window.location.href='postlist.php';</script>";
}
}else{
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
	
if($_FILES['image']['name']!=''){	
	$path="../images/uploaded/";
	$name=time().str_replace(' ', '',$_FILES['image']['name']);
	
	@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
	$im=getimagesize($path.$name);
	
	$ext=explode('.', str_replace(' ', '',$name));
	$extf=end($ext);
	$name_1=str_replace('.'.$extf,'',str_replace(' ', '',$name));
	
	if($im[1]!=320 || $im[0]!=400){		
	$image = new Image($path.$name);
	$image->resize(400,320,'crop');	
	$image->save($name_1,$path,$extf);
	}
}
	if($_FILES['auimage']['name']!=''){
		
		$path1="../images/uploaded/author/";
		$name1=time().$_FILES['auimage']['name'];
		
		@move_uploaded_file($_FILES['auimage']['tmp_name'],$path1.$name1);
		$im1=getimagesize($path1.$name1);
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name_2=str_replace('.'.$extf1,'',$name1);
		
		if($im1[1]!=100 || $im1[0]!=75){		
		$image = new Image($path1.$name1);
		$image->resize(100,75,'crop');	
		$image->save($name_2,$path1,$extf1);
		}
		
		$st1=",`author_image`='".$name_2.'.'.$extf1."'";
	}
		
			$sql=mysql_query("insert into `post` set 
			`status`='1',
			`admin_id`='".$_SESSION['id']."',
			`pagecat`='".$_POST['pgct']."',
			`cat`='".implode(',',$_POST['category'])."',
			`topnews`='".$_POST['topnews']."',
			`exclusive`='".$_POST['exclusive']."',
			`dinersera`='".$_POST['dinersera']."',
			`khoborkholok`='".$_POST['khoborkholok']."',
			`khelarjholok`='".$_POST['khelarjholok']."',
			`lead`='".$_POST['islead']."',
			`lead_text`='".addslashes($_POST['lead'])."',
			`smalltext`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`key`='".addslashes($_POST['key'])."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`author_name`='".addslashes($_POST['author'])."'".$st1."
			,`image`='".$name_1.'.'.$extf."'",$conn);
		$sqll= mysql_query("select * from `post` order by `id` desc limit 1");
		$sqllf=mysql_fetch_object($sqll);
		$image= 'http://overallratingoftheframeworkresponse.net/dev/test/images/uploaded/'.$sqllf->image;
			
}else{
	$path="../images/uploaded/";
	$st='';
	$qlf=mysql_fetch_object(mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' "));
		if($_FILES['image']['name']!=''){
		@unlink($path.$qlf->image);
		
		$name=time().str_replace(' ', '',$_FILES['image']['name']);
		
		@move_uploaded_file($_FILES['image']['tmp_name'],$path.$name);
		$im=getimagesize($path.$name);
		
		$ext=explode('.', str_replace(' ', '',$name));
		$extf=end($ext);
		$name_1=str_replace('.'.$extf,'',str_replace(' ', '',$name));
		
			if($im[1]!=320 || $im[0]!=400){		
			$image = new Image($path.$name);
			$image->resize(400,320,'crop');	
			$image->save($name_1,$path,$extf);
			}
			$st=",`image`='".$name_1.'.'.$extf."'";
		
		}
		
		if($_FILES['auimage']['name']!=''){
		
		$path1="../images/uploaded/author/";
		$name1=time().$_FILES['auimage']['name'];
		
		@move_uploaded_file($_FILES['auimage']['tmp_name'],$path1.$name1);
		$im1=getimagesize($path1.$name1);
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name_2=str_replace('.'.$extf1,'',$name1);
		
		if($im1[1]!=100 || $im1[0]!=75){		
		$image = new Image($path1.$name1);
		$image->resize(100,75,'crop');	
		$image->save($name_2,$path1,$extf1);
		}
		
		$st1=",`author_image`='".$name_2.'.'.$extf1."'";
	}
	
			
			$sql=mysql_query("update `post` set 
			`status`='1',
			`pagecat`='".$_POST['pgct']."',
			`cat`='".implode(',',$_POST['category'])."',
			`topnews`='".$_POST['topnews']."',
			`exclusive`='".$_POST['exclusive']."',
			`dinersera`='".$_POST['dinersera']."',
			`khoborkholok`='".$_POST['khoborkholok']."',
			`khelarjholok`='".$_POST['khelarjholok']."',
			`lead`='".$_POST['islead']."',
			`lead_text`='".addslashes($_POST['lead'])."',
			`smalltext`='".addslashes($_POST['caption'])."',
			`title`='".addslashes($_POST['title'])."',
			`text`='".addslashes($_POST['text'])."',
			`key`='".addslashes($_POST['key'])."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`author_name`='".addslashes($_POST['author'])."'
			".$st.$st1." where `id`='".$_REQUEST['id']."' ") ;
        $sqll= mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' ");
		$sqllf=mysql_fetch_object($sqll);
		$image= 'http://overallratingoftheframeworkresponse.net/dev/test/images/uploaded/'.$sqllf->image;	
		
			
	}
	
	$to = "bengalupdate@gmail.com";
	$from = $_SESSION['adminemail'];
	$subject = "New Post Added by ".$_SESSION['adminname'];
	$text_body = "";
	$html_body = "<p>
					<table border='0' width='100%' cellpadding='0' cellspacing='0'>
						<tr>
							<td><img src='".$image."'/> </td>
						</tr>
						<tr>
							<td><h1>".$_POST['title']."</h1></td>
						</tr>
						<tr>
							<td>".strip_tags($_POST['text'])."</td>
						</tr>
						<tr>
							<td>Go to admin panel to active post.</td>
						</tr>
					</table>
				  </p>";
	$mail = new Mail($to, $from, $subject, $text_body, $html_body);
	$mail->add_attachment($image);
	$mail->send();
	echo "<script>window.location.href='postlist.php';</script>";
}	
}
?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.jquery.min.js"></script>
<script type="text/javascript" >
tinymce.init({
	plugins: "textcolor",
	toolbar: "sizeselect | bold italic | fontselect |  fontsizeselect | forecolor backcolor",
	theme_advanced_font_sizes: "12px,13px,14px",
    font_size_style_values: "12px,13px,14px", 
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
			$sqll= mysql_query("select * from `post` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />
    <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <?php $cat=explode(',',$sqllf->cat);?>
        <select  class="" id="category" name="category[]" multiple style="width:300px; padding:5px;">            
            <?php $ct=mysql_query("select * from `category` where `pid`='0' ");
			if(mysql_num_rows($ct)>0){
				while($ctf=mysql_fetch_object($ct)){					
				 $cti=mysql_query("select * from `category` where `pid`='".$ctf->id."' ");
			if(mysql_num_rows($cti)>0){?>
			<optgroup><?php echo $ctf->name;?></optgroup>
            <?php 
			while($ctif=mysql_fetch_object($cti)){
			?>
            <option value="<?php echo $ctif->id;?>" <?php if(in_array($ctif->id,$cat)){?> selected<?php }?>><?php echo $ctif->name;?></option>
            <?php }?>
            
			<?php
			}else{?>
			 <option value="<?php echo $ctf->id;?>" <?php if(in_array($ctf->id,$cat)){?> selected<?php }?>><?php echo $ctf->name;?></option>
			<?php			
			}}}?>
            </select> 
        </td>
    </tr> 
     
	<?php if($_SESSION['admintype']=='1'){?>
    <tr>
        <th valign="top">Page Category:</th>
        <td colspan="2">         
        <select  class="" id="pgct" name="pgct"  style="width:300px; padding:5px;">  
            <option value="sports" <?php if($sqllf->pagecat=='sports'){?> selected<?php }?>>sports</option>
			<option value="entertainment" <?php if($sqllf->pagecat=='entertainment'){?> selected<?php }?>>entertainment</option>
            <option value="rajnity" <?php if($sqllf->pagecat=='rajnity'){?> selected<?php }?>>rajnity</option>
            <option value="bangalikothai" <?php if($sqllf->pagecat=='bangalikothai'){?> selected<?php }?>>bangali kothai</option>
         <!--<option value="protibondi" <?php if($sqllf->pagecat=='protibondi'){?> selected<?php }?>> protibondir duniya</option>  -->
            <option value="offbeat" <?php if($sqllf->pagecat=='offbeat'){?> selected<?php }?>>offbeat</option>
            <option value="general" <?php if($sqllf->pagecat=='general'){?> selected<?php }?>>general</option>				
         </select> 
        </td>
    </tr> 
	<tr>
        <th valign="top">Other Features:</th>
        <td colspan="2"> 
        <strong>Topnews( ei muhurte)</strong> &nbsp; <input type="checkbox" value="1" name="topnews" <?php if($sqllf->topnews==1){?>checked<?php }?>  />&nbsp;
        <div class="clear" style="height:10px;"></div>
                <strong>Exclusive(Special section)</strong> &nbsp; <input type="checkbox" value="1" name="exclusive" <?php if($sqllf->exclusive==1){?>checked<?php }?>  />&nbsp;        
        <div class="clear" style="height:10px;"></div>
        <strong>Dinersera</strong> &nbsp; <input type="checkbox" value="1" name="dinersera" <?php if($sqllf->dinersera==1){?>checked<?php }?> />&nbsp;
         <div class="clear" style="height:10px;"></div>
        <!--<strong>Khoborkholok(2nd video)</strong> &nbsp; <input type="checkbox" value="1" name="khoborkholok" <?php if($sqllf->khoborkholok==1){?>checked<?php }?> />&nbsp;
        <div class="clear" style="height:10px;"></div>
        <strong>Khelar Jolok(3rd video)</strong> &nbsp; <input type="checkbox" value="1" name="khelarjholok" <?php if($sqllf->khelarjholok==1){?>checked<?php }?> />&nbsp;
        <div class="clear" style="height:10px;"></div>-->
		<strong>Lead </strong> &nbsp; <input type="checkbox" value="1" name="islead" <?php if($sqllf->lead==1){?>checked<?php }?> />&nbsp;
        <div class="clear" style="height:10px;"></div>        
        </td>
    </tr>
	<?php } ?>
    <tr>
        <th valign="top">Lead Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="lead"><?php echo $sqllf->lead_text;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Small Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="caption"><?php echo $sqllf->smalltext;?></textarea></td>
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
        <th valign="top">Author Image:</th>
         <td><a onclick="viewimg(2)" style="cursor:pointer;">View Image</a> <input type="file" name="auimage" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> width 100px height 75px </div>
        <div class="bubble-right"></div></td>
    </tr>     
              
     <tr>
        <th valign="top">Keyword:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"><?php echo $sqllf->key;?></textarea><br>*Please type in <strong>English</strong> only in this field</td>
        <td></td>
    </tr>    
         
     <!--<tr>
        <th valign="top">Description:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"><?php echo $sqllf->key;?></textarea></td>
        <td></td>
    </tr>-->   
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='postlist.php'" />
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
        <select  class="" id="category" name="category[]" multiple style="width:300px; padding:5px;">            
            <?php $ct=mysql_query("select * from `category` where `pid`='0' ");
			if(mysql_num_rows($ct)>0){
				while($ctf=mysql_fetch_object($ct)){					
				 $cti=mysql_query("select * from `category` where `pid`='".$ctf->id."' ");
			if(mysql_num_rows($cti)>0){?>
			<optgroup><?php echo $ctf->name;?></optgroup>
            <?php 
			while($ctif=mysql_fetch_object($cti)){
			?>
            <option value="<?php echo $ctif->id;?>"><?php echo $ctif->name;?></option>
            <?php }?>
            
			<?php
			}else{?>2
			 <option value="<?php echo $ctf->id;?>"><?php echo $ctf->name;?></option>
			<?php			
			}}}?>
            </select> 
        </td>
    </tr>
	<?php if($_SESSION['admintype']=='1'){?>
    <tr>
        <th valign="top">Page Category:</th>
        <td colspan="2">         
        <select  class="" id="pgct" name="pgct" style="width:300px; padding:5px;">  
            <option value="sports">sports</option>
            <option value="rajnity">rajnity</option>
            <option value="bangalikothai">bangali kothai</option>
            <!--<option value="protibondi"> protibondir duniya</option>-->
			<option value="entertainment">entertainment</option>
            <option value="offbeat">offbeat</option>
            <option value="general">general</option>				 
         </select> 
        </td>
    </tr>
     <tr>
        <th valign="top">Other Features:</th>
        <td colspan="2"> 
        <strong>Topnews( ei muhurte)</strong> &nbsp; <input type="checkbox" value="1" name="topnews" />&nbsp;
        <div class="clear" style="height:10px;"></div>
        <strong>Exclusive(Special section)</strong> &nbsp; <input type="checkbox" value="1" name="exclusive"  />&nbsp;        
        <div class="clear" style="height:10px;"></div>
        <strong>Dinersera</strong> &nbsp; <input type="checkbox" value="1" name="dinersera" />&nbsp;
         <div class="clear" style="height:10px;"></div>
       <!-- <strong>Khoborkholok(2nd video)</strong> &nbsp; <input type="checkbox" value="1" name="khoborkholok" />&nbsp;
        <div class="clear" style="height:10px;"></div>
        <strong>Khelar Jholok(3rd video)</strong> &nbsp; <input type="checkbox" value="1" name="khelarjholok" />&nbsp;
        <div class="clear" style="height:10px;"></div>-->
        <strong>Lead</strong> &nbsp; <input type="checkbox" value="1" name="islead" />&nbsp;
        <div class="clear" style="height:10px;"></div>
        </td>
    </tr> 
	<?php }?>
    <tr>
        <th valign="top">Lead Text:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="lead"></textarea></td>
        <td></td>
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
        <th valign="top">Author Image:</th>
         <td> <input type="file" name="auimage" class="file_1" /></td>
        <td><div class="bubble-left"></div>
        <div class="bubble-inner"> width 100px height 75px </div>
        <div class="bubble-right"></div></td>
    </tr>
    <tr>
        <th valign="top">Keyword:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"></textarea><br>*Please type in <strong>English</strong> only in this field</td>
        <td></td>
    </tr>

    <!--<tr>
        <th valign="top">Description:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"></textarea></td>
        <td></td>
    </tr>-->  
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='postlist.php'" />
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
<img  src="<?php echo $siteurl.'images/uploaded/'.$sqllf->image;?>" />
</div>
<div id="img2" style=" padding:10px; display:none; position:fixed; top:20%; left:25%; z-index:1000; background:#ccc;">
<?php if($sqllf->author_image!=''){?>
<img  src="<?php echo $siteurl.'images/uploaded/author/'.$sqllf->author_image;?>" />
<?php }else{echo "Author Image Not Found";}?>
</div>