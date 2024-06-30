<?php

$estoque = [
    [
        'sku' => 'GRA-001',
        'nome' => 'Arroz 5kg',
        'unidade_medida' => '5kg',
        'quantidade' => 50,
        'preco' => 37.95
    ],
    [
        'sku' => 'GRA-002',
        'nome' => 'Feijão Preto 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 30,
        'preco' => 8.99
    ],
    [
        'sku' => 'MAS-003',
        'nome' => 'Macarrão Espaguete 500g',
        'unidade_medida' => '500g',
        'quantidade' => 100,
        'preco' => 9.99
    ],
    [
        'sku' => 'MAN-004',
        'nome' => 'Óleo de Soja 900ml',
        'unidade_medida' => '900ml',
        'quantidade' => 60,
        'preco' => 6.98
    ],
    [
        'sku' => 'GRA-005',
        'nome' => 'Açúcar Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 80,
        'preco' => 4.98
    ],
    [
        'sku' => 'GRA-006',
        'nome' => 'Sal Refinado 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 40,
        'preco' => 4.5
    ],
    [
        'sku' => 'GRA-007',
        'nome' => 'Café Torrado e Moído 500g',
        'unidade_medida' => '500g',
        'quantidade' => 20,
        'preco' => 16.98
    ],
    [
        'sku' => 'BEB-008',
        'nome' => 'Leite UHT Integral 1L',
        'unidade_medida' => '1L',
        'quantidade' => 70,
        'preco' => 6.99
    ],
    [
        'sku' => 'GRA-009',
        'nome' => 'Farinha de Trigo 1kg',
        'unidade_medida' => '1kg',
        'quantidade' => 90,
        'preco' => 5.45
    ],
    [
        'sku' => 'PRO-010',
        'nome' => 'Molho de Tomate',
        'unidade_medida' => '340g',
        'quantidade' => 50,
        'preco' => 3.99
    ]
];

function adicionarProduto(&$estoque, $sku, $nome, $unidade_medida, $preco, $quantidade)
{

    foreach ($estoque as $produto) {
        if($produto['sku'] == $sku || $produto['nome'] == $nome){
            echo "Um produto com o mesmo SKU ou nome já existe em estoque." . PHP_EOL;
            return;
        } 
    }

    $estoque[] = [
        'sku' => $sku,
        'nome' => $nome,
        'unidade_medida'=> $unidade_medida,
        'quantidade' => $quantidade,
        'preco' => $preco
    ];
    echo "Produto adicionado ao estoque." . PHP_EOL;
}

function venderProduto(&$estoque, $sku, $quantidade)
{

    foreach ($estoque as &$produto){
        if ($produto['sku'] == $sku) {
            if ($quantidade > $produto['quantidade']) {
                echo "Quantidade insuficiente no estoque." . PHP_EOL;
                return;
            }

            $produto['$quantidade'] -= $quantidade;// serve para atualizar a quantidade

            if ($produto['quantidade'] == 0) {
                echo "Produto vendido, estoque esgotado." . PHP_EOL;
            } else {
                echo "Quantidade de estoque atualizada, produto vendido." . PHP_EOL;
            }
            return;
        }
    }

    echo "Código do produto não encontrado." . PHP_EOL;
}
    

function verificarEstoque(&$estoque, $sku)
{

    foreach ($estoque as $produto) {
        if ($produto['sku'] == $sku) {
            echo "O estoque do produto $sku é de {$produto['quantidade']} unidades." . PHP_EOL;
            return;
        }
    }
    echo "Código do produto não encontrado." . PHP_EOL;
}

function listarEstoque(&$estoque)
{
    if(empty($estoque)) {
        echo"Estoque vazio.". PHP_EOL;
        return;
    }

    usort($estoque, function($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });//ordem alfabética


    foreach ($estoque as $produto) {
        echo "SKU: {$produto['sku']}
        | Nome: {$produto['nome']} 
        | Unidade de Medida: {$produto['unidade_medida']}
        | Quantidade: {$produto['quantidade']}
        | Preço: R$ {$produto['preco']}" . PHP_EOL;
    }
}

function contarItensEstoque(&$estoque)
{
    $itensDistintos = count($estoque);
    $quantidadeTotal = array_sum(array_column($estoque, 'quantidade'));

    echo "Total de itens distintos no estoque: $itensDistintos" . PHP_EOL;
    echo "Quantidade total de itens no estoque: $$quantidadeTotal" . PHP_EOL;
}

function apagarProdutosPorCor($estoque, $cor)
{
    $estoque = array_filter($estoque, function($produto) use ($cor) {
        return $produto['cor'] !== $cor;
    });

    echo "Produtos da cor $cor foram removidos." . PHP_EOL;
}

function deletarProduto(&$estoque, $sku)
{
    foreach ($estoque as $key => $produto) {
        if ($produto['sku'] == $sku) {
            if ($produto['quantidade'] > 0) {
                $confirmar = readline("O produto possui estoque. Deseja realmente deletar? (s/n): ");
                if (strtolower($confirmar) !== 's') {
                    return;
                }
            }

            unset($estoque[$key]);
            echo "Produto deletado com sucesso." . PHP_EOL;
            return;
        }
    }

    echo "Código do produto não encontrado." . PHP_EOL;
}


// Função para exibir o menu e obter a escolha do usuário
function exibirMenu()
{
    echo "\n";
    echo "Escolha uma das opções abaixo:\n";
    echo "1. Adicionar um produto\n";
    echo "2. Remover um produto\n";
    echo "3. Verificar Estoque\n";
    echo "4. Listar o Estoque\n";
    echo "5. Apagar produtos por cor\n";
    echo "6. Contar itens no estoque\n";
    echo "7. Deletar produto pelo código SKU\n";
    echo "8. Sair\n";
    $opcao = readline("Digite a sua escolha: ");
    return $opcao;
}

while (true) {

    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            echo "Adicionar um produto\n";
            $sku = readline("Digite o SKU do produto: ");
            $nome = readline("Digite o Nome do produto: ");
            $unidade_medida = readline("Digite a Unidade de Medida: ");
            $quantidade = readline("Digite a Quantidade: ");
            $preco = readline("Digite o Preço: ");
            adicionarProduto($estoque, $sku, $nome, $unidade_medida, $preco, $quantidade);
            break;
        case 2:
            echo "Remover um produto\n";
            $sku = readline("Digite o SKU do produto: ");
            $quantidade = readline("Digite a quantidade que foi vendida: ");
            venderProduto($estoque, $sku, $quantidade);
            break;
        case 3:
            echo "Verificar Estoque\n";
            $sku = readline("Digite o SKU do produto: ");
            verificarEstoque($estoque, $sku);
            break;
        case 4:
            echo "Listar o Estoque\n";
            listarEstoque($estoque);
            break;
            case 5:
                echo "Apagar produtos por cor\n";
                $cor = readline("Digite a cor dos produtos que deseja deletar: ");
                apagarProdutosPorCor($estoque, $cor);
                break;
            case 6:
                echo "Contar itens no estoque\n";
                contarItensEstoque($estoque);
                break;
            case 7:
                echo "Deletar produto pelo código SKU\n";
                $sku = readline("Digite o código do produto: ");
                deletarProduto($estoque, $sku);
                break;

            case 8:
                echo "Saindo...\n";
                exit;

            default:
               echo "Opção inválida, por favor tente novamente.\n";
                break;
    }
}