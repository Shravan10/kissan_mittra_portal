<?php 
session_start();

//Project Config
$scheme = $_SERVER['REQUEST_SCHEME'];
define('PROTOCOL',       $scheme . '://');
//define('PROJECT_FOLDER', basename(dirname(__DIR__))); //For Online
//define('PROJECT_FOLDER', ''); //For Online
define('PROJECT_FOLDER', basename(__DIR__)); //For Local

define('HOST', $_SERVER['HTTP_HOST']);
define('URL',  PROTOCOL . HOST . '/kisaan_mitraV1/' .PROJECT_FOLDER);
define('PATH', $_SERVER['DOCUMENT_ROOT'] . '/' .PROJECT_FOLDER);

define('CSS_PATH', URL.'/css/');
define('SC_PATH', URL.'/js/');

define('SITE_TITLE', 'KISAAN MITRA');
	
//Timezone
date_default_timezone_set('asia/kolkata');
$dateTime = date('Y-m-d H:i:s');
$time=date('H:i:s');

//Database config
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'kisaan_mitra';
$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}


//Page Type
$project_uri = basename($_SERVER['REQUEST_URI']);
$parse_url = parse_url($project_uri);

//Get File Name
$file_path = pathinfo($parse_url['path']);
$page_type = $file_path['filename'];
	
//Get Query String
if(isset($parse_url['query'])){
$file_query_string = $parse_url['query'];
$page_query_string = parse_str($file_query_string);
}
?>