<?php 
	$name = $_POST['name'];
	$message = $_POST['q'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "usuario";

	$con = mysqli_connect($servername, $username, "", $db);

	if($con->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($con,"user");
	$sql = mysqli_prepare($con, "INSERT INTO `user_message`( `message`, `name`) VALUES (?, ?)");

    mysqli_stmt_bind_param($sql, "ss", $message, $name);


    mysqli_stmt_execute($sql);
 ?>