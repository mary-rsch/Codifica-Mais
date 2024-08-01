<?php


class Menu extends Produto{
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
}