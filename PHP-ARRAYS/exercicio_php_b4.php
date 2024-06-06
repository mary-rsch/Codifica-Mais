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
$valor = fgets(STDIN);
$valor = trim($valor);

echo "Digite a unidade atual (C ou F): ";
$unidadeAtual = fgets(STDIN);
$unidadeAtual = trim(strtoupper($unidadeAtual));

echo "Digite a unidade desejada (C ou F): ";
$unidadeDesejada = fgets(STDIN);
$unidadeDesejada = trim(strtoupper($unidadeDesejada));

converterTemperatura($valor, $unidadeAtual, $unidadeDesejada);