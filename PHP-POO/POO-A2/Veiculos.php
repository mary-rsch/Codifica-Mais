<?php

abstract class Veiculo{
    protected $modelo;
    protected $marca;

    public function __construct($modelo, $marca) {
        $this->modelo = $modelo;
        $this->marca = $marca;
    }
}