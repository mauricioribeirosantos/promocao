<?php
	include('../model/admin-conecta.php');
	include('admin-controller.php');

	$id = $_GET['id'];

	if(removeAdmin($db, $id)) {
		header('Location: ../view/admin-adiciona-usuario.php');
	}