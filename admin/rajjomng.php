<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			$sql=mysql_query("insert into `rajjo` set 
			`state`='".$_POST['kendro']."',
			`dol`='".$_POST['dol']."',
			`_2009`='".$_POST['first']."',
			`_2014`='".$_POST['second']."',
			`date`='".time()."'");
			
}else{			
			$sql=mysql_query("update `rajjo` set 
			`state`='".$_POST['kendro']."',
			`dol`='".$_POST['dol']."',
			`_2009`='".$_POST['first']."',
			`_2014`='".$_POST['second']."',
			`date`='".time()."'
			 where `id`='".$_REQUEST['id']."' ") ;
	}
	echo "<script>window.location.href='rajjolist.php';</script>";
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
			$sqll= mysql_query("select * from `rajjo` where `id`='".$_REQUEST['id']."' ");
			
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form" >  
		<input type="hidden" name="update" value="update" />
     <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />
   
    <tr>
        <th valign="top">State:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="kendro"><?php echo $sqllf->state;?></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Dol:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="dol"><?php echo $sqllf->dol;?></textarea></td>
        <td>{ use comma as separator}</td>
    </tr>
    <tr>
        <th valign="top">2009:</th>
        <td><textarea rows="" cols="" name="first" class="form-textarea"><?php echo $sqllf->_2009;?></textarea></td>
       <td>{ use comma as separator}</td>
    </tr>         
    
    <tr>
        <th valign="top">2014:</th>
        <td><textarea rows="" cols="" name="second" class="form-textarea"><?php echo $sqllf->_2014;?></textarea></td>
        <td>{ use comma as separator}</td>
    </tr>  
           
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='rajjolist.php'" />
		</td>
		<td></td>
	</tr>
             </table>
             </form>
	
    
		<?php }else{?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
    <table border="0" cellpadding="0" cellspacing="0"  id="id-form"> 
      
    <tr>
        <th valign="top">State:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="kendro"></textarea></td>
        <td></td>
    </tr>
    <tr>
        <th valign="top">Dol:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="dol"></textarea></td>
        <td>{ use comma as separator}</td>
    </tr>
    <tr>
        <th valign="top">2009:</th>
        <td><textarea rows="" cols="" name="first" class="form-textarea"></textarea></td>
        <td>{ use comma as separator}</td>
    </tr>         
    
    <tr>
        <th valign="top">2014:</th>
        <td><textarea rows="" cols="" name="second" class="form-textarea"></textarea></td>
        <td>{ use comma as separator}</td>
    </tr>  


    
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='rajjolist.php'" />
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