<?php

// Exercício 11 da lista de lógica de programação

$numeros1 = array();
$numeros2 = array();

echo "Digite 6 elementos para o array:" . PHP_EOL;
for ($elemento = 0; $elemento < 6; $elemento++) {
  $numeros1[$elemento] = readline("Elemento " . ($elemento + 1) . ": ");
}

for ($elemento = 0; $elemento < 6; $elemento++) {
  $numeros2[$elemento] = $numeros1[$elemento] * 2;
}

echo "Array original:" . PHP_EOL;
for ($elemento = 0; $elemento < 6; $elemento++) {
  echo $numeros1[$elemento] . " ";
}

echo PHP_EOL;

echo "Array com o dobro dos elementos:" . PHP_EOL;
for ($elemento = 0; $elemento < 6; $elemento++) {
  echo $numeros2[$elemento] . " ";
}


