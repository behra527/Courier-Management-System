<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "payrollmangment";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if ($conn) {
		
		// echo "Database connected Successfully! <br>";
	} else {

		echo "Database couldn't connect! <br>";


	}




















?>