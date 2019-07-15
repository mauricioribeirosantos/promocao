var botaoCadastrar = document.querySelector("#botao-cadastrar");

	botaoCadastrar.addEventListener("click", function(event){
		//previne que a página seja recarregada
		event.preventDefault();

		var cpf = document.querySelector("#cpf").textContent;

		console.log(cpf);
	})