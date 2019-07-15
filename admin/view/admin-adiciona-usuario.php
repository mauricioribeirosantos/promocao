<?php
	include('admin-cabecalho.php');
	include('../controller/admin-controller.php');
	include('../model/admin-conecta.php');
?>

	<h1 class="titulo">Adicionar novo administrador</h1>

<div class="container">
	<!--<div class="col">-->
		<form action="../controller/cadastra-usuario.php" method="POST">
			<div class="row">
				<div class="col">
					<label for="email">E-mail</label>
					<input type="text" class="form-control" name="email" id="email" placeholder="E-mail do usuário" required>
				</div>
				<div class="col">
					<label for="senha">Senha</label>
					<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha do usuário" required>
				</div>
			</div>
			<div class="form-group">
			<div class="row">
				<div class="col">
	    			<label for="nome">Nome</label>
	    			<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do usuário" required>
	  			</div>
			</div>
			</div>
			<div class="row">
				<div class="col">
						<button type="submit" class="btn btn-success">Cadastrar</button>
				</div>
			</div>
		</form>
	<!--</div>-->
</div>

	<!--Lista de administradores-->
	<div class="container">
		<h1 class="titulo">Administradores cadastrados</h2>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nome</th>
					<th scope="col">Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$administradores = listaAdministradores($db);
					foreach($administradores as $administrador){
				?>
				<tr>
					<th scope="row"><?=($administrador['id_admin']);?></th>
					<td><?=utf8_encode($administrador['email_admin']);?></td>
					<td><?=utf8_encode($administrador['nome_admin']);?></td>
					<td>
						<a class="btn btn-warning" href="formulario-altera-admin.php?id=<?=$administrador['id_admin']?>">Alterar</a>
						<a href="../controller/remove-admin.php?id=<?=$administrador['id_admin']?>"><button class="btn btn-danger">Excluir</button></a>
					</td>
				</tr>
				<?php
					}//fim foreach
				?>
			</tbody>
		</table>
	</div>



<?php
	include('admin-rodape.php');
?>