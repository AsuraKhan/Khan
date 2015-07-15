<?php
	function __autoload($class_name){
		require_once  "sys/" .$class_name . '.php';
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="3000">
	<title>Php Orientado a Objetos</title>
	<link rel="stylesheet" href="Text//minified/themes/default.min.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bb.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="Text/minified/jquery.sceditor.bbcode.min.js"></script>
</head>
<body>

	<?php 
	$id = $_GET['id'];
       
	$noticia = new Noticia();

	
	$value =  $noticia->find($id);
		echo $value->mensagem;
	
	?>

</body>
</html>