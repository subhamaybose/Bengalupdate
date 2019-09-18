<?php
#ini_set('session.save_path','/home/bengalup/' . '/tmp');
session_start();
unset($_SESSION['adminlogedin']);
session_destroy();
header('Location:login.php');	
?>