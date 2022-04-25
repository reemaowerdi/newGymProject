<?php
	global $db;
	$server = 'localhost';
	$user = 'root';
	$pass = 'root';
	$dbname = 'doit';
	$db = mysqli_connect($server,$user,$pass,$dbname);
	if(!$db) {
		exit("connection string failed");
	}
?>
