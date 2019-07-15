<?php
	include('../model/admin-conecta.php');
	include('admin-controller.php');

	$id = $_POST['id'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];

	if(alteraAdmin($db, $id, $email, $senha, $nome)) {
		header('Location: ../view/admin-adiciona-usuario.php');
	}