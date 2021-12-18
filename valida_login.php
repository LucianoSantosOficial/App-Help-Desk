<?php

	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => '124578'),
		array('email' => 'teste@teste.com.br', 'senha' => '1234')
	);

	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';

	print_r($_POST);

	echo '</br>';

	echo $_POST['email'];
	echo '</br>';
	echo $_POST['senha'];
	echo '</br>';

	if ($_POST['senha'] == '123456') {
		echo 'Bem vindo ADM!';
	}

?>