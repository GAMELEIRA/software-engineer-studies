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
?>