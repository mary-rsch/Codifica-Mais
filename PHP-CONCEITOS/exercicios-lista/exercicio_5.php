<?php

// Exercício 5 da lista de lógica de programação

echo "Digite um número: ";
$numero = fgets(STDIN);

if ($numero % 2 === 0) {
  echo "O número é par";
} else {
  echo "O número é ímpar";
}

