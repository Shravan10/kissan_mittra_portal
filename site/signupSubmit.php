<?php 
require_once('config.php');
$currentDateTime = date('Y-m-d H:i:s');
$insert = false;
$msg= "";
function getIncrement($unique_code){
	preg_match("/(\D+)(\d+)/", $unique_code, $Matches); // Matches the PU and number
	$user_type_code = $Matches[1];

	$NewID = intval($Matches[2]);
	$NewID++;


	$unique_code_length = 12;
	$CurrentLength = strlen($NewID);
	$MissingZeros = $unique_code_length - $CurrentLength;

	for ($i=0; $i<$MissingZeros; $i++){
	$NewID = "0" . $NewID;
	$Result = $user_type_code . $NewID;
	}
	return $Result;
}
$user_type =  mysqli_real_escape_string($con, $_POST['user_type']);
if($user_type == 'Farmer'){
	$first_name =  mysqli_real_escape_string($con, $_POST['first_name']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$mobile_number =  mysqli_real_escape_string($con, $_POST['mobile_number']);
	$aadhar_no =  mysqli_real_escape_string($con, $_POST['aadhar_card_no']);
	$password1 =  mysqli_real_escape_string($con, $_POST['password1']);
	$password2 =  mysqli_real_escape_string($con, $_POST['password2']);
	if($password1 == $password2){
		$password = md5($password1);
	}
	$sel = mysqli_query($con, "SELECT max(unique_id) as maxUniqueCode FROM registered_user WHERE type='Farmer' and isDeleted=0");
	if(mysqli_num_rows($sel) > 0){
		$fetch = mysqli_fetch_array($sel);
		if($fetch['maxUniqueCode'] != NULL){
			$unique_id = getIncrement($fetch['maxUniqueCode']);
		} else {
			$unique_id = 'FA000000000001';
		}
	} else {
		$unique_id = 'FA000000000001';
	}
	$check = mysqli_query($con, "SELECT * FROM registered_user WHERE aadhar_no='".$aadhar_no."' AND isDeleted=0");
	if(mysqli_num_rows($check) > 0){
		$msg = "User Already Exist..";
	} else {
		$insert = mysqli_query($con, "INSERT INTO registered_user (`unique_id`,`first_name`,`aadhar_no`,`email`,`phone_no`,`password`,`modifiedDate`,`createdDate`) VALUES ('$unique_id', '$first_name', '$aadhar_no','$email', '$mobile_number','$password', '$currentDateTime', '$currentDateTime')");
	}
}

if($user_type == 'Vendor'){
	$first_name =  mysqli_real_escape_string($con, $_POST['first_name']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$mobile_number =  mysqli_real_escape_string($con, $_POST['mobile_number']);
	$aadhar_no =  mysqli_real_escape_string($con, $_POST['aadhar_card_no']);
	$password1 =  mysqli_real_escape_string($con, $_POST['password1']);
	$password2 =  mysqli_real_escape_string($con, $_POST['password2']);
	if($password1 == $password2){
		$password = md5($password1);
	}
	$sel = mysqli_query($con, "SELECT max(unique_id) as maxUniqueCode FROM registered_user WHERE type='Vendor' and isDeleted=0");
	if(mysqli_num_rows($sel) > 0){
		$fetch = mysqli_fetch_array($sel);
		if($fetch['maxUniqueCode'] != NULL){
			$unique_id = getIncrement($fetch['maxUniqueCode']);
		} else {
			$unique_id = 'VD000000000001';
		}
	} else {
		$unique_id = 'VD000000000001';
	}
	$check = mysqli_query($con, "SELECT * FROM registered_user WHERE aadhar_no='".$aadhar_no."' AND isDeleted=0");
	if(mysqli_num_rows($check) > 0){
		$msg = "User Already Exist..";
	} else {
		$insert = mysqli_query($con, "INSERT INTO registered_user (`unique_id`,`first_name`,`aadhar_no`,`email`,`phone_no`,`password`,`joining_date`,`modifiedDate`,`createdDate`) VALUES ('$unique_id', '$first_name', '$aadhar_no','$email', '$mobile_number','$password', '$currentDateTime', '$currentDateTime', '$currentDateTime')");
	}
	
}

if($user_type == 'Mentor'){
	$first_name =  mysqli_real_escape_string($con, $_POST['first_name']);
	$email =  mysqli_real_escape_string($con, $_POST['email']);
	$mobile_number =  mysqli_real_escape_string($con, $_POST['mobile_number']);
	$aadhar_no =  mysqli_real_escape_string($con, $_POST['aadhar_card_no']);
	$password1 =  mysqli_real_escape_string($con, $_POST['password1']);
	$password2 =  mysqli_real_escape_string($con, $_POST['password2']);
	if($password1 == $password2){
		$password = md5($password1);
	}
	$sel = mysqli_query($con, "SELECT max(unique_id) as maxUniqueCode FROM registered_user WHERE type='Mentor' and isDeleted=0");
	if(mysqli_num_rows($sel) > 0){
		$fetch = mysqli_fetch_array($sel);
		if($fetch['maxUniqueCode'] != NULL){
			$unique_id = getIncrement($fetch['maxUniqueCode']);
		} else {
			$unique_id = 'MT000000000001';
		}
	} else {
		$unique_id = 'MT000000000001';
	}
	$check = mysqli_query($con, "SELECT * FROM registered_user WHERE aadhar_no='".$aadhar_no."' AND isDeleted=0");
	if(mysqli_num_rows($check) > 0){
		$msg = "User Already Exist..";
	} else {
		$insert = mysqli_query($con, "INSERT INTO registered_user (`unique_id`,`first_name`,`aadhar_no`,`email`,`phone_no`,`password`,`modifiedDate`,`createdDate`) VALUES ('$unique_id', '$first_name', '$aadhar_no','$email', '$mobile_number','$password', '$currentDateTime', '$currentDateTime')");
	}
	

}

if($insert){
	$success = array("status"=>"success", "msg" => "INSERT");
} else {
	$success = array("status"=>"error", "msg" => $msg);
}

echo json_encode($success);
?>