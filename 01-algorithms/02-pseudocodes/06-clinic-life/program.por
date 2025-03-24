programa
{
	
	cadeia nome
	inteiro valorDiaria
	inteiro quantidadeDiasInternado
	real valorTotalMedicamentos
	real totalDespesaHospitalar
	
	funcao inicio() {
		solicitarNome()
		solicitarValorDiaria()
		solicitarQuantidadeDiasInternado()
		solicitarValorTotalMedicamentos()
		calculartotalDespesaHospitalar()
		mostrarDespesas()
	}

	funcao solicitarNome() {
		escreva("Informe o nome do paciente: \n")
		leia(nome)
	}

	funcao solicitarValorDiaria() {
		escreva("Informe o valor da diaria: \n")
		leia(valorDiaria)
	}

	funcao solicitarQuantidadeDiasInternado() {
		escreva("Informe a quantidade de dias internado: \n")
		leia(quantidadeDiasInternado)
	}

	funcao solicitarValorTotalMedicamentos() {
		escreva("Informe o valor total gasto em medicamentos: \n")
		leia(valorTotalMedicamentos)
	}

	funcao calculartotalDespesaHospitalar() {
		totalDespesaHospitalar = (valorDiaria * quantidadeDiasInternado) + valorTotalMedicamentos		 
	}

	funcao mostrarDespesas() {
		escreva(nome + " sua despesa hospitalar é de: \n" + totalDespesaHospitalar)	
	}

	
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 314; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */