<?php
    session_start();
    $id = $_GET['id'] ?? 0;

    if ($id == 0) {
        header('location: cart.php?message=Item não encontrado no carrinho.');
        exit();
    }
    $carrinho = $_SESSION['usuario']['carrinho'];

    echo '<pre>'; var_dump($carrinho);

    
