<?php
  
    class Veiculo
    {
        # local para colocar atributos.
        public $cor;
        public $combustivel;
        public $marca;
        public $modelo;
        private $velocidade = 0;
        
        # local para colocar métodos.
        public function __construct($cor, $combustivel, $marca, $modelo)
        {
            # a palavra reservada $this-> é usada para podermos acessar ou modificar
            # o valor de um atributo. no método contrutor temos um parâmetro chamado $cor.
            $this->cor = $cor;
            $this->combustivel = $combustivel;
            $this->marca = $marca;
            $this->modelo = $modelo;
        }

        public function acelerar()
        {
            $this->velocidade += 10;
        }

        public function frear()
        {
            $this->velocidade -= 10;
        }

        public function getVelocidade() 
        {
            echo "<p>Sua velocidade atual é: <b>{$this->velocidade} Km</b></p>";
        }

        public function __toString()
        {
            return "<p>Meu carro é um {$this->marca} - {$this->modelo}.</p> 
            <p>A cor dele é {$this->cor} e o combustível é {$this->combustivel}.</p>";
        }
    }

