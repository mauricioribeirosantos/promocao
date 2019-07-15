<?php
	include('usuario-cabecalho.php');
	include('../model/usuario-conecta.php');
	include('../controller/usuario-controller.php');
?>
	<h1 class="titulo">Lista de promoções ativas</h1>

	<div class="container">

			<div class="lista">
				<?php
					$promocoes = listaPromocoes($db);
					foreach($promocoes as $promocao){
				?>
						<div>
							<h3><?=utf8_encode($promocao['promo_nome']);?></h3>
							<p><?=$promocao['promo_descricao'];?></p>
							<?php 
								$promo_id = $promocao['promo_id']
							?>
							<p><a href="../controller/usuario-cadastra-promo.php?promo_id=<?=$promo_id?>">Participar</a></p>
						</div>
				<?php
					}//fim foreach
				?>
			</div>
	</div>

	<div>
		<div class="modal fade" id="modalSucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalSucesso">Sucesso total!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Yeahhh, Seu cadastro foi efetuado com sucesso
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div>
		<div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalErro">Erro!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Ooooops, Ococrreu algum erro ao cadastrar.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
						</div>
					</div>
				</div>
			</div>
		
	</div>

	<div>
		<div class="modal fade" id="modalCadastrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalCadastrado">Já éh!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							Você já é cadastrado nesta promoção.
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-warning" data-dismiss="modal">Ok</button>
						</div>
					</div>
				</div>
			</div>
		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <?php
		//avisos
    	/*
    	if($_GET['cadastro'] == "") {
    		$cadastro = 3;
    	}
		$cadastro = $_GET['cadastro'];

		
		if($cadastro == 0) {
			?>
			<script>
				$(document).ready(function(){
					$('#modalSucesso').modal('show');
				});
			</script>
			
			<?php
		}
		else {
			if($cadastro == 1) { 
				?>
				<script>
					$(document).ready(function(){
						$('#modalErro').modal('show');
					});
				</script>
				<?php
			}
			else{
				?>
				<script>
					$(document).ready(function(){
						$('#modalCadastrado').modal('show');
					});
				</script>
				<?php
			}
		}
		$cadastro = 3;
	?>
	*/
	if(!empty($_GET['cadastro'])){
		$cadastro = $_GET['cadastro'];
		switch ($cadastro) {
    		case 1:
    			?>
				<script>
					$(document).ready(function(){
						$('#modalSucesso').modal('show');
					});
				</script>
			<?php
				echo "teste";
	        	break;
    		case 2:
	        	?>
				<script>
					$(document).ready(function(){
						$('#modalErro').modal('show');
					});
				</script>
				<?php
	        	break;
    		case 3:
    			?>
	       		<script>
					$(document).ready(function(){
						$('#modalCadastrado').modal('show');
					});
				</script>
				<?php
	        	break;
		}
	}
	?>

<?php
	include('usuario-rodape.php');
?>