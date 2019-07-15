<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Rádio Principal Promoções</title>
	
	<link rel="stylesheet" type="text/css" href="../../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/comum.css">
</head>
<body>
	<nav class="menu">
		<ul class="nav justify-content-center">
	  		<li class="nav-item">
	    		<a class="nav-link active" href="../../index.php">principal</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="promocoes.php">promoções</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="cadastrar.php">cadastrar</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="#" tabindex="-1" data-toggle="modal" data-target=".bd-example-modal-sm">entrar</a>
	  		</li>
		</ul>
	</nav>


<!--modal de login-->

	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
	    	<div class="modal-content">
	    		<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Login</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
    			</div>
	      		<form class="formulario" action="../controller/direciona-acesso.php" method="POST">
					<div class="form-group">
    					<label for="exampleInputEmail1">E-mail</label>
    					<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Informe o e-mail">
					</div>
					<div class="form-group">
    					<label for="exampleInputPassword1">Senha</label>
   						<input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
					</div>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-success">Entrar</button>
				</form>
	    	</div>
		</div>
	</div>


<!--scripts modal-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>