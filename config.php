<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "dbmyweb";
	$port = 3307;

//Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

//Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//	echo "Connection Successfully: ";

	date_default_timezone_set('Asia/Bangkok');
?>