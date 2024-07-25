<?php

require_once 'Funcionario.php';

$funcionario = new Funcionario('Maryana Rigo', 'Estagiário', 750.00);

$funcionario->exibirDetalhes();

$funcionario->alterarCargo('Programador Junior');
$funcionario->ajustarSalario(1900.00);

$funcionario->exibirDetalhes();