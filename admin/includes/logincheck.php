<?php
session_start();
if(!isset($_SESSION['adminlogedin']) ){
header('Location:login.php');		
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>