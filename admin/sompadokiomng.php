<?php 
session_start();
include("../config/config.php");
include("includes/logincheck.php");
include('../class/class.Images.php');
include("includes/header.php");
if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			$path="../images/uploaded/";
			
			$name1=time().$_FILES['sompadokiotopicimg']['name'];	
			@move_uploaded_file($_FILES['sompadokiotopicimg']['tmp_name'],$path.$name1);
			$im1=getimagesize($path.$name1);
			
			$ext1=explode('.', $name1);
			$extf1=end($ext1);
			$name1_1=str_replace('.'.$extf1,'',$name1);
			
			if($im1[0]>400){
			$hr1=floatval($im1[1]/$im1[0]);
			$ht1=400*$hr1;
			$image1 = new Image($path.$name1);
			$image1->resize(400,$ht1,'crop');
			
			$image1->save($name1_1,$path,$extf1);
			}
			$sql=mysql_query("insert into `sompadokio` set 
			`id`='',
			`text`='".$_POST['text']."',
			`topicimg`='".$name1_1.'.'.$extf1."',
			`title`='".$_POST['title']."',
			`author`='".$_POST['author']."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`key`='".addslashes($_POST['key'])."',
			`status`='0'") ;

}else{
		$st='';
		$path="../images/uploaded/";
		
		if($_FILES['sompadokiotopicimg']['name']!=''){
		@unlink($path.$qlf->topicimg);
		$name1=time().$_FILES['sompadokiotopicimg']['name'];	
		@move_uploaded_file($_FILES['sompadokiotopicimg']['tmp_name'],$path.$name1);
		$im1=getimagesize($path.$name1);		
		
		$ext1=explode('.', $name1);
		$extf1=end($ext1);
		$name1_1=str_replace('.'.$extf1,'',$name1);
		
		if($im1[0]>400){
			$hr1=floatval($im1[1]/$im1[0]);
			$ht1=400*$hr1;
		$image1 = new Image($path.$name1);
		$image1->resize(400,$ht1,'crop');
		
		$image1->save($name1_1,$path,$extf1);
		}
		if($st!=''){
		$st.="`topicimg`='".$name1_1.'.'.$extf1."',";
		}else{
		$st="`topicimg`='".$name1_1.'.'.$extf1."',";
		}
	}
			$sql=mysql_query("update `sompadokio` set
			".$st."
			`text`='".addslashes($_POST['text'])."',
			`title`='".addslashes($_POST['title'])."',
			`key`='".addslashes($_POST['key'])."',
			`now`='".time()."',
			`date`='".date("Y-m-d",time())."',
			`author`='".$_POST['author']."' 
			where `id`='".$_REQUEST['id']."' ")or die(mysql_error());

}

	echo "<script>window.location.href='sompadokiolist.php';</script>";		

	}



?>

<!-- start content-outer ........................................................................................................................START -->

<div id="content-outer">

<!-- start content -->

<div id="content">





<div id="page-heading"><h1>Add Edit Sompadokio </h1></div>





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

			<div class="step-dark-left"><a href="">Sompadokio Page</a></div>

			<div class="clear"></div>

		</div>

		<!--  end step-holder -->

	

		<!-- start id-form -->

        <?php 
			if(isset($_REQUEST['id'])){
			$sqll= mysql_query("select * from `sompadokio` where `id`='".$_REQUEST['id']."'");

			$sqllf=mysql_fetch_object($sqll);
		?>		

		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  

		<input type="hidden" name="update" value="update" />

        <input type="hidden" name="id" value="<?php echo  $_REQUEST['id'];?>" />

        <tr>

			<th valign="top">Sompadokio Titile:</th>

			<td><textarea rows="" cols="" name="title" class="form-textarea"><?php echo $sqllf->title;?></textarea></td>

			<td></td>

		</tr>
		<tr>
            <th>Sompadokio Topic Image:</th>
            <td> <a onclick="viewimg(2)" style="cursor:pointer;">View Image</a> &nbsp; <input type="file" name="sompadokiotopicimg" class="file_1" /></td>
            <td><div class="bubble-left"></div>
            <div class="bubble-inner"> width 400px </div>
            <div class="bubble-right"></div></td>
            </tr>

        <tr>
        
        <th valign="top">Sompadokio Description:</th>
        
        <td><textarea rows="" cols="" class="form-textarea1" name="text"><?php echo $sqllf->text;?></textarea></td>
        
        <td></td>
        
        </tr>    
        <tr>
        
        <th valign="top">Author :</th>
        
        <td><textarea rows="" cols="" class="form-textarea" name="author"><?php echo $sqllf->author;?></textarea></td>
        
        <td></td>
        
        </tr>    
<tr>
        <th valign="top">Keyword:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"><?php echo $sqllf->key;?></textarea></td>
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

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

              <table border="0" cellpadding="0" cellspacing="0"  id="id-form">  

        <tr>

			<th valign="top">Sompadokio Titile:</th>

			<td><textarea rows="" cols="" name="title" class="form-textarea"></textarea></td>

			<td></td>

		</tr>
		
		<tr>
            <th>Sompadokio Topic Image:</th>
            <td>  <input type="file" name="sompadokiotopicimg" class="file_1" /></td>
            <td><div class="bubble-left"></div>
            <div class="bubble-inner"> width 400px height 320px</div>
            <div class="bubble-right"></div></td>
        </tr>

        		<tr>

			<th valign="top">Sompadokio Description:</th>

			<td><textarea rows="" cols="" class="form-textarea1" name="text"></textarea></td>

			<td></td>

		</tr>    
 <tr>
        
        <th valign="top">Author :</th>
        
        <td><textarea rows="" cols="" class="form-textarea" name="author"></textarea></td>
        
        <td></td>
        
        </tr>  
        <tr>
        <th valign="top">Keyword:</th>
        <td><textarea rows="" cols="" class="form-textarea" name="key"></textarea></td>
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
<script type="text/javascript">
function viewimg(id){
	$('#img'+id).toggle();
}
</script>
<div id="img1" style=" padding:10px; display:none; position:fixed; top:38%; left:38%; z-index:1000; background:#ccc;">
<img  src="<?php echo $siteurl.'images/uploaded/'.$sqllf->smallimg;?>" />
</div>
<div id="img2" style=" padding:10px; display:none; position:fixed; top:30%; left:30%; z-index:1000; background:#ccc;">
<img  src="<?php echo $siteurl.'../images/uploaded/'.$sqllf->topicimg;?>" />
</div>