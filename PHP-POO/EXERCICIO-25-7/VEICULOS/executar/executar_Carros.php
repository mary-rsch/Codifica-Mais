<?php

require_once 'Carros.php';

$fiat = new Carros('Fiat', 'Uno');

$fiat->frear();
$fiat->acelerar();
$fiat->exibirDetalhes();