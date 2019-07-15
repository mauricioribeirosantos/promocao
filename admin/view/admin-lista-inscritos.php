<?php
	include('admin-cabecalho.php');
	include('../model/admin-conecta.php');
	include('../controller/admin-controller.php');
	
	$promo = $_GET['promo'];
	$usuarios = listaInscritos($db, $promo);
	$inscritos = count($usuarios);
?>

	<h2 class="titulo">Lista de inscritos na promoção</h2>

	<div class="container">
		<h3>Quantidade total de inscritos: <?=$inscritos?></h3>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">E-mail</th>
					<th scope="col">Nome</th>
					<th scope="col">Cidade</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($usuarios as $usuario){
				?>
				<tr>
					<th scope="row"><?=($usuario['id']);?></th>
					<td><?=utf8_encode($usuario['email']);?></td>
					<td><?=utf8_encode($usuario['nome']);?></td>
					<td><?=utf8_encode($usuario['cidade'])?></td>
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