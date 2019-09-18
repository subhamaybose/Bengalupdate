<?php 
session_start();
include("../config/config.php");
include("mail.php");
include("includes/logincheck.php");
include("includes/header.php");


if(isset($_POST['subset'])&& $_POST['subset']=='set'){
if(!isset($_POST['update'])){
			$to = $_POST['email'];
			$from = "bengalupdate@gmail.com";
			$subject = "Bengal Update New Guest Creation";
			$text_body = "";
			$html_body = "<p>
							Welcome ".$_POST['name']." to the Bengal Update Reoprter Team. Your first time login credentials is as follows.Please change the password after first Login for security Purpose.</br>
							<table border='0' width='100%' cellpadding='0' cellspacing='0'>
								<tr>
									<th>User Name</th><th>Password</th>
								</tr>
								<tr>
									<th>".$_POST['uname']."</t><td>".$_POST['pass']."</td>
								</tr>
							</table>
						  </p>";
			$mail = new Mail($to, $from, $subject, $text_body, $html_body);
			$mail->send();
			$sql=mysql_query("insert into `admin` set 
			`name`='".$_POST['name']."',
			`uname`='".$_POST['uname']."',
			`password`='".base64_encode($_POST['pass'])."',
			`email`='".$_POST['email']."',
			`contact`='".$_POST['contact']."',
			`type`='2',
			`status`='1'")or die(mysql_error());
			
}else{
//print_r($_POST);die('=== ===');
			$sql=mysql_query("update `admin` set 
			`name`='".$_POST['name']."',
			`uname`='".$_POST['uname']."',
			`password`='".base64_encode($_POST['pass'])."',
			`email`='".$_POST['email']."',
			`contact`='".$_POST['contact']."'
			where `id`='".$_POST['id']."'");
}
			if($_SESSION['admintype']=='1'){
			echo "<script>window.location.href='adminlist.php';</script>";
			} else {
			echo "<script>window.location.href='dashboard.php';</script>";
		    } 
			
			
	}

?>
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add  Edit Admin </h1></div>


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
			<div class="step-dark-left"><a href="">Add  Edit Admin </a></div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
        <?php if(isset($_REQUEST['id'])&&$_REQUEST['id']!=''){
			$sqll= mysql_query("select * from `admin` where `id`='".$_REQUEST['id']."' ");
			$sqllf=mysql_fetch_object($sqll);
			
			?>		
		<form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<input type="hidden" name="update" value="update" />
        <input type="hidden" name="id" value="<?php echo $sqllf->id;?>" />
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
        <th valign="top">Full Name</th>
        <td>
        <input type="text" class="inp-form" name="name" value="<?php echo $sqllf->name;?>"/>
        </td>
        <td></td>
        </tr>
        <tr>
        <th valign="top">Username</th>
        <td>
        <input type="text" class="inp-form" name="uname" value="<?php echo $sqllf->uname;?>" readonly />
        </td>
        <td></td>
        </tr>        
        <tr>
        <th valign="top">Password</th>
        <td>
        <input type="text" class="inp-form" name="pass" value="<?php echo base64_decode($sqllf->password);?>"/>
        </td>
        <td></td>
        </tr>
        <tr>
        <th valign="top">Email</th>
        <td>
        <input type="text" class="inp-form" name="email" value="<?php echo $sqllf->email;?>"/>
        </td>
        <td></td>
        </tr>
        <tr>
        <th valign="top">Contact No.</th>
        <td>
        <input type="text" class="inp-form" name="contact" value="<?php echo $sqllf->contact;?>"/>
        </td>
        <td></td>
        </tr>     
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<?php if($_SESSION['admintype']=='1'){?>
			<input type="button" value="" class="form-back"  onClick="window.location.href='adminlist.php'" />
			<?php } else {?>
			<input type="button" value="" class="form-back"  onClick="window.location.href='dashboard.php'" />
			<?php } ?>
		</td>
		<td></td>
	</tr>
	</table>
     </form >
		<?php }else{?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" >
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
        <th valign="top">Full Name</th>
        <td>
        <input type="text" class="inp-form" name="name" value="" placeholder="FIRSTNAME LASTNAME"/>
        </td>
        <td></td>
        </tr>
		<tr>
        <th valign="top">Username</th>
        <td>
        <input type="text" class="inp-form" name="uname" value=""  placeholder="EMAIL ID" onblur="javascript:getData(this.value);"/>
        </td>
        <td></td>
        </tr>        
        <tr>
        <th valign="top">Password</th>
        <td>
        <input type="text" class="inp-form"  name="pass" value= "guest"/>
        </td>
        <td></td>
        </tr>
        <tr>
        <th valign="top">Email</th>
        <td>
        <input type="text" class="inp-form" name="email" id="email"/>
        </td>
        <td></td>
        </tr>
		<tr>
        <th valign="top">Contact No.</th>
        <td>
        <input type="text" class="inp-form" name="contact"/>
        </td>
        <td></td>
        </tr>
             
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="set" class="form-submit" name="subset" />
			<input type="button" value="" class="form-back"  onClick="window.location.href='adminlist.php'" />
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
<script type="text/javascript">
function getData(value){
	document.getElementById("email").value= value;
}
</script>
<?php 
include("includes/footer.php");
?>