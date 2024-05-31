<?php
    # metodo PHP usado para que possamos usar acentuação.
    header('Content-Type: text/html; charset=utf-8;');

    include 'src/veiculo.php';

    # criando instancia da classe Veiculo e armazenando na variável $corsa.
    # quando usamos parâmetros em métodos construtores, é o obrigatório passar o valor. 
    $corsa = new Veiculo("Preto", "Alcool", "Chevrolet", "Corsa 1.0");
    
    # acessando o método mágico __toString().
    echo $corsa; 

    # usando o método getVelocidade para conhecer a velocidade atual.
    $corsa->getVelocidade();

    # usando o método acelerar algumas vezes para aumentar a velocidade do carro.
    $corsa->acelerar();
    $corsa->acelerar();
    $corsa->acelerar();
    $corsa->acelerar();

    # usando o método getVelocidade para conhecer a velocidade atual.
    $corsa->getVelocidade();

    # usando o método frear para reduzir a velocidade.
    $corsa->frear();

    # usando o método getVelocidade para conhecer a velocidade atual.
    $corsa->getVelocidade();