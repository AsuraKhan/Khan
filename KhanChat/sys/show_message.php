<html>
<head>
	<title>php</title>
</head>
<body>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "usuario";

	$con = mysqli_connect($servername, $username, "", $db);

	if($con->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	mysqli_select_db($con,"user_message");

	$sql = "SELECT `Date`, `message`, `name` FROM `user_message` ORDER BY message_id ASC";
	$result = mysqli_query($con,$sql);




	//$row = mysqli_fetch_array($result, MYSQLI_BOTH);
	//printf ("%s (%s)\n", $row["usuario"], $row["message"]);  

	
	while($row = mysqli_fetch_array($result)) {
		echo "<hr>";
		echo  $row['name'] . ":<br />&nbsp;&nbsp;&nbsp;&nbsp;";
		
	    echo  $row['message'] . "<br />";
	    echo  "<p style='font-size:9px'>" . $row['Date'] . "</p>";
	
	}

	mysqli_close($con);

?>
</body>
</html>