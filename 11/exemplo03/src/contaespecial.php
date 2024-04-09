<?php

final class ContaEspecial extends Conta
{
    protected float $limite;
    public function __construct(float $saldo, float $limite)
    {
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function getSaldo(): float 
    {
        return $this->saldo + $this->limite;
    }
    public function sacar(float $valor): void
    {
        if ($valor > $this->getSaldo()) {
            echo "Valor a ser sacado, R$ $valor, é maior que o saldo.<br>";
            return;
        }
        $this->saldo -= $valor;
        echo "Valor sacado: R$ $valor.<br>";

    }

    public function imprimirSaldo(): void
    {
        $saldo = number_format($this->getSaldo(), 2, ',', '.');
        echo "Saldo atual é: R$ $saldo<br>";
    }
}
