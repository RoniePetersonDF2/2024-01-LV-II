<?php

    require 'src/conta.php';
    require 'src/contaespecial.php';
    require 'src/contaconjunta.php';

    echo '<h1>Trabalhando com herança - Conta Especial Final</h1>';

    $ce = new ContaEspecial(200.00, 100.00);

    $ce->imprimirSaldo();

    $ccj = new ContaConjunta();