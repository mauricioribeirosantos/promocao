<?php

	function listaPromocoes($db) {
		$promocoes = array();
		$query = mysqli_query($db, "SELECT * FROM promocao");

		while($promocao = mysqli_fetch_assoc($query)){
			array_push($promocoes, $promocao);
		}
		return $promocoes;
	}

	function buscaUsuarioPromocao($db, $idUsuario, $idPromo) {
		$query = "SELECT * FROM promo_cadastro WHERE promo_cadastro = '{$idUsuario}' AND promo_id = '{$idPromo}'";
		$resultado = mysqli_query($db, $query);
		if(mysqli_num_rows($resultado) > 0) {
			return true;
		}
		else {
			return false;
		}
	}

	function cadastraPromocao($db, $idPromo, $idUsuario) {
		$query = $db->prepare("INSERT INTO promo_cadastro (promo_id, promo_cadastro) VALUES (?,?)");
		$query->bind_param("ii", $idPromo, $idUsuario);
		$query->execute();
		return true;
	}

	function promocoesCadastradas($db, $idUsuario) {
		$promocoes = array();
		$query = mysqli_query($db, "SELECT * FROM promocao AS p INNER JOIN promo_cadastro as pc ON p.promo_id = pc.promo_id WHERE pc.promo_cadastro = '{$idUsuario}'");
		while($promocao = mysqli_fetch_assoc($query)) {
			array_push($promocoes, $promocao);
		}
		return $promocoes;
	}

