<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			$sql=mysql_query("insert into `loksova` set 
			`kendro`='".$_POST['kendro']."',
			`first`='".$_POST['first']."',
			`second`='".$_POST['second']."',
			`diff`='".$_POST['diff']."',
			`round`='".$_POST['round']."',
			`fol`='".addslashes($_POST['fol'])."',
			`date`='".time()."'");
			
}else{			
			$sql=mysql_query("update `loksova` set 
			`kendro`='".$_POST['kendro']."',
			`first`='".$_POST['first']."',
			`second`='".$_POST['second']."',
			`diff`='".$_POST['diff']."',
			`round`='".$_POST['round']."',
			`fol`='".addslashes($_POST['fol'])."',
			`date`='".time()."'
			 where `id`='".$_REQUEST['id']."' ") ;
	}
	echo "<script>window.location.href='loksovalist.php';</script>";
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
			$sqll= mysql_query("select * from `loksova` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />
   
    <tr>
        <th valign="top">Kendro:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="kendro"><?php echo $sqllf->kendro;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">First:</th>
        <td><textarea rows="" cols="" name="first" class="form-textarea"><?php echo $sqllf->first;?></textarea></td>
        <td></td>
    </tr>         
    
    <tr>
        <th valign="top">Second:</th>
        <td><textarea rows="" cols="" name="second" class="form-textarea"><?php echo $sqllf->second;?></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Diffence:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="diff"><?php echo $sqllf->diff;?></textarea></td>
        <td></td>
    </tr>
     <tr>
        <th valign="top">Round:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="round"><?php echo $sqllf->round;?></textarea></td>
        <td></td>
    </tr>
     <tr>
        <th valign="top">Folafol:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="fol"><?php echo $sqllf->fol;?></textarea></td>
        <td></td>
    </tr>
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='loksovalist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> 
      
    <tr>
        <th valign="top">Kendro:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="kendro"></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">First:</th>
        <td><textarea rows="" cols="" name="first" class="form-textarea"></textarea></td>
        <td></td>
    </tr>         
    
    <tr>
        <th valign="top">Second:</th>
        <td><textarea rows="" cols="" name="second" class="form-textarea"></textarea></td>
        <td></td>
    </tr>  
    <tr>
        <th valign="top">Diffence:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="diff"></textarea></td>
        <td></td>
    </tr>
     <tr>
        <th valign="top">Round:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="round"></textarea></td>
        <td></td>
    </tr>
     <tr>
        <th valign="top">Folafol:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="fol"></textarea></td>
        <td></td>
    </tr>

    
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='loksovalist.php'" />
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