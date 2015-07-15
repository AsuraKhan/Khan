<?php 
	$nome = $_POST["nome"];
	$email = $_POST["email"];

	setcookie("nome", $nome, time() + (86400 * 30), "/KhanChat");
	setcookie("email", $email, time() + (86400 * 30), "/KhanChat");
 ?>