<?php 

	require 'medoo.php';

	$database = new medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'contentdash',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
	  
		// [optional] Table prefix
		'prefix' => 'dri_',
	]);


	
?>