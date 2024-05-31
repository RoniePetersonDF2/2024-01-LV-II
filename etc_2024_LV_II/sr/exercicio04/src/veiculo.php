<?php
  
    class Veiculo
    {
        # local para colocar atributos.
        private $cor;
        private $combustivel;
        private $marca;
        private $modelo;
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
            if ($this->estado == 'LIGADO')
            {
                $this->velocidade += 10;
            } else {
                echo "<p>Veículo DESLIGADO. Favor ligar o carro antes.</p>";
            }
        }

        public function frear()
        {
            if ($this->estado == 'LIGADO')
            {
                $this->velocidade -= 10;
            } else {
                echo "<p>Veículo DESLIGADO. Favor ligar o carro antes.</p>";
            }
            
        }

        public function getVelocidade() 
        {
            echo "<p>Sua velocidade atual é: {$this->velocidade} Km</p>";
        }
       
        public function __toString()
        {
            return "Meu carro é um {$this->marca} - {$this->modelo}. 
                A cor dele é {$this->cor} e o combustível é {$this->combustivel}.";
        }

        public function ligar()
        {
            if ($this->estado == 'DESLIGADO')
            {
                $this->estado = "LIGADO";
                echo "<p>O veículo LIGADO.</p>";
            } else {
                echo "<p>O veículo já está LIGADO.</p>";
            }
        }

        public function desligar()
        {
            if ($this->estado == 'LIGADO')
            {
                $this->estado = "DESLIGADO";
                echo "<p>O veículo DESLIGADO.</p>";
            } else {
                echo "<p>O veículo já está DESLIGADO.</p>";
            }
        }

    }

