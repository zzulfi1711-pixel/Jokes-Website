<?php
	$db_host = "localhost";
	
	// TODO 3: Update db.php with your MySQL account details
	$db_user = "zno031";  
	$db_pwd = "WASDqe0@"; 
	$db_db = "zno031";

	$charset = 'utf8mb4';
	$attr = "mysql:host=$db_host;dbname=$db_db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];
?>