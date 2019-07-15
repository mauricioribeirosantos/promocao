<?php
	
	
	function buscaCadastro($db, $cpf){
		$query = "SELECT cpf FROM usuario WHERE cpf = '{$cpf}'";
		$resultado = mysqli_query($db, $query);
		if(mysqli_num_rows($resultado) > 0) {
			return 1;
		}
		else {
			return 0;
		}
	}
	
	/*
	function adicionaCadastro($db, $email, $senha, $nome, $cpf, $telefone, $endereco, $cidade, $estado, $cep){
		$query = "INSERT INTO usuario (email, senha, nome, cpf, telefone, endereco, cidade, estado, cep)
		VALUES ('{$email}', '{$senha}', '{$nome}', '{$cpf}', '{$telefone}', '{$endereco}', '{$cidade}', '{$estado}', '{$cep}')";
		return mysqli_query($db, $query);
	}
	*/


	//previnindo sql injection
	function adicionaCadastro($db, $email, $senha, $nome, $cpf, $telefone, $endereco, $cidade, $estado, $cep){
		$query = $db->prepare("INSERT INTO usuario (email, senha, nome, cpf, telefone, endereco, cidade, estado, cep)
		VALUES (?,?,?,?,?,?,?,?,?)");
		$query->bind_param("sssssssss",$email, $senha,$nome,$cpf,$telefone,$endereco,$cidade,$estado,$cep);
		$query->execute();
	}

	function listaPromocoes($db) {
		$promocoes = array();
		$query = mysqli_query($db, "SELECT * FROM promocao");

		while($promocao = mysqli_fetch_assoc($query)){
			array_push($promocoes, $promocao);
		}
		return $promocoes;
	}