<?php

// Exercício 4 da lista de conceitos PHP

$maiorNumero = null;
$menorNumero = null;

do {
    echo "Digite um número inteiro (ou -1 para parar): ";
    $numero = (int) fgets(STDIN);

    if ($numero === -1) {
        break;
    }

    if ($maiorNumero === null || $numero > $maiorNumero) {
        $maiorNumero = $numero;
    }

    if ($menorNumero === null || $numero < $menorNumero) {
        $menorNumero = $numero;
    }
} while (true);

if ($maiorNumero !== null && $menorNumero !== null) {
    echo "O maior número digitado foi: $maiorNumero\n";
    echo "O menor número digitado foi: $menorNumero\n";
}
