<?php

class ProdutoPerecivel extends Produto {
    private $dataValidade;
    private $dataFabricacao;
    private $dataAtual;

    public function __construct($diasValidadeProduto, $dataFabricacao, $dataAtual) {
        $this->dataValidade = $diasValidadeProduto;
        $this->dataFabricacao = $dataFabricacao;
        $this->dataAtual = $dataAtual;
    }

    /*$dataAtual = new DateTime(date('Y-m-d'));
    $dataValidade = new DateTime('2016-10-01');
    $dataAtual = $data_atual->diff($dataValidade);
    echo $dataAtual->format('%R%a dias');*/

        public function avisoValidade() {
            if ($this->dataFabricacao < $this->dataAtual) {
            return 'Este produto está vencido.';
        } else {
            return 'O produto está há X dias de validade.';
        }
    }


}