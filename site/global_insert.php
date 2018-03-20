<?php
require_once('config.php'); 

$page_type = $_POST['page_type'];
include('global_variables.php'); 

if($page_type == 'add-product'){
	$productcat = mysqli_real_escape_string($con,$_POST["productcat"]);
	$producttype = mysqli_real_escape_string($con,$_POST["producttype"]);
	$productname = mysqli_real_escape_string($con,$_POST["productname"]);
	$minprice = mysqli_real_escape_string($con,$_POST["minprice"]);
	$maxprice = mysqli_real_escape_string($con,$_POST["maxprice"]);
	$quantity = mysqli_real_escape_string($con,$_POST["quantity"]);
	$Specification = mysqli_real_escape_string($con,$_POST["Specification"]);
	$pi_msg = "";
	$doc = "";
    if(isset($_FILES["product_image"]) && !empty($_FILES['product_image']['name'])){

        $file_name = $_FILES["product_image"]["name"];
        $file_tmp = $_FILES["product_image"]['tmp_name'];

        $ext = explode('.', $file_name); 
        $ext = end($ext);
        $newname = "CS".mt_rand()."_".date('dmYHis').".".$ext;         
        $path_new_upload = '../uploads/product_images/'.$newname;
    	move_uploaded_file($file_tmp, $path_new_upload);
    }

    $insert_product_qry = "INSERT INTO `product_details`(`name`, `min_price`, `max_price`, `quantity`, `specification`, `photo`, `cat_id`, `type`, `createdDate`, `modifiedDate`) VALUES ('$productname', '$minprice', '$maxprice', '$quantity', '$Specification', '$newname', '$productcat', '$producttype', '$dateTime', '$dateTime')";

    $insert_product_run = mysqli_query($con, $insert_product_qry) or die(mysqli_error($con));
    
    $res_json = array("res" => "Success", "msg" => "New Product Uploaded successfully");

}

echo json_encode($res_json);
?>
