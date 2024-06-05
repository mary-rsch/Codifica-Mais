<?php

// Exercício 6 da lista de lógica de programação

$numeros = array();

echo "Digite 10 números:" . PHP_EOL;
for ($i = 0; $i < 10; $i++) {
  $numero = readline("Número " . ($i + 1) . ": ");
  $numeros[] = $numero; 
}

$menorNumero = $numeros[0];
for ($i = 1; $i < count($numeros); $i++) {
  if ($numeros[$i] < $menorNumero) {
    $menorNumero = $numeros[$i];
  }
}

echo "O menor número digitado é: " . $menorNumero . PHP_EOL;
