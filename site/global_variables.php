<?php
	global $page_name, $page_title, $table_name, $next_page, $addClass, $banner_btn_name;

	$dashboard = $add_product = $agent = $create_agent  = $agent_list  = $lead  = $create_lead  =  $lead_list  = $addClass = "";
	
	/*//Get File Name
	$page_type=$_SERVER['SCRIPT_NAME'];
	$page_type=basename($page_type,".php");*/
	
	if($page_type=='add-product'){
		$page_title = "Add New Product";
		$page_name = "Product";
		$table_name = "product_details";
		$dashboard_active = "active";
	}else{
		$dashboard = "active";
		$page_title = "Dashboard";
		$page_name = "Dashboard";
	}
?>