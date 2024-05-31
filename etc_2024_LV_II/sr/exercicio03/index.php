<?php
    # metodo PHP usado para que possamos usar acentuação.
    header('Content-Type: text/html; charset=utf-8;');

    include 'src/veiculo.php';

    # criando instancia da classe Veiculo e armazenando na variável $corsa.
    # quando usamos parâmetros em métodos construtores, é o obrigatório passar o valor. 
    $omega = new Veiculo("Preto", "Flex", "Chevrolet", "Ômega 2.0");
    # acessando o método toString.
    echo $omega; 

    $omega->ligar();
    $omega->acelerar();
    $omega->acelerar();
    $omega->acelerar();
    $omega->acelerar();
    $omega->getVelocidade();
    