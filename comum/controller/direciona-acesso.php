<?php

	include('../model/conecta.php');
	include('acesso-controller.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(buscaUsuario($db, $email, $senha) != 0) {
		session_start();
		$_SESSION['id'] = buscaUsuario($db, $email, $senha);
		echo "Acesso Permitido ".$_session['nome'];
		header('Location: ../../usuario/view/usuario-index.php');
	}
	else {
		if(buscaAdministrador($db, $email, $senha) != "0"){
			session_start();
			$_SESSION['nome'] = buscaAdministrador($db, $email, $senha);
			echo "Acesso permitido ".$_session['nome'];
			header('Location: ../../admin/view/admin-index.php');
		}
		else{
			header('Location: ../../comum/view/promocoes.php');
		}
	}