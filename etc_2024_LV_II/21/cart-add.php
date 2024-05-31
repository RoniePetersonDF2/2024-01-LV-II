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
$carrinho[] = $produto;
var_dump($_SESSION['usuario']['carrinho'], $carrinho); exit;
$_SESSION['usuario']['carrinho'] = $carrinho;

header('Location: index.php');
exit;