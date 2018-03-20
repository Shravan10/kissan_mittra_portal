<?php 
	require_once('config.php');
	$username =  mysqli_real_escape_string($con, $_POST['username']);
	$password = md5(mysqli_real_escape_string($con, $_POST['password']));
	$sql = "SELECT * FROM registered_user WHERE (email = '$username' or registered_mobile_no = '$username') AND password ='$password' AND isActive=1 AND isDeleted=0";
	$check = mysqli_query($con, $sql) or mysqli_error($sql);
	if(mysqli_num_rows($check) == 1){
		while($r = mysqli_fetch_array($check)){
			$id = $r['id'];
			$unique_id = $r['unique_id'];
			$user_type = $r['type'];
		}
		$_SESSION['unique_id'] = $unique_id;
		$_SESSION['user_type'] = $user_type;
		$success = array('status'=>"Success","msg"=>"Successfully Logged In!");
		echo json_encode($success);
	} else {
			$sql = mysqli_query($con, "SELECT * FROM registered_user WHERE (email = '$username' or registered_mobile_no = '$username') AND isActive=1 AND isDeleted=0");
			if(mysqli_num_rows($sql) == 1){
				$success = array('status'=>"Error","msg"=>"Wrong Password!");
				echo json_encode($success);
			} else {
				$success = array('status'=>"Error","msg"=>"User not Exist!");
				echo json_encode($success);
			}
	}
?>