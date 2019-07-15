<?php

	include('../model/conecta.php');



	function buscaAdministrador($db, $email, $senha) {
		$query = "SELECT * FROM administrador WHERE email_admin = '{$email}' AND senha_admin = '{$senha}'";
		$resultado = mysqli_query($db, $query);

		if(mysqli_num_rows($resultado) > 0) {
			$row = mysqli_fetch_assoc($resultado);
			$nome = $row['nome_admin'];
			return $nome;
		}
		else {
			return 0;
		}
	}


	function buscaUsuario($db, $email, $senha) {
		$query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
		$resultado = mysqli_query($db, $query);

		if(mysqli_num_rows($resultado) > 0) {
			$row = mysqli_fetch_assoc($resultado);
			$id = $row['id'];
			return $id;
		}
		else {
			return 0;
		}
	}