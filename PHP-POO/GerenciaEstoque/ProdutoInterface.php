<?php
 interface ProdutoInterface {
    public function getNome();
    public function getSku();
    public function getEstoque();
    public function getUnidadeMedida();
    public function getPreco();
    public function getQuantidade();
    public function getCor();
}