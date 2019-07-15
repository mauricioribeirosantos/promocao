<?php
	include('../model/admin-conecta.php');
	include('admin-controller.php');

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];

	echo "<br>email: ".$email;
	echo "<br>email: ".$senha;
	echo "<br>email: ".$nome;

	adicionaUsuario($db, $email, $senha, $nome);
	header('Location: ../view/admin-adiciona-usuario.php');

?>

