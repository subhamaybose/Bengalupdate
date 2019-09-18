<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			 $sql=mysql_query("insert into `video` set 
			`title`='".$_POST['title']."',
			`text`='".$_POST['text']."',
			`cat`='".$_POST['cat']."',
			`date`='".date("Y-m-d",time())."',
			`now`='".time()."',
			`status`='0'",$conn)or die(mysql_error());
}else{
			$sql=mysql_query("update `video` set 
			`title`='".$_POST['title']."',
			`text`='".$_POST['text']."',
			`cat`='".$_POST['cat']."',
			`date`='".date("Y-m-d",time())."',
			`now`='".time()."'
			where `id`='".$_POST['id']."'",$conn);
}
			echo "<script>window.location.href='videolist.php';</script>";
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add  Edit Text </h1></div>


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
			<div class="step-dark-left"><a href="">Add  Edit Video </a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php if(isset($_REQUEST['id'])&&$_REQUEST['id']!=''){
			$sqll= mysql_query("select * from `video` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<input type="hidden" name="update" value="update" />
        <input type="hidden" name="id" value="<?php echo $sqllf->id;?>" />
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <select  class="" id="cat" name="cat"  style="width:300px; padding:5px;">  
            <option value="sports" <?php if($sqllf->cat=='sports'){?> selected<?php }?>>sports</option>
			<option value="entertainment" <?php if($sqllf->cat=='entertainment'){?> selected<?php }?>>entertainment</option>
            <option value="rajnity" <?php if($sqllf->cat=='rajnity'){?> selected<?php }?>>rajnity</option>
            <option value="offbeat" <?php if($sqllf->cat=='offbeat'){?> selected<?php }?>>offbeat</option>
            <option value="general" <?php if($sqllf->cat=='general'){?> selected<?php }?>>general</option>				 			
			<option value="prasongik" <?php if($sqllf->cat=='prasonik'){?> selected<?php }?>>Prasongik</option>
         </select> 
        </td>
    </tr>
	<tr>
			<th valign="top">Title</th>
			<td>
			<textarea rows="" cols="" class="form-textarea" name="title"><?php echo $sqllf->title;?></textarea>
            </td>
			<td></td>
	</tr>
	<tr>
		<th valign="top">Text</th>
		<td>
		<textarea rows="" cols="" class="form-textarea" name="text"><?php echo $sqllf->text;?></textarea>
		</td>
		<td></td>
	</tr>
		
             
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='videolist.php'" />
		</td>
		<td></td>
	</tr>
	</table>
     </form >
		<?php }else{?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
        <th valign="top">Category:</th>
        <td colspan="2">         
        <select  class="" id="cat" name="cat" style="width:300px; padding:5px;">  
            <option value="sports">sports</option>
            <option value="rajnity">rajnity</option>
            <option value="entertainment">entertainment</option>
            <option value="offbeat">offbeat</option>
            <option value="general">general</option>	
            <option value="prasongik">Prasongik</option>				 
         </select> 
        </td>
    </tr>  
        <tr>
			<th valign="top">Title</th>
			<td>
			<textarea rows="" cols="" class="form-textarea" name="title"></textarea>
            </td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Text</th>
			<td>
			<textarea rows="" cols="" class="form-textarea" name="text"></textarea>
            </td>
			<td></td>
		</tr>
		
             
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='videolist.php'" />
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