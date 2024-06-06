<?php

function converterTemperatura($valor, $unidadeAtual, $unidadeDesejada) {
  if ($unidadeAtual == "C" && $unidadeDesejada == "F") {
    $resultado = ($valor * 9/5) + 32;
  } elseif ($unidadeAtual == "F" && $unidadeDesejada == "C") {
    $resultado = ($valor - 32) * 5/9;
  } else {
    echo "Unidade inválida. Digite 'C' para Celsius ou 'F' para Fahrenheit.";
    return;
  }

  echo $valor . "°" . $unidadeAtual . " equivalem a " . round($resultado, 2) . "°" . $unidadeDesejada;
}

echo "Digite a temperatura: ";
$valor = readline();

echo "Digite a unidade atual (C ou F): ";
$unidadeAtual = readline();

echo "Digite a unidade desejada (C ou F): ";
$unidadeDesejada = readline();

converterTemperatura($valor, $unidadeAtual, $unidadeDesejada);