<?php
session_start();
include 'config.php';
include 'src/models/dao/produtodao.php';

$id = $_GET['id'] ?? 0;

$dao = new ProdutoDAO($array_produtos);
$produto = $dao->getById($id);

if ($produto == false) {
    header('Location: index.php?message=Produto não encontrado!&type=error');
    exit;
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

if ($_SESSION['usuario']['carrinho'] != null) {
    $carrinho = $_SESSION['usuario']['carrinho'];    
} 
$carrinho[] = $produto;
$_SESSION['usuario']['carrinho'] = $carrinho;
// echo '<pre>';var_dump($_SESSION['usuario']['carrinho']); exit;
header('Location: index.php');
exit;
