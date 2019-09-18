<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){

if(!isset($_POST['update'])){

			$sql=mysql_query("insert into `weather` set 
			`id`='1',
			`max`='".$_POST['max']."',
			`min`='".$_POST['min']."',
			`per`='".$_POST['per']."',
			`date`='".time()."'");

}else{

			$sql=mysql_query("update `sompadokio` set 
			`max`='".$_POST['max']."',
			`min`='".$_POST['min']."',
			`per`='".$_POST['per']."',
			`date`='".time()."'
			where `id`='1' ");

}

			

	}



?>

<!-- start content-outer ........................................................................................................................START -->

<div id="content-outer">

<!-- start content -->

<div id="content">





<div id="page-heading"><h1>Add Edit Weather </h1></div>





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

			<div class="step-dark-left"><a href="">Weather Page</a></div>

			<div class="clear"></div>

		</div>

		<!--  end step-holder -->

	

		<!-- start id-form -->

        <?php 

			$sqll= mysql_query("select * from `weather` where `id`='1' ");

			if(mysql_num_rows($sqll)>0){

			$sqllf=mysql_fetch_object($sqll);

			?>		

		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" >

        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  

		<input type="hidden" name="update" value="update" />

        <input type="hidden" name="id" value="1" />
<tr><th colspan="3" align="center"><?php echo date('l d F, Y',$sqllf->date);?></th></tr>
        <tr>

			<th valign="top">Max Temp:</th>

			<td><textarea rows="" cols="" name="max" class="form-textarea"><?php echo $sqllf->max;?></textarea></td>

			<td></td>

		</tr>

        <tr>
        
        <th valign="top">Min  Temp:</th>
        
        <td><textarea rows="" cols="" class="form-textarea" name="min"><?php echo $sqllf->min;?></textarea></td>
        
        <td></td>
        
        </tr>    
        <tr>
        
        <th valign="top">Humidity :</th>
        
        <td><textarea rows="" cols="" class="form-textarea" name="per"><?php echo $sqllf->per;?></textarea></td>
        
        <td></td>
        
        </tr>    

	<tr>

		<th>&nbsp;</th>

		<td valign="top">

			<input type="submit" value="set" class="form-submit" name="subset" />

			<input type="button" value="" class="form-back"  onClick="window.location.href='dashboard.php'" />

		</td>

		<td></td>

	</tr>

             </table>

             </form>

	

    

		<?php }else{?>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >

              <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  

        <tr>

			<th valign="top">Max Temp:</th>

			<td><textarea rows="" cols="" name="max" class="form-textarea"></textarea></td>

			<td></td>

		</tr>

        		<tr>

			<th valign="top">Min Temp:</th>

			<td><textarea rows="" cols="" class="form-textarea" name="min"></textarea></td>

			<td></td>

		</tr>    
 <tr>
        
        <th valign="top">Humidity :</th>
        
        <td><textarea rows="" cols="" class="form-textarea" name="per"></textarea></td>
        
        <td></td>
        
        </tr>    
	<tr>

		<th>&nbsp;</th>

		<td valign="top">

			<input type="submit" value="set" class="form-submit" name="subset" />

			<input type="button" value="" class="form-back"  onClick="window.location.href='dashboard.php'" />

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