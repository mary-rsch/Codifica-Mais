<?php
require_once 'ProdutoInterface.php';

class Produto implements ProdutoInterface {
    
    private $nome;
    private $sku;
    private $estoque;
    private $unidade_medida;
    private $preco;
    private $quantidade;
    private $cor;

    public function __construct($estoque, $sku, $nome, $unidade_medida, $preco, $quantidade, $cor) {
        $this->estoque = $estoque;
        $this->sku = $sku;
        $this->nome = $nome;
        $this->unidade_medida = $unidade_medida;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->cor = $cor;
    }

    public function getNome() {
        //
    }
    public function getSku() {
        //
    }
    public function getPreco() {
        //
    }
    public function getEstoque() {
        //
    }
    public function getQuantidade() {
        //
    }
    public function getUnidadeMedida() {
        //
    }
    public function getCor() {
        //
    }
}