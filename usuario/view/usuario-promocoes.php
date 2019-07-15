<?php
	include('usuario-cabecalho.php');
	include('../model/usuario-conecta.php');
	include('../controller/usuario-controller.php');
?>

	<h1 class="titulo">Promoções que estou participando</h1>

	<div class="container">
		
				<?php
					$promocoes = promocoesCadastradas($db, $_SESSION['id']);
					foreach($promocoes as $promocao){
				?>
						
							<h3><?=utf8_encode($promocao['promo_nome']);?></h3>
							<p><?=$promocao['promo_descricao'];?></p>
						
				<?php
					}//fim foreach
				?>
		
	</div>

<?php
	include('usuario-rodape.php');
?>