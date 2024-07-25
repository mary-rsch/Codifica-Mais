<?php

require_once 'Veiculos.php';

class Carros extends Veiculo {
    public function frear(){
    return "O carro {$this->marca} {$this->modelo} está freando.";
    } 

    public function acelerar() : string{
        return "O carro {$this->marca} {$this->modelo} está acelerando.";
    }  

    public function exibirDetalhes(){
        return "Veículo: Carro" . PHP_EOL 
        . "Marca: {$this->marca}" . PHP_EOL
        . "Modelo: {$this->modelo}";
    }
}