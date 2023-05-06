<?php   
	session_start();		
	if (!isset($_SESSION['mobile'])) {
		header('location:login_user.php'); 
	}

	include 'common/header_user.php';
	//include 'common/config_register.php'; 
	
?>




