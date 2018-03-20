<?php
require_once('config.php'); 

$page_type = $_POST['page_type'];
include('global_variables.php'); 

if($page_type == 'add-product'){
	if(isset($_POST['get']) && $_POST['get'] == "category"){
		$category_table = $_POST['value'];
		$sel_category = mysqli_query($con, "SELECT * FROM $category_table");
		if(mysqli_num_rows($sel_category) > 0){
			$option = "<option>--Select Product--</option>";
			while($fet_category = mysqli_fetch_array($sel_category)){
				$option .= "<option value=".$fet_category['id'].">".$fet_category['Crop']."</option>";
			}
			echo $option;
		}
	}
}
?>