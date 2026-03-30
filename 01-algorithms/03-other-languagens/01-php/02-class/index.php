<?php
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
  $completeName = $_POST['complete-name'] ?? '';
  $age = $_POST['age'] ?? '';
  $occupation = $_POST['occupation'] ?? '';
  $salary = $_POST['salary'] ?? '';
  $lastExperience = $_POST['last-experience'] ?? '';
} else {
  $completeName = $_GET['complete-name'] ?? '';
  $age = $_GET['age'] ?? '';
  $occupation = $_GET['occupation'] ?? '';
  $salary = $_GET['salary'] ?? '';
  $lastExperience = $_GET['last-experience'] ?? '';
}

echo ('Seu nome: ' . $completeName . '<br>');
echo ('Sua idade: ' . $age . '<br>');
echo ('Sua profissão: ' . $occupation . '<br>');
echo ('Sua pretensão salarial: ' . $salary . '<br>');
echo ('Sua experiência anterior: ' . $lastExperience . '<br>');

echo ('<h1>Obrigado!</h1>');
echo ('<p>Em breve entraremos em contato com o resultado da sua aplicação para essa vaga.</p>');
echo ('<p>Fique atento aos meios de comunicação dispónibilizados por você.</p>');
echo ('<p>Boa sorte ;)</p>');

// Qual foi o maior desafio ao desenvolver o código?
// R) ESSA FOI A PRIMEIRA VEZ QUE EU USO O PHP, ENTÃO O MAIOR DESAFIO FOI APRENDER A SINTAXE E AS PARTICULARIDADES DA LINGUAGEM. ALÉM DISSO, TIVE QUE PESQUISAR SOBRE COMO LER OS DADOS ENVIADOS PELO FORMULÁRIO, O QUE ME LEVOU A ENTENDER MELHOR O FUNCIONAMENTO DO PHP E COMO INTEGRAR ISSO COM O HTML.
// Como decidiu organizar os dados no formulário?
// R) SEGUI AS ORIENTAÇÕES DO ENUNCIADO, CRIANDO CAMPOS PARA NOME COMPLETO, IDADE, PROFISSÃO, PRETENSÃO SALARIAL E EXPERIÊNCIA ANTERIOR. TENTEI MANTER O FORMULÁRIO SIMPLES E DIRETO, PARA FACILITAR O PREENCHIMENTO PELO USUÁRIO. ALÉM DISSO, USEI O ATRIBUTO "REQUIRED" PARA GARANTIR QUE TODOS OS CAMPOS FOSSEM PREENCHIDOS ANTES DE ENVIAR O FORMULÁRIO.
?>

