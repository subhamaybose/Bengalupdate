<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
?>

<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Page Listing For SEO</h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		
        <div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				<?php /*?>
				<!--  start message-red -->
				<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Error. <a href="">Please try again.</a></td>
					<td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-red -->
				<?php */?>
				
			
				<!--  start message-green -->
				<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left"> <?php if(isset($_REQUEST['msg'])){if($_REQUEST['msg']=='1'){ echo "Deleted Successfully";}else if($_REQUEST['msg']=='2'){ echo "Status Changed Sussessfully";}else if($_REQUEST['msg']=='3'){  echo"Added Successfully";}}?> <a href="pagemng.php">Add new Page.</a></td>
					<td class="green-right"><a class="close-green" style="visibility:hidden;"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Page Name</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Page Title</a></th>                    
                    <th class="table-header-repeat line-left minwidth-1"><a href="">Page Keyword</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Page Description</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
                <?php $sql=mysql_query("select * from `page_manager` order by `id`");
				if(mysql_num_rows($sql)==0){
				?>
				<tr>					
					<td colspan="5" align="center"> <strong>No Page Added</strong></td>
					
				</tr>
                <?php }else{
					while($sqlf=mysql_fetch_object($sql) ){
					?>
				<tr class="alternate-row">					
					<td><?php echo $sqlf->name;?></td>
					<td><?php echo $sqlf->title;?></td>					
                    <td><?php echo $sqlf->keyword;?></td>					
                    <td><?php echo $sqlf->description;?></td>					
					<td class="options-width">
					<a href="pagemng.php?id=<?php echo $sqlf->id;?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="pageacttion.php?act=delete&id=<?php echo $sqlf->id;?>" title="Delete" class="icon-2 info-tooltip"></a>
					
					</td>
				</tr>
                <?php }}?>
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box" style="display:none;">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<?php /*?><table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table><?php */?>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		
        <!--  end content-table-inner ............................................END  -->
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