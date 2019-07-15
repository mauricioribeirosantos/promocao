<?php
	include('cabecalho.php');
?>
	
	<h1 class="titulo">cadastrar</h1>
	<div class="container">
		<div class="formulario-cadastro">	
			<form id="formulario" action="../controller/cadastrar.php" method="POST">
				<div class="form-row">
			    	<div class="form-group col-md-6">
			    		<label for="email">E-mail</label>
			    		<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
			    	</div>
			    	<div class="form-group col-md-6">
			      		<label for="senha">Senha</label>
			    		<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
			    	</div>
			  	</div>
				<div class="form-group">
			    	<label for="nome">Nome</label>
			    	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" required>
				</div>

				<div class="form-row">
			    	<div class="form-group col-md-6">
			    		<label for="cpf">CPF</label>
			    		<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
			    	</div>
			    	<div class="form-group col-md-6">
			    		<label for="telefone">Telefone</label>
			    		<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
			    	</div>
			  	</div>

				<div class="form-group">
			    	<label for="endereco">Endereço</label>
			    	<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua" required>
				</div>
				<div class="form-row">
			    	<div class="form-group col-md-6">
			    		<label for="cidade">Cidade</label>
			    		<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade" required>
			    	</div>
			    	<div class="form-group col-md-4">
			    		<label for="estado">Estado</label>
			    		<select name="estado" id="estado" class="form-control">
			        		<option selected>Selecione</option>
			        		<option>SP</option>
			      		</select>
			    	</div>
			    	<div class="form-group col-md-2">
			    		<label for="cep">CEP</label>
			    		<input type="text" class="form-control" name="cep" id="cep" placeholder="Cep" required>
			    	</div>
				</div>
				<button type="submit" class="btn btn-primary" id="botao-cadastrar">Cadastrar</button>
				<a href="promocoes.php" class="btn btn-secondary">Voltar</a>
			</form>
		</div>
		<div class="cadastrado">
			<a class="nav-link" href="#" tabindex="-1" data-toggle="modal" data-target=".bd-example-modal-sm">Já sou cadastrado</a>
			<!--<p><a href="entrar.php">Já sou cadastrado</a></p>-->
		</div>
	</div>

	<!--modal login-->
	<div>
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
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
<?php
	include('rodape.php');
?>