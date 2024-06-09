<?php

function calcularIMC($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function classificacaoIMC($imc)
{
    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc <= 18.5 && $imc >= 24.9) {
        return "Normal";
    } elseif ($imc >= 25 &&  $imc <= 29.9) {
        return "Sobrepeso";
    } elseif ($imc >= 30 && $imc <= 34.9) {
        return "Obesidade grau I";
    } elseif ($imc >= 35 && $imc <= 39.9) {
        return "Obesidade grau II";
    } elseif ($imc >= 40) {
        return "Obesidade grau III";
    }
    
}

echo"Digite sua altura: ";
$altura = readline();

echo "Digite seu peso: ";
$peso = readline();

$imc = calcularIMC($peso, $altura);
$classificacao = classificacaoIMC($imc);

echo "Seu IMC equivale ao valor de: " . number_format($imc,2,",","") . " kg/m^2\n";
echo "Sua classificação é: $classificacao";