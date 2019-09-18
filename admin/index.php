<?php
ini_set('session.save_path','/home/bengalup/' . '/tmp');

session_start();
if(!isset($_SESSION['adminlogedin']) ){
header('Location:login.php');		
}else{
header('Location:dashboard.php');		
}
?>