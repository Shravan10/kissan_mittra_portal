<?php
require_once('config.php'); 
require_once("include/Sessions.php");
require_once("include/DB.php");
require_once("include/Functions.php");

$page_type = $_POST['page_type'];
include('global_variables.php'); 

if($page_type == 'editperson'){
	$id = mysqli_real_escape_string($Connection,$_POST['id']);
	$name = mysqli_real_escape_string($Connection,$_POST["pname"]);
	$email = mysqli_real_escape_string($Connection,$_POST["email"]);
	$housenumber = mysqli_real_escape_string($Connection,$_POST["houseno"]);
	$street = mysqli_real_escape_string($Connection,$_POST["street"]);
	$city = mysqli_real_escape_string($Connection,$_POST["city"]);
	$zipcode = mysqli_real_escape_string($Connection,$_POST["zipcode"]);
	$leadsource = mysqli_real_escape_string($Connection,$_POST["leadsource"]);
	$agent = mysqli_real_escape_string($Connection,$_POST["agent"]);
	$price = mysqli_real_escape_string($Connection,$_POST["price"]);
	$commissions = mysqli_real_escape_string($Connection,$_POST["commissions"]);
	$closingdate = mysqli_real_escape_string($Connection,$_POST["closingdate"]);
	$closingdate = date("Y-m-d", strtotime($closingdate));
	$notes = mysqli_real_escape_string($Connection,$_POST["notes"]);
	$actual = mysqli_real_escape_string($Connection,$_POST['actual']);
	$estimate;

		$q1 = "SELECT value FROM leadsource where name = '$leadsource'";
		$q2 = "SELECT value FROM agent where name = '$agent'";
		$Execute1 = mysqli_query($Connection,$q1);
		$Execute2 = mysqli_query($Connection,$q2);
		$d1 = mysqli_fetch_array($Execute1,MYSQLI_ASSOC);
		$valueofleadsource = $d1['value'];
		$d2 = mysqli_fetch_array($Execute2,MYSQLI_ASSOC);
		$valueofagent = $d2['value'];
	$agc;
	$estimate = floatval($price) * 0.85 * ((floatval($commissions)/100) * 0.93) * floatval($valueofleadsource) * floatval($valueofagent);

	$agc = $price * ($commissions/100);

		$Query = "UPDATE salesdata SET Name = '$name',email = '$email',Houseno ='$housenumber',Street = '$street',City = '$city',Zip = '$zipcode',LeadSource = '$leadsource',Agent = '$agent',ClosingDate = '$closingdate',Price = '$price',CommisionPer = '$commissions',EstimateAmount = '$estimate',AGC = '$agc',Notes ='$notes',ActualComp = '$actual' WHERE id='$id'";
		$Execute = mysqli_query($Connection,$Query);
		if($Execute){
			$_SESSION["SuccessMessage"] =  "Person Information Updated Successfully.. ";
			$success = array("status" => "Success", "msg" => $_SESSION["SuccessMessage"]);
		}
		else{
			$_SESSION["ErrorMessage"] =  "Person Failed to update.. ";
			$success = array("status" => "Error", "msg" => $_SESSION["ErrorMessage"]);
		}
}

if($page_type == 'editagent'){
	$id = mysqli_real_escape_string($Connection,$_POST['id']);
	$name = mysqli_real_escape_string($Connection,$_POST["name"]);
	$value = mysqli_real_escape_string($Connection,$_POST["value"]);
	
	$Query = "UPDATE $table_name SET name = '$name', value = '$value' WHERE id='$id'";
		$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		$success = array("status" => "Success", "msg" => "");
	}
	else{
		$success = array("status" => "Error", "msg" => "");
	}
}

if($page_type == 'editlead'){
	$id = mysqli_real_escape_string($Connection,$_POST['id']);
	$name = mysqli_real_escape_string($Connection,$_POST["name"]);
	$value = mysqli_real_escape_string($Connection,$_POST["value"]);

	$Query = "UPDATE $table_name SET name = '$name', value = '$value' WHERE id='$id'";
		$Execute = mysqli_query($Connection,$Query);
	if($Execute){
		$success = array("status" => "Success", "msg" => "");
	}
	else{
		$success = array("status" => "Error", "msg" => "");
	}
}

if($page_type == 'changepassword'){
	$id = mysqli_real_escape_string($Connection,$_POST['id']);
	$op=mysqli_real_escape_string($Connection, $_POST['oldPassword']);
	$np=mysqli_real_escape_string($Connection, $_POST['newPassword1']);
	$cp=mysqli_real_escape_string($Connection, $_POST['newPassword2']);
	if($np == $cp){
	  $sel = mysqli_query($Connection , "SELECT * FROM adminlogin WHERE id='$id' AND password='$op'");
	  if(mysqli_num_rows($sel) == 1){
		$update =  mysqli_query($Connection, "UPDATE adminlogin SET password='$np' WHERE id='$id' ");
		if($update){
			$success = array("status" => "Success", "msg" => "Password Changed Successfully");
		}else{
			$success = array("status" => "Error", "msg" => "Password Not Changed!");
		}
	  } else {
		$success = array("status" => "Error", "msg" => "Incorrect Old Password!");
	 }
	} else {
		$success = array("status" => "Error", "msg" => "New Password does not match!");
	}
}
echo json_encode($success);	
?>