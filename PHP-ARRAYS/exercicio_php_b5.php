<?php
$valorTotal = 0;
function calcularDesconto($valor, $desconto) 
{
$valorDesconto = ($valor * $desconto) / 100;
$valorFinal = $valor - $valorDesconto;

return $valorFinal;
}

$valor = readline("Digite o valor do produto: R$ ");
$desconto = readline("Digite o valor do desconto (sem a utilização de %): ");

$valorFinal = calcularDesconto($valor, $desconto);
echo "O valor final com desconto é: R$ " . number_format($valorFinal, 2, ',', '.');
