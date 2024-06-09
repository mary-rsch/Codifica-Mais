<?php

$estoque = [];

function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade)
{
    $estoque[$codigo] = [
        'nome' => $nome,
        'tamanho'=> $tamanho,
        'cor'=> $cor,
        'quantidade' => $quantidade
    ];
}

function venderProduto(&$estoque, $codigo, $quantidade)
{

    if (!isset($estoque[$codigo])) {
        echo "Código do produto não encontrado" . PHP_EOL;
        return;
    }

    if ($quantidade > $estoque[$codigo]['quantidade']) {
        echo "Quantidade insuficiente no estoque." . PHP_EOL;
        return;
    }

    $estoque[$codigo]['quantidade'] -= $quantidade;

if ($estoque[$codigo]['quantidade'] == 0) {
        unset($estoque[$codigo]);
        echo "Produto vendido, estoque esgotado e removido do sistema." . PHP_EOL;
    } else {
        echo "Quantidade de estoque atualizada, produto vendido." . PHP_EOL;
    }
    
}

function verificarEstoque(&$estoque, $codigo)
{
    if (!isset($estoque[$codigo])) {
        echo "Código do produto não encontrado" . PHP_EOL;
        return;
    }
    echo "O estoque do produto $codigo é de {$estoque[$codigo]['quantidade']} unidades." . PHP_EOL;
}

function listarEstoque(&$estoque)
{
    if(empty($estoque)) {
        echo"Estoque vazio.". PHP_EOL;
        return;
    }
    foreach ($estoque as $codigo => $produto) {
        echo "Código: $codigo 
        | Nome: {$produto['nome']} 
        | Tamanho: {$produto['tamanho']} 
        | Cor: {$produto['cor']} 
        | Quantidade: {$produto['quantidade']}" . PHP_EOL;
    }
}

// Função para exibir o menu e obter a escolha do usuário
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto 1\n";
    echo "2. Remover um produto 2\n";
    echo "3. Verificar Estoque 3\n";
    echo "4. Listar o Estoque 4\n";
    echo "5. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $codigo = readline("Digite o Código do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $tamanho = readline("Digite o Tamanho: ");
            $cor = readline("Digite a Cor: ");
            $quantidade = readline("Digite a Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;
        case 2:
            echo "Remover um produto\n";
            $codigo = readline("Digite o código do produto: ");
            $quantidade = readline("Digite a quantidade que foi vendida: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            $codigo = readline("Digite o código do produto: ");
            verificarEstoque($estoque, $codigo);
            break;
        case 4:
            echo "Listar o Estoque\n";
            listarEstoque($estoque);
            break;
        case 5:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida, por favor tente novamente.\n";
            break;
    }
}
