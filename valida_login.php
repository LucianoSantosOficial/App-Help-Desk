<?php


	session_start();


	$ususario_autenticado = false;
	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => '124578'),
		array('email' => 'teste@teste.com.br', 'senha' => '1234')
	);


	foreach ($usuarios_app as $user) {

	
		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$ususario_autenticado = true;
		}

			
	}

	if ($ususario_autenticado) {
		echo 'Usuário autenticado';
		$_SESSION['autenticado'] = 'SIM';
		header('Location:home.php');
	} else {
		$_SESSION['autenticado'] = 'NÃO';
		header('Location:index.php?login=erro');
	}

?>