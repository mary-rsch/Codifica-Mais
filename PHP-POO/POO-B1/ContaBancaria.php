<?php

class ContaBancaria {
    private $numeroConta;
    private $nomeTitular;
    private $saldo;

    public function __construct($numeroConta, $nomeTitular, $saldoInicial) {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
            echo"Depósito de R$ {$quantia} realizado com sucesso." . PHP_EOL;
        } else {
            echo "A quantia para depósito deve ser positiva, tente novamente." . PHP_EOL;
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            echo "Saque de R$ {$quantia} realizado com sucesso." . PHP_EOL;
        } elseif ($quantia > $this->saldo) {
            echo "Saldo insuficiente." . PHP_EOL;
        } else {
            echo "A quantia para depósito deve ser positiva, tente novamente." . PHP_EOL;
        } 
    }

    public function exibirSaldo() {
        echo"Saldo atual: R$ {$this->saldo}" . PHP_EOL;
    }
}