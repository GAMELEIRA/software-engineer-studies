programa
{
    inteiro diasContrato
    real quilometrosPercorridos, valorDiaria, taxaPorKm, valorTotalDiaria, valorTotalTaxa, valorTotal
    cadeia modeloCarro

    funcao inicio()
    {
       
        escreva("Informe o modelo do carro: ")
        leia(modeloCarro)

        escreva("Informe a quantidade de km's percorridos pelo carro: ")
        leia(quilometrosPercorridos)

        escreva("Informe o valor da diária do carro: ")
        leia(valorDiaria)

        escreva("Informe a quantidade de dias do contrato: ")
        leia(diasContrato)
      
        taxaPorKm = 0.20
        valorTotalDiaria = valorDiaria * diasContrato
        valorTotalTaxa = quilometrosPercorridos * taxaPorKm
        valorTotal = valorTotalDiaria + valorTotalTaxa

        escreva("\nO modelo do carro: ", modeloCarro, " custará um total de: R$", valorTotal, "\n")
    }
}
