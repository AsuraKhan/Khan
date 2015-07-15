<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "usuario";

	$con = mysqli_connect($servername, $username, "", $db);

	if($con->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($con,"user");
	$sql = ("DELETE FROM `user_message` WHERE 1");

   mysqli_query($con, $sql);

 ?>