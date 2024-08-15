<?php

class Carro
{
    private $marca;
    private $modelo;
    private $anoFabricacao;
    public function __construct($marca, $modelo, $anoFabricacao)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anoFabricacao = $anoFabricacao;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAnoFabricacao(): int
    {
        return $this->anoFabricacao;
    }

    public function acelerar(): string
    {
        return 'O carro ' . $this->marca . ' ' . $this->modelo . ' ' . $this->anoFabricacao . ', ' . 'está acelerando.';
    }

    public function frear(): string
    {
        return 'O carro ' . $this->marca . ' ' . $this->modelo . ' ' . $this->anoFabricacao . ', ' .'está freando.';
    }
}

    
