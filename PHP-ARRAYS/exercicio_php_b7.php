<?php

$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0] // Aluno 4
];

function calcularMedia($notas)
{
    $somaDasNotas = array_sum($notas);
    $quantidadeDeNotas = count($notas);
    return $somaDasNotas / $quantidadeDeNotas;
}

$aprovados = 0;
$reprovados = 0;

foreach ($notasAlunos as $i => $notas){
   $media = calcularMedia($notas);
   if ($media >= 7.0){
    echo "Aluno " . ($i + 1) . " foi aprovado com média de " . number_format($media, 2) . ".\n";
    $aprovados++;
   } else {
    echo "Aluno " . ($i + 1) . " foi reprovado com média de " . number_format($media, 2) . ".\n";
    $reprovados++;
   }
}

echo "Total de alunos aprovados: $aprovados\n";
echo "Total de alunos reprovados: $reprovados\n";
