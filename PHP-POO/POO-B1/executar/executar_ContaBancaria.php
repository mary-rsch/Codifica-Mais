<?php

require_once 'ContaBancaria.php';

$conta = new ContaBancaria('38567', 'Vinícus Silva', 208);

$conta->depositar(500);
$conta->exibirSaldo();
$conta->sacar(10);
$conta->exibirSaldo();