<?php
	include('admin-cabecalho.php');
	include('../model/admin-conecta.php');
	include('../controller/admin-controller.php');

	$idAdmin = $_GET['id'];

	$admin = buscaAdmin($db, $idAdmin);
?>

	<h1 class="titulo">Formulário de alteração de administrador</h1>

	<div class="container">
		<div class="col">
			<form action="../controller/altera-admin.php" method="POST">
				<div class="row">
					<div class="col">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" name="email" id="email" value="<?=$admin['email_admin']?>" required>
					</div>
					<div class="col">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" name="senha" id="senha" placeholder="Nova senha do usuário" required>
					</div>
				</div>
				<div class="form-group">
				<div class="row">
					<div class="col">
		    			<label for="nome">Nome</label>
		    			<input type="text" class="form-control" name="nome" id="nome" value="<?=$admin['nome_admin']?>" required>
		  			</div>
				</div>
				</div>
				<div class="row">
					<div class="col">
						<input type="hidden" name="id" value="<?=$admin['id_admin']?>">
						<button type="submit" class="btn btn-warning">Alterar</button>
					</div>
				</div>
			</form>
		</div>		
	</div>

<?php
	include('admin-rodape.php');
?>