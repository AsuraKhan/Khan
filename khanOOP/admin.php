<?php
	function __autoload($class_name){
		require_once  "sys/" .$class_name . '.php';
	}
	include "functions.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="3000">
	<title>Php Orientado a Objetos</title>
	<link rel="stylesheet" href="Text//minified/themes/default.min.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bb.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script src="Text/minified/jquery.sceditor.bbcode.min.js"></script>

	<script>
		$(function() {
			
			$("#bb").sceditor({
				plugins: "xhtml",
				style: "Text/minified/jquery.sceditor.default.min.css"
			});
			
			
			$("#submit").click(function(event) {
				var x = $('#bb').val();
				alert(x);
				$("#insert_result").append($("#bb").val());
				$.get("insert_news.php", { 

					noticia_titulo: $("#noticia_titulo").val(),
					categoria: $("#categoria").val(), 
					mensagem: bbcode

				 }, function(data, status){
					$("#insert_result").html(data);
				})
			});
		});
	</script>
</head>
<body>
<h1>Digite a notícia</h1><br>


Titulo da notícia: <input id="noticia_titulo" name="noticia_titulo" type="text"><br><br>
Categoria: <input id="categoria" name="categoria" type="text"><br><br>
Postagem: <br> <textarea id="bb" name="postagem" cols="100" rows="20"></textarea><br><br>
<button id="submit" name="submit" type="button">postar</button>
<br><br>
<div id="insert_result"></div>
<div id="test"></div>
<?php 
	$noticia = new Noticia();
?>
<div id="posts">
<?php foreach ($noticia->findAll() as $value): ?>

	<?php echo "<a href='pagina.php?id=" . $value->id . "'>" . $value->noticia_titulo . "</a>"; ?>

	<div style=" word-wrap: break-word; width: 400px; ">
	<?php echo  limit_words($value->mensagem,20, TRUE, "pagina.php?id=" . $value->id ); ?>	<br><br><br><br>
	</div> 
<?php endforeach; ?>
</div>
</body>
</html>
