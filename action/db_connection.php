<?php  
	define('DB_NAME', 'jobtest');
	// enter your table name here
	define('T_NAME', 'register');
	// local url
	define('BASEURL', 'http://127.0.0.1/job-test-ajax/');
function db(){
		$JT_server_name = 'localhost';
		$JT_user 		= 'root';
		$JT_password 	= '';
		$conn 			= new mysqli($JT_server_name,$JT_user,$JT_password);
		return $conn->connect_error?false:$conn;	
}

function JT_db(){
		$JT_server_name = 'localhost';
		$JT_user 		= 'root';
		$JT_db_nam 		= DB_NAME;
		$JT_password 	= '';
		$conn 			= new mysqli($JT_server_name,$JT_user,$JT_password,$JT_db_nam);
		return $conn->connect_error?false:$conn;
}