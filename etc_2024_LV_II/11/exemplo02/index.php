<?php

    require 'src/conta.php';
    require 'src/contacorrente.php';
    require 'src/contaespecial.php';

    echo '<h1>Trabalhando com herança - Conta Especial</h1>';

    $ce = new ContaEspecial(200.00, 100.00);

    $ce->imprimirSaldo();

    $ce->sacar(210.00);

    $ce->imprimirSaldo();

    $ce->sacar(100.00);

    $ce->imprimirSaldo();
