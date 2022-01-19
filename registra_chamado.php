<?php

	session_start();


	//Trabalhando na montagem do texto.
	$titulo = str_replace('/', '-', $_POST['titulo']);
	$categoria = str_replace('/', '-', $_POST['categoria']);
	$descricao = str_replace('/', '-', $_POST['descricao']);

	//Abrindo o arquivo.
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

	$texto = $_SESSION['id'] . '/' .  $titulo . '/' .  $categoria . '/' . $descricao . PHP_EOL;

	//Escrevendo o texto.
	fwrite($arquivo, $texto);

	//Fechando o texto.
	fclose($arquivo);

	header('Location:abrir_chamado.php');

?>