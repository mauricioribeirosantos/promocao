<?php

	include('../model/admin-conecta.php');
	include('admin-controller.php');

	$titulo = $_POST['titulo'];
	$resposta = $_POST['resposta'];
	$descricao = $_POST['descricao'];

	adicionaPromocao($db, $titulo, $resposta, $descricao);
	header('Location: ../view/admin-index.php');

