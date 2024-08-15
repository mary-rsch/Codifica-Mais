<?php

require_once 'Veiculos.php';

class Moto extends Veiculo{
    public function frear(){
        return "A moto {$this->marca} {$this->modelo} está freando.";
    }  
    
    public function acelerar(){
        return "A moto {$this->marca} {$this->modelo} está acelerando.";
    }  

    public function exibirDetalhes(){
        return "Veículo: Moto" . PHP_EOL 
        . "Marca: {$this->marca}" . PHP_EOL
        . "Modelo: {$this->modelo}";
    }
}