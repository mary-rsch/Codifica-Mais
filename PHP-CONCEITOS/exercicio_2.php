<?php

// Exercício 2 da lista de lógica de programação

$nota1; 
$nota2; 
$nota3; 
$mediaDasNotas;

echo"Digite sua primeira nota: ";
$nota1 = fgets(STDIN);

echo"Digite sua segunda nota: ";
$nota2 = fgets(STDIN);

echo"Digite sua terceira nota: ";
$nota3 = fgets(STDIN);

$mediaDasNotas = ($nota1+$nota2+$nota3) / 3;
echo "Sua média final é: ",$mediaDasNotas;