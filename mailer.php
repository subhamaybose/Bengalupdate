<?php
include ('Mail.php');
if(isset($_POST['submit'])){
	//$url=$_POST['url'];
	$to='sukumar.mitra14march@gmail.com';
	$from=$_POST['em'];
	$phn=$_POST['phn'];
	$text_body="";
	$html_body='hello Admin,<br />
	A user has contct you.  user\'s details folllows <br/><br/>
	<table width="100%" border="0">
	<tr>
	<th width="20%" align="left">Name </th><td>'.$_POST["nm"].'</td>
	</tr>
	<tr>
	<th width="20%"  align="left">Email </th><td>'.$_POST["em"].'</td>
	</tr>
	<tr>
	<th width="20%"  align="left">Phone</th><td>'.$_POST["phn"].'</td>
	</tr>
	<tr>
	<th width="20%"  align="left">Subject</th><td>'.$_POST["sub"].'</td>
	</tr>
	<tr>
	<th width="20%"  align="left">Message</th><td>'.$_POST["msg"].'</td>
	</tr>
	</table><br/><br/>
	Thanks And Regards<br/>
	BENGALUPDATE TEAM
	';
	$subject=$_POST['sub'];

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ".$to." \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	//$m=mail($to, $subject, $html_body, $headers);
	
	$mail = new Mail($to, $from, $subject, $text_body, $html_body);
	$mail->send();
	echo "<script>window.location.href='contact.php';</script>";
	
	/*$url='contact.php';
	if($m){
		header('location: '.$url.'?msg=1');
	}else{
		//header('location: '.$url.'?msg=0');	
		$errorMessage = error_get_last()['message'];
		echo $errorMessage;
		print_r(error_get_last());
	}*/
}else{
	header('location: contact.php');
}
?>