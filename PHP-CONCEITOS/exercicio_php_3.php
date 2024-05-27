<?php

// Exercício 3 da lista de conceitos PHP

echo "Digite o primeiro número (a): ";
$a = (int) fgets(STDIN); //converte um valor para o tipo inteiro

echo "Digite o segundo número (b): ";
$b = (int) fgets(STDIN);

while ($a > $b) {
    echo "O primeiro número (a) deve ser menor ou igual ao segundo número (b).\n"; //se a condição for verdadeira, o código exibe essa mensagem e solicita os numeros novamente
    echo "Digite o primeiro número (a) novamente: ";
    $a = (int) fgets(STDIN);
    echo "Digite o segundo número (b) novamente: ";
    $b = (int) fgets(STDIN);
}

$soma = 0; //armazena a soma dos números ímpares

for ($numero = $a; $numero <= $b; $numero++) {
    if ($numero % 2 !== 0) {
        $soma += $numero;
    }
}

echo "A soma dos números ímpares no intervalo [$a, $b] é: $soma";

