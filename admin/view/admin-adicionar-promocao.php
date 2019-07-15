<?php
	include('admin-cabecalho.php');
?>
	<h1 class="titulo">Cadastrar promoção</h1>

	<div class="container">
		<form action="../controller/adiciona-promocao.php" method="POST">
  			<div class="form-group">
    			<label for="titulo">Titulo da promoção</label>
    			<input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" required>
  			</div>
			<div class="form-group">
			    <label for="resposta">Resposta</label>
			    <input type="text" class="form-control" name="resposta" id="resposta" placeholder="Resposta" required>
			</div>
			<div class="form-group">
    			<label for="descricao">Texto de descrição da promoção</label>
    			<textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Descrição da promoção" required></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	</div>

<?php
	include('admin-rodape.php');
?>