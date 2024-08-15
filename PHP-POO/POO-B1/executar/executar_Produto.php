<?php

require_once 'Produto.php';

$produto = new Produto("Notebook", 2500.00, 10);

$produto->exibirDetalhes();

$produto->alterarPreco(2700.00);
$produto->ajustarEstoque(8);

$produto->exibirDetalhes();

