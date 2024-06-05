<?php

// Exercício 15 da lista de lógica de programação


$numeros = array();
$encontrado = false;

echo "Digite 7 números:" . PHP_EOL;
for ($numero = 0; $numero < 7; $numero++) {
  $numeros[$numero] = readline("Número " . ($numero + 1) . ": ");
}

echo "Digite o número que deseja procurar: ";
$numeroPresente = readline();

for ($numero = 0; $numero < 7; $numero++) {
  if ($numeros[$numero] == $numeroPresente) {
    echo "O número " . $numeroPresente . " está na posição " . ($numero + 1) . PHP_EOL;
    $encontrado = true;
    break;
  }
}

if (!$encontrado) {
  echo "O número " . $numeroPresente . " não foi encontrado na array." . PHP_EOL;
}


