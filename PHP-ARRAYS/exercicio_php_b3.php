<?php

echo "Digite a largura do retângulo (em metros): ";
$largura = (float) readline();

echo "Digite a altura do retângulo (em metros): ";
$altura = (float) readline();

$area = $largura * $altura;
$perimetro = 2 * ($largura + $altura);

echo "Área do retângulo: $area metros quadrados" . PHP_EOL;
echo "Perímetro do retângulo: $perimetro metros";


