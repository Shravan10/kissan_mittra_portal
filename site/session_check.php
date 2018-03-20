<?php
	if(!isset($_SESSION['unique_id'])){
		header('location:login.php');
	}else { 
		$unique_id = $_SESSION['unique_id'];
	}
?>