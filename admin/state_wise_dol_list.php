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
		<h1>State Wise Dol Listing</h1>
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
					<td class="green-left"> <?php if(isset($_REQUEST['msg'])){if($_REQUEST['msg']=='1'){ echo "Deleted Successfully";}else if($_REQUEST['msg']=='2'){ echo "Status Changed Sussessfully";}else if($_REQUEST['msg']=='3'){  echo"Added Successfully";}else if($_REQUEST['msg']=='4'){  echo"Added to Archive Successfully";}}?> <a href="state_wise_dol_entry.php">Add new Dol.</a></td>
					<td class="green-right"><a class="close-green" style="visibility:hidden;"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>
				<!--  end message-green -->
		
		 
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a href="">State</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Party</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Party</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Party</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Party</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a href="">status</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
                <?php $sql=mysql_query("SELECT state_wise_dol.id AS ids, state_wise_dol.status AS stat, rajjo.rajjo AS state, d1.dol_name AS dl1, d1.flag AS f1, d2.dol_name AS dl2, d2.flag AS f2, d3.dol_name AS dl3, d3.flag AS f3, d4.dol_name AS dl4, d4.flag AS f4 FROM state_wise_dol LEFT JOIN rajjo ON state_wise_dol.state=rajjo.id LEFT JOIN dol d1 ON state_wise_dol.party_1=d1.id LEFT JOIN dol d2 ON state_wise_dol.party_2=d2.id LEFT JOIN dol d3 ON state_wise_dol.party_3=d3.id LEFT JOIN dol d4 ON state_wise_dol.party_4=d4.id order by state_wise_dol.id desc");
				if(mysql_num_rows($sql)==0){
				?>
				<tr>					
					<td colspan="6" align="center"> <strong>No  Text Added</strong></td>
					
				</tr>
                <?php }else{
					while($sqlf=mysql_fetch_object($sql)){
					?>
				<tr class="alternate-row">					
					<td><?php echo $sqlf->state;?></td>
					<td><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f1;?>" height="25"/>&nbsp;<?php echo $sqlf->dl1;?></td>
					<td><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f2;?>" height="25"/>&nbsp;<?php echo $sqlf->dl2;?></td>
					<td><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f3;?>" height="25"/>&nbsp;<?php echo $sqlf->dl3;?></td>
					<td><img src="<?php echo '../images/uploaded/flag/'.$sqlf->f4;?>" height="25"/>&nbsp;<?php echo $sqlf->dl4;?></td>
                    					
					<td><a href="state_wise_dol_acttion.php?act=status&id=<?php echo $sqlf->ids;?>&st=<?php echo $sqlf->stat;?>"><?php echo ($sqlf->stat=='0')?'Show':'Hide';?></a></td>

					<td class="options-width">
					<a href="state_wise_dol_entry.php?id=<?php echo $sqlf->ids;?>" onclick="return confirm('Are you sure you want to edit this item?');" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="state_wise_dol_acttion.php?act=delete&id=<?php echo $sqlf->ids;?>" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete" class="icon-2 info-tooltip"></a>
					<!--<a href="textscrolacttion.php?act=archive&id=<?php echo $sqlf->id;?>" onclick="return confirm('Are you sure you want to send this item to archive?');" title="Archive" class="icon-4 info-tooltip"></a>-->
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