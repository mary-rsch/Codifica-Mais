<?php

// Exercício 1 da lista de lógica de programação

$numero1;
$numero2;
$resultadoDaSoma;

echo "Digite um primeiro número: ";
$numero1 = fgets(STDIN);

echo "Digite um segundo número: ";
$numero2 = fgets(STDIN);

$resultadoDaSoma = $numero1 + $numero2;

echo "A soma dos números é: ", $resultadoDaSoma;
