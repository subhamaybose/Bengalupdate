<?php
if(isset($_POST['submit'])){
	$url=$_POST['url'];
	$to='bengalupdate@gmail.com';
	$from=$_POST['em'];
	$phn=$_POST['phn'];
	$msg='hello Admin,<br />
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
	$sub=$_POST['sub'];

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ".$to." \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$m=mail($to, $sub, $msg, $headers);
	if($m){
		header('location: '.$url.'?msg=1');
		}else{
		header('location: '.$url.'?msg=0');	
	}
}/*else{
	header('location: contact.php');
}*/

?>