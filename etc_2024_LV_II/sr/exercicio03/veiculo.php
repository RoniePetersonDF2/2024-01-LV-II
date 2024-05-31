<?php
  
    class Veiculo
    {
        # local para colocar atributos.
        public $cor;
        public $combustivel;
        public $marca;
        public $modelo;
        private $velocidade;
        private $estado;

        # local para colocar métodos.
        public function __construct($cor, $combustivel, $marca, $modelo)
        {
            # a palavra reservada $this-> é usada para podermos acessar ou modificar
            # o valor de um atributo. no método contrutor temos um parâmetro chamado $cor.
            $this->cor = $cor;
            $this->combustivel = $combustivel;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->estado = "DESLIGADO";
        }

        public function acelerar()
        {
            $this->velocidade += 10;
        }

        public function frear()
        {
            $this->velocidade -= 10;
        }

        public function ligar()
        {
            $this->estado = "LIGADO";
        }

        public function getVelocidade() 
        {
            return $this->velocidade;
        }

        public function __toString()
        {
            return "Meu carro é um {$this->marca} - {$this->modelo}. 
                A cor dele é {$this->cor} e o combustível é {$this->combustivel}.";
        }
    }

