<?php

function aplicarDesconto($valorCompra, $percentualDesconto)
{	
return $valorCompra - ($valorCompra * $percentualDesconto/ 100);
}

function calcularDesconto($valorCompra)
{
    if ($valorCompra < 100) {
        return null;
    } elseif ($valorCompra >= 100 && $valorCompra <= 500) {
        return aplicarDesconto($valorCompra, 10);
    } else {
        return aplicarDesconto($valorCompra, 20);
    }
}

$valorCompra = readline("Digite o valor da compra: R$ ");
$valorFinal = calcularDesconto($valorCompra);

if ($valorFinal === null) {
    echo "Nenhum desconto foi aplicado, o valor se mantém: R$ " . number_format($valorCompra, 2) . "\n";
} else {
    echo "O valor final da compra, com desconto aplicado, é: R$ " . number_format($valorFinal, 2) . "\n";
}