<?php

    require 'autoload.php';

    // $cc = new ContaCorrente(500);
    // $cc->imprimirSaldo();
    // $cc->sacar(450.00);
    // $cc->imprimirSaldo();
    // $cc->sacar(100);
    // $cc->imprimirSaldo();
    
    $ce = new ContaEspecial(500.00, 300.00);
    $ce->imprimirSaldo();
    $ce->sacar(600);
    $ce->imprimirSaldo();
    $ce->sacar(200);
    $ce->imprimirSaldo();
    
