<?php
	session_start();
	if($_SESSION['nome'] != "") {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/admin.css">
	<title>Área de usuário</title>
</head>
<body>

	<div>
		<header>
			<nav class="menu">
				<ul class="nav justify-content-center">
	  				<li class="nav-item">
	    				<a class="nav-link active" href="admin-index.php">inicio</a>
	  				</li>
	  				<li class="nav-item">
	    				<a class="nav-link" href="admin-adicionar-promocao.php">adicionar promoção</a>
	  				</li>
	  				<li class="nav-item">
	    				<a class="nav-link" href="admin-adiciona-usuario.php">adicionar usuario</a>
	  				</li>
	  				<li class="nav-item">
	    				<a class="nav-link" href="admin-sair.php">sair</a>
	  				</li>
				</ul>
			</nav>
		</header>
	</div>

<?php 
	}
	else {
		header('Location: ../../comum/view/cadastrar.php');
	}
?>