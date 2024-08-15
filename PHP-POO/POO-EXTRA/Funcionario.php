<?php

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;

    public function __construct($nome, $cargo, $salario) {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function ajustarSalario($novoSalario) {
        if ($novoSalario >= 0) {
        $this->salario = $novoSalario;
        echo "Salário do(a) funcionário(a) {$this->nome} ajustado para R$ {$novoSalario}." . PHP_EOL;
        }
    }

    public function alterarCargo($novoCargo) {
        $this->cargo = $novoCargo;
        echo "O(A) funcionário(a) {$this->nome} teve seu cargo ajustado para {$novoCargo}." . PHP_EOL;
    }

    public function exibirDetalhes() {
        echo "Funcionário(a): {$this->nome}" . PHP_EOL;
        echo "Cargo: {$this->cargo}" . PHP_EOL;
        echo "Salário: R$ {$this->salario}" . PHP_EOL;
    }
}