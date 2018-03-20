<?php
require_once('config.php'); 
require_once("include/Sessions.php");
require_once("include/DB.php");
require_once("include/Functions.php");

$page_type = $_POST['page_type'];
include('global_variables.php'); 

if($page_type == 'deleteperson'){
	
	$SearchId=$_POST['id'];
	$Query = "DELETE FROM salesdata WHERE id = '$SearchId'";
	$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		//move_uploaded_file($_FILES["Image"]['tmp_name'], $Target);
		$_SESSION["SuccessMessage"] = " Person Deleted Successfully.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Success", "msg" => $_SESSION["SuccessMessage"]);
		
	}
	else{
		$_SESSION["ErrorMessage"] =  "Post Failed to Delete.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Error", "msg" => $_SESSION["ErrorMessage"]);
	}
}

if($page_type == 'agentlist'){
	
	$SearchId=$_POST['id'];
	$Query = "DELETE FROM $table_name WHERE id = '$SearchId'";
	$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		//move_uploaded_file($_FILES["Image"]['tmp_name'], $Target);
		$_SESSION["SuccessMessage"] = " Person Deleted Successfully.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Success", "msg" => $_SESSION["SuccessMessage"]);
		
	}
	else{
		$_SESSION["ErrorMessage"] =  "Post Failed to Delete.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Error", "msg" => $_SESSION["ErrorMessage"]);
	}
}

if($page_type == 'leadlist'){
	
	$SearchId=$_POST['id'];
	$Query = "DELETE FROM $table_name WHERE id = '$SearchId'";
	$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		//move_uploaded_file($_FILES["Image"]['tmp_name'], $Target);
		$_SESSION["SuccessMessage"] = " Person Deleted Successfully.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Success", "msg" => $_SESSION["SuccessMessage"]);
		
	}
	else{
		$_SESSION["ErrorMessage"] =  "Post Failed to Delete.. ";
		//Redirect_to("dashboard.php");				
		$success = array("status" => "Error", "msg" => $_SESSION["ErrorMessage"]);
	}
}
echo json_encode($success);
?>