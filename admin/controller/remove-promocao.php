<?php

	include('../model/admin-conecta.php');
	include('admin-controller.php');

	$promo_id = $_GET['promo'];

	if(excluiPromocao($db, $promo_id)) {
		header('Location: ../view/admin-index.php');
	}
	else {
		echo "Erro";
	}