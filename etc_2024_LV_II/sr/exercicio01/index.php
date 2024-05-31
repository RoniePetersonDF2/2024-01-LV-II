<?php
    # metodo PHP usado para que possamos usar acentuação.
    header('Content-Type: text/html; charset=utf-8;');

    class Veiculo
    {
        # local para colocar atributos.
        public $cor;
        public $combustivel; 
        # local para colocar métodos.
        public function __construct($cor, $combustivel)
        {
            # a palavra reservada $this-> é usada para podermos acessar ou modificar
            # o valor de um atributo. no método contrutor temos um parâmetro chamado $cor.
            $this->cor = $cor;
            $this->combustivel = $combustivel;
        }

        public function acelerar()
        {
            echo '<p>
                Oi, eu sou um método. Sou criado para executar tarefas nas classe.
                Realizo qualquer ação que seja necessaria a classe.
                Posso ou nao retornar um valor.
                Se precisar me usar, você deve me chamar pelo meu nome. 
                </p>';
        }
    }

    # criando instancia da classe Veiculo e armazenando na variável $corsa.
    # quando usamos parâmetros em métodos construtores, é o obrigatório passar o valor. 
    $corsa = new Veiculo("Preto", "Gasolina");
    # acessando ou lendo o valor do atributo cor.
    echo "A cor do meu Corsa é: {$corsa->cor}"; 