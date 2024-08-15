<?php

class Produto{

    private $nome;
    private $preco;
    private $quantidadeEstoque;

    public function __construct($nome, $preco, $quantidadeEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function alterarPreco($novoPreco) {
        if ($novoPreco > 0) {
            $this->preco = $novoPreco;
            echo "Preço alterado para R$ {$novoPreco}" . PHP_EOL;
        } else {
            echo "O preço deve ser um valor positivo, tente novamente." . PHP_EOL;
        }
    }

    public function ajustarEstoque($quantidade) {
        if ($quantidade >= 0) {
            $this->quantidadeEstoque = $quantidade;
            echo "Quantidade em estoque ajustada para {$quantidade}." . PHP_EOL;
        } else {
            echo "A quantidade em estoque não pode ser negativa, tente novamente." . PHP_EOL;
        }
    }

    public function exibirDetalhes() {
        echo "Produto: {$this->nome}" . PHP_EOL;
        echo "Preço: R$ {$this->preco}" . PHP_EOL;
        echo "Quantidade em estoque: {$this->quantidadeEstoque}" . PHP_EOL;
    }
    
}
