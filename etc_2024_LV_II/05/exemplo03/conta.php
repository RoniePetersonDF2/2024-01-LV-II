<?php

    class Conta
    {
        public $saldo;
        
        public function getSaldo()
        {
            return $this->saldo;
        }

        public function sacar($valor)
        {
            $this->saldo -= $valor;
        }
    }