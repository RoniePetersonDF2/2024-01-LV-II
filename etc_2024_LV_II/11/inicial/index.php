<?php

    require 'src/conta.php';

    echo '<h1>Trabalhando com herança - Conta</h1>';

    $co = new Conta(200.00);

    $co->imprimirSaldo();

    $co->sacar(210.00);

    $co->imprimirSaldo();