<?php
	
	function listaPromocoes($db) {
		$promocoes = array();
		$query = mysqli_query($db, "SELECT promo_id, promo_nome, promo_resposta FROM promocao");
		while($promocao = mysqli_fetch_assoc($query)){
			array_push($promocoes, $promocao);
		}
		return $promocoes;
	}

	function buscaPromocao($db, $id) {
		$query = "SELECT * FROM promocao WHERE promo_id = '{$id}'";
		$resultado = mysqli_query($db, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function adicionaPromocao($db, $promo_nome, $promo_resposta, $promo_descricao) {
		$query = $db->prepare("INSERT INTO promocao (promo_nome, promo_resposta, promo_descricao) VALUES (?,?,?)");
		$query->bind_param("sss", $promo_nome, $promo_resposta, $promo_descricao);
		$query->execute();
	}

	function excluiPromocao($db, $promo_id) {
		$query = "DELETE FROM promocao WHERE promo_id = '{$promo_id}'";
		return mysqli_query($db, $query);
	}

	function alteraPromocao($db, $nome, $resposta, $descricao, $id) {
		$query = "UPDATE promocao SET promo_nome = '{$nome}', promo_resposta = '{$resposta}', promo_descricao = '{$descricao}' WHERE promo_id = {$id}";
		return mysqli_query($db, $query);
	}

	function listaInscritos($db, $promoId) {
		$usuarios = array();
		$query = mysqli_query($db, "SELECT u.id, u.email, u.nome, u.cidade FROM usuario AS u INNER JOIN promo_cadastro AS pc ON pc.promo_id = {$promoId} WHERE pc.promo_cadastro = u.id");
		while($usuario = mysqli_fetch_assoc($query)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function adicionaUsuario($db, $email, $senha, $nome) {
		$query = $db->prepare("INSERT INTO administrador (email_admin, senha_admin, nome_admin) VALUES (?,?,?)");
		$query->bind_param("sss", $email, $senha, $nome);
		$query->execute();
	}

	function listaAdministradores($db) {
		$administradores = array();
		$query = mysqli_query($db, "SELECT * FROM administrador");
		while($administrador = mysqli_fetch_assoc($query)){
			array_push($administradores, $administrador);
		}
		return $administradores;
	}

	function buscaAdmin($db, $id) {
		$query = "SELECT * FROM administrador WHERE id_admin = {$id}";
		$resultado = mysqli_query($db, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraAdmin($db, $id, $email, $senha, $nome) {
		$query = "UPDATE administrador SET email_admin = '{$email}', senha_admin = '{$senha}', nome_admin = '{$nome}' WHERE id_admin = {$id}";
		return mysqli_query($db, $query);
	}

	function removeAdmin($db, $id) {
		$query = "DELETE FROM administrador WHERE id_admin = {$id}";
		return mysqli_query($db, $query);
	}