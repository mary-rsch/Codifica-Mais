<?php

require_once 'Veiculos.php';

class Caminhao extends Veiculo{
    public function frear() : string{
        return "O caminhão {$this->marca} {$this->modelo} está freando.";
    }

    public function acelerar() : string{
        return "O caminhão {$this->marca} {$this->modelo} está acelerando.";
    }

    public function exibirDetalhes(){
        return "Veículo: Caminhão" . PHP_EOL 
        . "Marca: {$this->marca}" . PHP_EOL
        . "Modelo: {$this->modelo}";
    }
}