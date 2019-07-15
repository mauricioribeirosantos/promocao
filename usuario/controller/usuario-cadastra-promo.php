<?php

	include('../model/usuario-conecta.php');
	include('usuario-controller.php');
	include('../view/usuario-cabecalho.php');

	$promo_id = $_GET['promo_id'];
	$usuario = $_SESSION['id'];

	echo "Numero promo: ".$promo_id;


	if(!buscaUsuarioPromocao($db, $usuario, $promo_id)){
		if(cadastraPromocao($db, $promo_id, $usuario)) {
			header('Location: ../view/usuario-index.php?cadastro=1');
			//cadastro bem sucedido
		}
		else {
			header('Location: ../view/usuario-index.php?cadastro=2');
			//erro ao cadastrar
		}
	}
	else {
		header('Location: ../view/usuario-index.php?cadastro=3');
		//usuário já é cadastrado
	}


