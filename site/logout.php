<?php
	session_start(); 
	
	//user id
	if(isset($_SESSION['unique_id'])) {
		unset($_SESSION['unique_id']);
	}
	
	//user name
	if(isset($_SESSION['user_type'])) {
		unset($_SESSION['user_type']);
		
	}
	
	session_destroy();

	header("location:../index.php"); 
?>