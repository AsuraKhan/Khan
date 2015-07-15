<?php 
	require_once "sys/Noticia.php";

	$noticia = new Noticia();

	$noticia_titulo = $_GET['noticia_titulo'];
	$mensagem = $_GET['mensagem'];

	$noticia->setMensagem($mensagem);
	$noticia->setNoticia_titulo($noticia_titulo);

	if($noticia->insert()){
		echo "Inserido com sucesso";
	}
 ?>