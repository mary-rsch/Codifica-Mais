<?php

$funcionarios = [
    ["nome" => "Pedro", "salarioBase" => 2500,"horasExtras" => 10],
    ["nome" => "Renata", "salarioBase" => 3000,"horasExtras" => 5],
    ["nome" => "Sérgio", "salarioBase" => 2800,"horasExtras" => 8],
    ["nome" => "Vanessa", "salarioBase" => 3200,"horasExtras" => 12],
    ["nome" => "André", "salarioBase" => 1700,"horasExtras" => 0]
];

function calcularSalarioTotal($salarioBase, $horasExtras, $valorHoraExtra)
{
    $valorHoraNormal = $salarioBase / 160;
    return $salarioBase + ($horasExtras * $valorHoraNormal * $valorHoraExtra); // hora extra = 1.5
}

function listarFuncionarios($funcionarios)
{
    foreach ($funcionarios as $funcionario){
        $valorHoraExtra = 1.5;
        $salarioTotal = calcularSalarioTotal($funcionario["salarioBase"], $funcionario["horasExtras"], $valorHoraExtra);

        echo "Nome: " . $funcionario["nome"] . "\n";
        echo "Salário Base: R$ " . number_format($funcionario["salarioBase"], 2) . "\n";
        echo "Horas Extras: " . $funcionario["horasExtras"] . "\n";
        echo "Salário Total: R$ " . number_format($salarioTotal, 2) . "\n";
        echo "--------------------------\n";
    }
}

listarFuncionarios($funcionarios);