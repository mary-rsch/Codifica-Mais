<?php

// Exercício 8 da lista de lógica de programação

$elementos = array();
$somaDosElementos = 0;

echo"Esse programa lerá 5 números inteiros digitados e depois calculará a soma daqueles que são pares." . PHP_EOL;

for ($numero = 0; $numero <= 4; $numero++) {
  $elementos[$numero] = readline("Digite um número: ");
}

for ($numero = 0; $numero <= 4; $numero++) {
  if ($elementos[$numero] % 2 == 0) {
    $somaDosElementos += $elementos[$numero];
  }
}

echo "Soma dos números pares: " . $somaDosElementos . PHP_EOL;