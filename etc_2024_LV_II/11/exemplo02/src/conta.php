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
            echo "Valor a ser sacado, R$ $valor, é maior que o saldo. <br>";
            return;
        }
        $this->saldo -= $valor;
        echo "Valor sacado: R$ $valor. <br>";

    }
    public function depositar(float $valor): void 
    {
        if ($valor <= 0) {
            echo "Valor a ser sacado, R$ $valor, é maior que o saldo. <br>";
            return;
        }
        $this->saldo += $valor;
        echo "Valor depositado, R$ $valor. <br>";
    }

    public function imprimirSaldo(): void
    {
        $saldo = number_format($this->getSaldo(), 2, ',', '.');
        echo "Saldo atual é: R$ $saldo <br>";
    }
}
