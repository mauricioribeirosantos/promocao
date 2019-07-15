<?php
	include('admin-cabecalho.php');
	include('../model/admin-conecta.php');
	include('../controller/admin-controller.php');
?>
	<div class="titulo">
		<h1>admin principal</h1>
		<h2>Lista de promoções ativas</h2>
	</div>

	<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Promoção</th>
				<th scope="col">Nome</th>
				<th scope="col">Resposta</th>
				<th scope="col">Ação</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$promocoes = listaPromocoes($db);
				foreach($promocoes as $promocao){
			?>
			<tr>
				<th scope="row"><?=($promocao['promo_id']);?></th>
				<td><?=utf8_encode($promocao['promo_nome']);?></td>
				<td><?=utf8_encode($promocao['promo_resposta']);?></td>
				<td>
					<a href="admin-lista-inscritos.php?promo=<?=$promocao['promo_id']?>"><button class="btn btn-primary">Inscritos</button></a>
					<a class="btn btn-warning" href="formulario-altera-promocao.php?id=<?=$promocao['promo_id']?>">Alterar</a>
					<a href="../controller/remove-promocao.php?promo=<?=$promocao['promo_id']?>"><button class="btn btn-danger">Excluir</button></a>
				</td>
			</tr>
			<?php
				}//fim foreach
			?>
		</tbody>
	</table>
	<a href="admin-adicionar-promocao.php"><button class="btn btn-success">Adicionar promoção</button></a>
	</div>
	
<?php
	include('admin-rodape.php');
?>