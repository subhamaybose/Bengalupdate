<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			$sql=mysql_query("insert into `our_team` set 
			`name`='".$_POST['name']."',
			`desc`='".$_POST['description']."',
			`status`='0'");
}else{
			$sql=mysql_query("update `our_team` set 
			`name`='".$_POST['name']."',
			`desc`='".$_POST['description']."',
			`status`='0' 
			where `id`=' ".$_POST['id']." ' ");
}
			echo "<script>window.location.href='teamlist.php';</script>";
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Edit Team </h1></div>


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
			<div class="step-dark-left"><a href="">Page</a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php if(isset($_REQUEST['id'])&&$_REQUEST['id']!=''){
			$sqll= mysql_query("select * from `our_team` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<input type="hidden" name="update" value="update" />
        <input type="hidden" name="id" value="<?php echo $sqllf->id;?>" />
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">		<tr>
			<th valign="top">Team Name:</th>
			<td>
            <textarea rows="" cols="" name="name" class="form-textarea"><?php echo $sqllf->name;?></textarea>
            </td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Team Description:</th>
			<td><textarea rows="" cols="" class="form-textarea" name="description"><?php echo $sqllf->desc;?></textarea></td>
			<td></td>
		</tr>
             
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='teamlist.php'" />
		</td>
		<td></td>
	</tr>
	</table>
     </form >
		<?php }else{?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        		<tr>
			<th valign="top">Team Name:</th>
			<td>
            <textarea rows="" cols="" name="name" class="form-textarea"></textarea>
            </td>
			<td></td>
		</tr>
        <tr>
			<th valign="top">Team Description:</th>
			<td><textarea rows="" cols="" class="form-textarea" name="description"></textarea></td>
			<td></td>
		</tr>    
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='teamlist.php'" />
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