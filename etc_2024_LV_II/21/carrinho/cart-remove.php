<?php
    session_start();
    $id = $_GET['id'] ?? 0;

    if ($id == 0) {
        header('location: cart.php?message=Item não encontrado no carrinho.');
        exit();
    }
    $carrinho = $_SESSION['usuario']['carrinho'];

    
    foreach($carrinho as $key => $item) {
        if ($item['id'] == $id) {
            unset($carrinho[$key]);
            $_SESSION['usuario']['carrinho'] = $carrinho;
            break;
        }
    }    

    header('location: cart.php?message=Item removido do carrinho.');