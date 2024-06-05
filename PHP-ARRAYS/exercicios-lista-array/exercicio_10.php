<?php

// Exercício 10 da lista de lógica de programação

$numeros = array();

for ($numero = 0; $numero <= 4; $numero++) {
  $numeros[$numero] = readline("Digite um número: ");
}

echo "Array invertido:" . PHP_EOL;
for ($numero = 4; $numero >= 0; $numero--) {
  echo $numeros[$numero] . " ";
}

