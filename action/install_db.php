<?php
include 'db_connection.php';
	$data_base = array();

	$data_base['name'] = db()->query("CREATE DATABASE ".DB_NAME." CHARACTER SET utf8 COLLATE utf8_general_ci");

	$sql_table_ = "CREATE TABLE ".T_NAME." (
					id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					name VARCHAR(100) NOT NULL,
					email VARCHAR(100) NOT NULL,
					password VARCHAR(100) NOT NULL,
					data TEXT(1000) NOT NULL
					)";

	$data_base['table'] = JT_db()->query($sql_table_);

	if ($data_base['name'] && $data_base['table']) {
		header('location:'.BASEURL);
	}
