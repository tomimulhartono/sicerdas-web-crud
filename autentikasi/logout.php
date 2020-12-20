<?php 
	session_start();
	session_destroy();
	header("location:../autentikasi/login.php");
?>