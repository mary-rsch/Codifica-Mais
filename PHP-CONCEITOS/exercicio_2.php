<?php

// Exercício 2 da lista de lógica de programação

$nota1; 
$nota2; 
$nota3; 
$mediaDasNotas;

echo"Digite sua primeira nota: " . PHP_EOL;
$nota1 = fgets(STDIN);

echo"Digite sua segunda nota: " . PHP_EOL;
$nota2 = fgets(STDIN);

echo"Digite sua terceira nota: " . PHP_EOL;
$nota3 = fgets(STDIN);

$mediaDasNotas = ($nota1+$nota2+$nota3) / 3;
echo "Sua média final é: " . PHP_EOL ,$mediaDasNotas;