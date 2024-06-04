<?php
session_start();
include '../config.php';
include '../src/models/dao/produtodao.php';

$id = $_GET['id'] ?? 0;

$dao = new ProdutoDAO($array_produtos);
$produto = $dao->getById($id);

if ($produto == false) {
    header('Location: ../index.php?message=Produto não encontrado!&type=error');
    exit;
}

if (!isset($_SESSION['usuario'])) {
    header('Location: ../login.php');
    exit;
}

if ($_SESSION['usuario']['carrinho'] != null) {
    $carrinho = $_SESSION['usuario']['carrinho'];    
} 

$achouItemCarrinho = false;
foreach($carrinho as $key => $item) {
    if ($item['id'] == $id) {
        $produto = $item;
        $produto['quantidade'] = $item['quantidade'] + 1;        
        $achouItemCarrinho = true;
        unset($carrinho[$key]);
        break;
    }
}    
if ($achouItemCarrinho == false) {
    $produto['quantidade'] = 1;
}
$carrinho[] = $produto;
$_SESSION['usuario']['carrinho'] = $carrinho;
header('Location: ../index.php?message=Produto adicionado com sucesso.');
exit;
// echo '<pre>'; var_dump($produto, $carrinho); exit;