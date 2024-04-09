<?php

abstract class Conta
{
    protected float $saldo = 0;

    public function __construct(float $saldo)
    {
        $this->saldo = $saldo;
    }
    
    public function getSaldo(): float 
    {
        return $this->saldo;
    }
    public function sacar(float $valor):void 
    {
        if ($valor > $this->getSaldo()) {
            echo "Valor a ser sacado, R$ $valor, é maior que o saldo.\n";
            return;
        }
        $this->saldo -= $valor;
        echo "Valor a ser sacado: R$ $valor.\n";

    }
    public function depositar(float $valor): void 
    {
        if ($valor <= 0) {
            print("Valor a ser sacado, R$ $valor, é maior que o saldo.\n");
            return;
        }
        $this->saldo += $valor;
        echo "Valor a ser depositado, R$ $valor.\n";
    }

    public function imprimirSaldo(): void
    {
        $saldo = number_format($this->getSaldo(), 2, ',', '.');
        echo "Saldo atual é: R$ $saldo\n";
    }
}
