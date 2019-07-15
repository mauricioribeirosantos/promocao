<?php

	include('../model/admin-conecta.php');
	include('admin-controller.php');


	$titulo = $_POST['titulo'];
	$resposta = $_POST['resposta'];
	$descricao = $_POST['descricao'];
	$id = $_POST['id'];

	if(alteraPromocao($db, $titulo, $resposta, $descricao, $id)) {
		header('Location: ../view/admin-index.php');
	}
