<?php

// Exercício 9 da lista de lógica de programação

echo "Digite um número: " . PHP_EOL;
$numero = fgets(STDIN);

$numeroPrimo = true;

for ($divisor = 2; $divisor <= $numero - 1; $divisor++) {
    if ($numero % $divisor === 0) {
        $numeroPrimo = false;
        break;
    }
}

if ($numero <= 1 || !$numeroPrimo) {
    echo "O número não é primo.";
} else {
    echo "O número é primo.";
}
