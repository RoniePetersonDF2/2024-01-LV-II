<?php

    include "conta.php";

    # criando um objeto da classe conta.
    $conta01 = new Conta();

    $conta01->saldo = 1000.0;

    echo "O valor do seu saldo é: {$conta01->getSaldo()}";