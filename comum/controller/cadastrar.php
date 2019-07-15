<?php

	include('../model/conecta.php');
	include('cadastra-controller.php');
	
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];
	$cep = $_POST["cep"];

	if(!buscaCadastro($db, $cpf)){

		adicionaCadastro($db, $email, $senha, $nome, $cpf, $telefone, $endereco, $cidade, $estado, $cep);
		header('Location: ../view/promocoes.php');
	}
	else {
		echo "O cadastro informado já existe";
	}

?>