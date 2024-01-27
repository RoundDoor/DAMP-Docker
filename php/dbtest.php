<?php

	// code to test database connection
	$servername = "db";
	$username = "root";
	$password = "foobar123";
	$dbname = "Test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection 
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	$conn->close();
?>
