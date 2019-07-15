<?php
	include('cabecalho.php');
	include('../controller/cadastra-controller.php');
	include('../model/conecta.php');
?>
	<h1 class="titulo">Lista de promoções ativas</h1>
	<div class="container">
		<div class="row md-12">
			<?php
				$promocoes = listaPromocoes($db);
				foreach($promocoes as $promocao){
			?>
					<div class="col-md-6">
						<h3><?=utf8_encode($promocao['promo_nome']);?></h3>
						<p><?=$promocao['promo_descricao'];?></p>
						<p><a href="">Participar</a></p>
					</div>
			<?php
				}//fim foreach
			?>
		</div>
	</div>
<?php
	include('rodape.php');
?>