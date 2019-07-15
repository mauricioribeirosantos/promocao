<?php
	include('admin-cabecalho.php');
	include('../model/admin-conecta.php');
	include('../controller/admin-controller.php');

	$idPromo = $_GET['id'];

	$promocao = buscaPromocao($db, $idPromo);
?>
	<h1>Alterar promoção</h1>

	<div class="container">
		<form action="../controller/altera-promocao.php" method="POST">
  			<div class="form-group">
    			<label for="titulo">Titulo da promoção</label>
    			<input type="text" class="form-control" name="titulo" id="titulo" value="<?=utf8_encode($promocao['promo_nome'])?>">
  			</div>
			<div class="form-group">
			    <label for="resposta">Resposta</label>
			    <input type="text" class="form-control" name="resposta" id="resposta" value="<?=utf8_encode($promocao['promo_resposta'])?>">
			</div>
			<div class="form-group">
    			<label for="descricao">Texto de descrição da promoção</label>
    			<textarea class="form-control" name="descricao" id="descricao" rows="10"><?=utf8_encode($promocao['promo_descricao'])?></textarea>
  			</div>
  			<input type="hidden" name="id" value="<?=$idPromo?>">
  			<a class="btn btn-secondary" href="admin-index.php">Voltar</a>
  			<button type="submit" class="btn btn-warning">Alterar</button>
		</form>
	</div>

<?php
	include('admin-rodape.php');
?>