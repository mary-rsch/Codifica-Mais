<?php

require_once 'Carros.php';

$fiat = new Carro('Ferrari', '296 - GTS', 2021);
$mercedes = new Carro('Mercedes', 'Sedan', 2024);

echo $fiat->acelerar() . PHP_EOL;
echo $mercedes->acelerar() . PHP_EOL;
echo $fiat->frear() . PHP_EOL;
echo $mercedes->frear() . PHP_EOL;