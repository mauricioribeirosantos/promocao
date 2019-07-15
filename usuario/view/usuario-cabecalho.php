<?php
	session_start();
	if($_SESSION['id'] != "") {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/usuario.css">
	<title>Área de usuário</title>
</head>
<body>

	<div>
		<header>
			<nav class="menu">
				<ul class="nav justify-content-center">
	  				<li class="nav-item">
	    				<a class="nav-link active" href="usuario-index.php">inicio</a>
	  				</li>
	  				<li class="nav-item">
	    				<a class="nav-link" href="usuario-promocoes.php">promoções</a>
	  				</li>
	  				<li class="nav-item">
	    				<a class="nav-link" href="usuario-sair.php">sair</a>
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