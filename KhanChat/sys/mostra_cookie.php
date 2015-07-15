<?php 
setcookie("name", "", time() - 3600);
setcookie("email", "", time() - 3600);

echo "Cokie deleted!";

echo "Value is: " . $_COOKIE["nome"] . "<br>";
echo "Value is: " . $_COOKIE["email"]. "<br>";
 ?>
