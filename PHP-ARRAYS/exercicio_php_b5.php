<?php
$valorTotal = 0;
function calcularDesconto($valor, $desconto) 
{
$valorDesconto = ($valor * $desconto) / 100;
$valorFinal = $valor - $valorDesconto;

return $valorFinal;
}

echo"Digite o valor do produto: R$ ";
$valor = readline();

echo"Digite o valor do desconto (sem a utilização de %): ";
$desconto = readline();

$valorFinal = calcularDesconto($valor, $desconto);
echo "O valor final com desconto é: R$ " . number_format($valorFinal, 2, ',', '.');