<?php 

session_start();

include("../config/config.php");

include("includes/logincheck.php");

include("includes/header.php");
date_default_timezone_set("Asia/Kolkata");

?>



<link media="screen" rel="stylesheet" href="css/demo_table.css" />



<style type="text/css">



#post_table th{ height:30px; }

#post_table tr td{ border-right:1px solid #000; padding:5px;}

#post_table tr td:last-child { border-right: none;}

#post_table{ border-bottom:1px solid #000;}



</style>



<script type="text/javascript" charset="utf-8" src="js/jquery/jquery.dataTables.js"></script>



<script type="text/javascript" charset="utf-8">

function aoColumns() {

    var ao = [];

    $("#post_table th").each(function(i) {

        switch (i) {

            case 0 : 

                ao.push({"sWidth": "40px"});

                break;

            case 1 : 

                ao.push({"sWidth": "100px"});

                break;

            case 2 : 

                ao.push({"sWidth": "100px"});

                break;

            case 3: 

                ao.push({"sWidth": "100px"});

                break;

            case 4: 

                ao.push({"sWidth": "130px"});

                break;	

			case 5: 

                ao.push({"sWidth": "130px"});

                break;									

            default :

                ao.push({"sWidth": "100px"});

                break;

        }

    });

    return ao;

}

			$(document).ready(function() {

				$('#post_table').dataTable({  aoColumns: aoColumns()  });

			} );

		</script>



<!-- start content-outer ........................................................................................................................START -->



<div id="content-outer">



<!-- start content -->



<div id="content">







	<!--  start page-heading -->



	<div id="page-heading">



		<h1>Poll Listing</h1>



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



					<td class="green-left"> <?php if(isset($_REQUEST['msg'])){if($_REQUEST['msg']=='1'){ echo "Deleted Successfully";}else if($_REQUEST['msg']=='2'){ echo "Status Changed Sussessfully";}else if($_REQUEST['msg']=='3'){  echo"Added Successfully";}else if($_REQUEST['msg']=='3'){  echo"Added To Archive Successfully";}}?> <a href="pollmng.php">Add new Poll .</a></td>



					<td class="green-right"><a class="close-green" style="visibility:hidden;"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>



				</tr>



				</table>



				</div>



				<!--  end message-green -->



		



		 



				<!--  start product-table ..................................................................................... -->



				<form id="mainform" action="">



				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="post_table">



				<thead>



                <tr>

					<th >id	&nbsp;&nbsp;</th>

					<th >Heading</th>
                    
					<th >Topic</th>
                    
                    <th >Category</th>

                    <th >yes</th>

                    <th > No</th>

                    <th >Can't say</th>    

                    <th >startdate</th>

					<th >status</th>

					<th >Options</th>



				</tr>



                </thead>



               



                <?php $sql=mysql_query("select * from `poll` order by `id` desc");



				if(mysql_num_rows($sql)==0){



				?>



                 <tbody>



				<tr>					



					<td colspan="10" align="center"> <strong>No poll Post Added</strong></td>



					



				</tr>



                </tbody>



                <?php }else{$c=0;?>



				 <tbody>



				<?php



					while($sqlf=mysql_fetch_object($sql) ){$c++;



					?>



                    



				<tr class="alternate-row">					



					<td><?php echo $c;?></td>

					<td><?php echo $sqlf->name;?></td>

					<td><?php echo $sqlf->topic;?></td>

					<td><?php echo $sqlf->cat;?></td>

                    <td><?php echo $sqlf->yes;?></td>

                    

                    <td><?php echo $sqlf->no;?></td>

                    

                    <td><?php echo $sqlf->not_known;?></td>

                    

                    

                    

                   <td> <?php echo date('d F Y',$sqlf->startdate);?></td>

                    

                   				



					<td><a href="pollacttion.php?act=status&id=<?php echo $sqlf->id;?>&st=<?php echo $sqlf->status;?>"><?php echo ($sqlf->status=='0')?'Show':'Hide';?></a></td>





					<td class="options-width">



					<a href="pollmng.php?id=<?php echo $sqlf->id;?>" onclick="return confirm('Are you sure you want to edit this item?');" title="Edit" class="icon-1 info-tooltip"></a>



					<a href="pollacttion.php?act=delete&id=<?php echo $sqlf->id;?>" onclick="return confirm('Are you sure you want to delete this item?');" title="Delete" class="icon-2 info-tooltip"></a>


					
					<a href="pollacttion.php?act=archive&id=<?php echo $sqlf->id;?>" onclick="return confirm('Are you sure you want to send this item to archive?');" title="Archive" class="icon-4 info-tooltip"></a>



					</td>



				</tr>



                



                <?php }?>



				</tbody>



				<?php }?>



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