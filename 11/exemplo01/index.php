<?php

    require 'src/conta.php';
    require 'src/contacorrente.php';

    echo '<h1>Trabalhando com herança - Conta Corrente</h1>';

    $cc = new ContaCorrente(200.00);

    $cc->imprimirSaldo();

    $cc->sacar(210.00);

    $cc->imprimirSaldo();