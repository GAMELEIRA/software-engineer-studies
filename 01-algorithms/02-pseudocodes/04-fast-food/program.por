programa {
	const inteiro quantidadeLanches = 3
	const inteiro quantidadeBebidas = 3
	cadeia nome
	cadeia lanches[quantidadeLanches] 
	cadeia bebidas[quantidadeBebidas]
	inteiro idLancheEscolhido
	inteiro idBebidaEscolhida
	cadeia lancheEscolhido
	cadeia bebidaEscolhida

	funcao montarTabelaLanches() {
		lanches[0] = "hamburguer"
		lanches[1] = "pizza"
		lanches[2] = "salgado"	
	}

	funcao montarTabelaRefrigerante() {
		bebidas[0] = "refrigerante"
		bebidas[1] = "suco"
		bebidas[2] = "agua"
	}

	funcao solicitarNomeCliente() {
		escreva("Infome seu nome: \n")
		leia(nome)
	}

	funcao solicitarLanche() {
		escreva("Informe o lanche que deseja:\n")
		escreva("0 para hamburguer\n")
		escreva("1 para pizza\n")
		escreva("2 para salgado\n")
		leia(idLancheEscolhido)
		
		se (idLancheEscolhido >= quantidadeLanches ou idLancheEscolhido < 0) {
			escreva("Infome um lanche disponivel\n")
			solicitarLanche()
		}
		
		setarLanche(idLancheEscolhido)
	}

	funcao solicitarBebida() {
		escreva("Informe a bebida que deseja:\n")
		escreva("0 para refrigerante\n")
		escreva("1 para suco\n")
		escreva("2 para agua\n")
		leia(idBebidaEscolhida)
		se (idBebidaEscolhida >= quantidadeBebidas ou idBebidaEscolhida < 0) {
			escreva("Infome uma bebida disponivel\n")
			solicitarBebida()
		}
		setarBebida(idBebidaEscolhida)
	}

	funcao setarLanche(inteiro indice) {
		lancheEscolhido = lanches[indice] 
	}
	
	funcao setarBebida(inteiro indice) {
		bebidaEscolhida = bebidas[indice]
	}

	funcao exibirPedido() {
	    escreva("\n++++++++++++++++++PEDIDO+++++++++++++++++++++\n")
	    escreva("Olá, ", nome, "\n")
	    escreva("Seu pedido com: ", lancheEscolhido, " e ", bebidaEscolhida, " foi solicitado\n")
	    escreva("Aguarde seu pedido...\n")
	    escreva("Agradecemos a preferência!\n")
	    escreva("++++++++++++++++++++FIM++++++++++++++++++++++\n") 
	}
	
	funcao inicio() {
		montarTabelaLanches()
		montarTabelaRefrigerante()
		solicitarNomeCliente()
		solicitarLanche()
		solicitarBebida()
		exibirPedido()
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 986; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */