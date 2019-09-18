<?php
//ini_set('session.save_path','/home/bengalup/' . '/tmp');
session_start();
$error='';
//echo base64_decode('U01pdHJhQDIwMTYl');exit;
include("../config/config.php");

if(isset($_POST['login']) && $_POST['login']=='login'){

if($_POST['un']!="" && $_POST['ps']!=""){	

	$pass=base64_encode(trim($_POST['ps']));
	//echo "select * from `admin` where `uname`='".$_POST['un']."' and `password`='".$pass."'";
	$sql=mysql_query("select * from `admin` where `uname`='".$_POST['un']."' and `password`='".$pass."' and `status`='1'");
	//$sql=mysql_query("select * from `admin` where `uname`='".$_POST['un']."' and `password`='".$_POST['ps']."'");
	
	//$sf=mysql_fetch_array($sql);
	//print_r($sf);

	//echo '<br>aaa '.mysql_num_rows(($sql));
	//exit();

	if(mysql_num_rows($sql)>0){
		//echo '11';

		$sf=mysql_fetch_array($sql);

		$_SESSION['adminlogedin']='login';
		$_SESSION['adminname']=$sf['name'];
		$_SESSION['adminun']=$sf['uname'];
		$_SESSION['id']= $sf['id'];	
		$_SESSION['adminemail']=$sf['email'];
		$_SESSION['admintype']=$sf['type'];
		//print_r($_SESSION);

		//die;

		header('Location:dashboard.php');	

		

		}

		else{

		$error='Invalid Username or Password or Inactive Status';	

		}

	}else{

		$error='Invalid Username or Password  Inactive Status';	

		}	

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Bengal Update</title>

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

<!--  jquery core -->

<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>



<!-- Custom jquery scripts -->

<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>



<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->

<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){

$(document).pngFix( );

});

function loginz(){

	if(document.getElementById('un').value==''){

		alert('Please Enter Username ');

		document.getElementById('un').focus();

		return false;

	}

	if(document.getElementById('ps').value==''){

		alert('Please Enter Password ');

		document.getElementById('ps').focus();

		return false;

	}		

}

</script>

</head>

<body id="login-bg"> 

 

<!-- Start: login-holder -->

<div id="login-holder">



	<!-- start logo -->

	<div id="logo-login">

		<a href="indexb.html"><img src="images/logo.png" width="156" height="40" alt="" /></a>

	</div>

	<!-- end logo -->

	

	<div class="clear"></div>

	

	<!--  start loginbox ................................................................................. -->

	<div id="loginbox">

	

	<!--  start login-inner -->

	<div id="login-inner">

    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return loginz();">

		<table border="0" cellpadding="0" cellspacing="0">

		<?php if(isset($error)){?>

        <tr>

    <th colspan="2" align="center"><?php echo $error;?></th>    

		</tr>

        <?php }?>

        <tr>

			<th>Username</th>

			<td><input type="text" name="un" id="un"  class="login-inp" /></td>

		</tr>

		<tr>

			<th>Password</th>

			<td><input type="password" value=""  id="ps" name="ps" onfocus="this.value=''" class="login-inp" /></td>

		</tr>

		<tr>

			<th></th>

			<td><input type="submit" class="submit-login" name="login"  value="login"  /></td>

		</tr>

		</table>

        </form>

	</div>

 	<!--  end login-inner -->

	<div class="clear"></div>

	<a href="forgot_pwd.php" class="forgot-pwd">Forgot Password?</a>

 </div>

 <!--  end loginbox -->

 

	<!--  start forgotbox ................................................................................... -->

	<div id="forgotbox">

		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>

		<!--  start forgot-inner -->

		<div id="forgot-inner">

		<table border="0" cellpadding="0" cellspacing="0">

		<tr>

			<th>Email address:</th>

			<td><input type="text" value=""   class="login-inp" /></td>

		</tr>

		<tr>

			<th> </th>

			<td><input type="button" class="submit-login"  /></td>

		</tr>

		</table>

		</div>

		<!--  end forgot-inner -->

		<div class="clear"></div>

		<a href="" class="back-login">Back to login</a>

	</div>

	<!--  end forgotbox -->



</div>

<!-- End: login-holder -->

</body>

</html>