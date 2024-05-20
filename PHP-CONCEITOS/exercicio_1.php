<?php

// Exercício 1 da lista de lógica de programação

$numero1;
$numero2;
$resultadoDaSoma;

echo "Digite um primeiro número: " . PHP_EOL;
$numero1 = fgets(STDIN);

echo "Digite um segundo número: " . PHP_EOL;
$numero2 = fgets(STDIN);

$resultadoDaSoma = $numero1 + $numero2;

echo "A soma dos números é: " . PHP_EOL , $resultadoDaSoma;
