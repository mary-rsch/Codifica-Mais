<?php

function calcularGorjeta($conta, $porcentagem) {
  $gorjeta = $conta * ($porcentagem / 100);
  return $gorjeta;
}

function calcularTotal($conta, $gorjeta) {
  $total = $conta + $gorjeta;
  return $total;
}

echo "Digite o valor total da conta: R$ ";
$valorConta = readline();

echo "Digite a porcentagem da gorjeta (sem o símbolo %): ";
$porcentagemGorjeta = readline();

$valorGorjeta = calcularGorjeta($valorConta, $porcentagemGorjeta);
$valorTotal = calcularTotal($valorConta, $valorGorjeta);

echo "Valor da gorjeta: R$ " . number_format($valorGorjeta, 2, ',', '.') . PHP_EOL;
echo "Valor total a ser pago: R$ " . number_format($valorTotal, 2, ',', '.');
