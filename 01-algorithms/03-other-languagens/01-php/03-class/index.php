<?php

// REALIZEI A SEPARACAO DO QUE É FORMULARIO E DO QUE É LOGICA
// SIMPLIFIQUEI OS ESTILOS USANDO A LIB W3.CSS PARA DEIXAR O CODIGO MAIS LIMPO E FOCADO NA LOGICA
// ADICIONEI VALIDACAO PARA VER SE OS CAMPOS FORAM PREENCHIDOS CORRETAMENTE E SE O VALOR DA COMPRA É VÁLIDO
// USEI FILTER_INPUT PARA SANITIZAR E VALIDAR OS DADOS DE ENTRADA, EVITANDO PROBLEMAS DE SEGURANÇA
// MELHOREI AS MENSAGENS DE ERRO E SUCESSO PARA FICAREM MAIS CLARAS E INFORMATIVAS PARA O USUÁRIO
// ADICIONEI UM LINK PARA VOLTAR AO FORMULÁRIO APÓS EXIBIR O RESULTADO, MELHORANDO A NAVEGAÇÃO DO USUÁRIO
// USEI FUNÇÕES PARA FORMATAR O VALOR DA COMPRA E DO DESCONTO DE FORMA MAIS PROFISSIONAL, USANDO O number_format PARA EXIBIR OS VALORES COM DUAS CASAS DECIMAIS E SEPARADOR DE MILHAR
// MELHOREI A ORGANIZAÇÃO DO CÓDIGO, SEPARANDO A LÓGICA DE PROCESSAMENTO DOS DADOS DA PARTE DE EXIBIÇÃO, O QUE TORNA O CÓDIGO MAIS LIMPO E FÁCIL DE MANTER
// USEI COPILOT E CHAT GTP PARA VALIDAR MEU COD E IDENTIFICAR POSSIVEIS FALHAS. TAMBEM COMO SOLICITEI A CONVERSAO DO CODIGO PARA INGLES PARA MELHORAR A COMPREENSÃO E PRATICAR O INGLES TECNICO QUE JA UTILIZO NO TRABALHO
// SO NAO ENTENDI O 3.2. Utilizar banco de dados relacionais para persistência dos dados. NAO SEI SE NA AULA JA TEVE ALGUMA INTEGRACAO COM BD E ACABEI NAO APLICANDO ISSO NESSE PROJETO.
$message = '';
$panelClass = 'w3-panel w3-blue';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim(filter_input(INPUT_POST, 'clientName', FILTER_UNSAFE_RAW));
    $purchaseValueRaw = filter_input(INPUT_POST, 'purchaseValue', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $paymentMethod = trim(filter_input(INPUT_POST, 'paymentMethod', FILTER_UNSAFE_RAW));

    $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $paymentMethod = htmlspecialchars($paymentMethod, ENT_QUOTES, 'UTF-8');

    $purchaseValue = floatval(str_replace(',', '.', $purchaseValueRaw));
    $discount = 0;
    $message = '';

    if ($purchaseValue <= 0 || $name === '' || $paymentMethod === '') {
        $message = 'Por favor, preencha todos os campos corretamente.';
        $panelClass = 'w3-panel w3-red';
    } else {
        if ($paymentMethod === 'deposito') {
            $discount = $purchaseValue * 0.10;
            $paymentLabel = 'depósito';
        } elseif ($paymentMethod === 'boleto') {
            $discount = $purchaseValue * 0.08;
            $paymentLabel = 'boleto';
        } elseif ($paymentMethod === 'cartaoCredito') {
            $discount = 0;
            $paymentLabel = 'cartão de crédito';
        } else {
            $message = 'Forma de pagamento inválida.';
            $panelClass = 'w3-panel w3-red';
            $paymentLabel = '';
        }

        if ($paymentLabel !== '') {
            $finalValue = $purchaseValue - $discount;
            $message = "Olá $name, sua compra de R$ " . formatMoney($purchaseValue) .
                " com pagamento por $paymentLabel recebeu desconto de R$ " . formatMoney($discount) .
                ". Valor final: R$ " . formatMoney($finalValue) . ".";
            $panelClass = 'w3-panel w3-green';
        }
    }
}

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado Promoção Madeira e Cia</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
      body {font-family: 'Roboto', sans-serif; background: #f5f8fc; margin: 0; padding: 0;}
      .wrap {max-width: 700px; margin: 32px auto; padding: 20px;}
      .result {margin-top: 20px;}
      .actions a {text-decoration:none;}
    </style>
  </head>
  <body class="w3-light-blue">
    <div class="w3-container w3-card-4 w3-round w3-white w3-margin-top wrap">
      <h1 class="w3-center w3-text-blue">Resultado da Promoção</h1>
      <?php if ($message !== ''): ?>
        <div class="w3-panel <?php echo ($panelClass === 'w3-panel w3-green' ? 'w3-pale-green w3-border-green' : 'w3-pale-red w3-border-red'); ?> w3-round">
          <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
        </div>
      <?php else: ?>
        <div class="w3-panel w3-pale-red w3-border-red w3-round">Nenhum dado recebido. Volte e preencha o formulário.</div>
      <?php endif; ?>

      <div class="w3-center actions">
        <a class="w3-button w3-blue w3-round" href="index.html">Voltar ao formulário</a>
      </div>
    </div>
  </body>
</html>
