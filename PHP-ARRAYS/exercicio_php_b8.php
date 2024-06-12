<?php

$itensComprados = ["Carne", "Cerveja", "Carvão", "Pão de Alho", "Refrigerante"];
$precoItens = [150.0, 100.0, 20.0, 30.0, 50.0];

$participantes = readline("Digite o número total de participantes presentes: ");



function calcularValorPorPessoa($valorTotal, $numeroDeParticipantes) 
{
    return $valorTotal / $numeroDeParticipantes;
}

if ($participantes <= 1) {
    echo "O churrasco foi cancelado, todo mundo furou!\n";
    exit;
}

$valorTotal = array_sum($precoItens); //vai somar todos os valores da array
$valorTotalPorParticipante = calcularValorPorPessoa($valorTotal, $participantes);

echo"Cada um deve pagar o valor de: R$ " . number_format($valorTotalPorParticipante, 2) ."\n";

$valorMaximo = max($precoItens);
$indiceMaisCaro = array_search($valorMaximo, $precoItens);
$itemMaisCaro = $itensComprados[$indiceMaisCaro];

echo "O item mais caro do churrasco foi: $itemMaisCaro.";