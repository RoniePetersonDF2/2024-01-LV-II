<?php
session_start();

include 'models/database/database.php';
include 'models/dao/relatodao.php';
include 'inc/uploadAnexo.php';

$conn =  Database::getConexao();
$relatoDAO = new RelatoDAO($conn);

$usuarioId = isset($_SESSION['usuario']) ? $_SESSION['usuario']['id'] : '';
$anexo = anexarArquivo();

$resultado = $relatoDAO->create(
    $_POST['titulo'],
    $_POST['descricao'],
    $_POST['tipo'],
    $anexo,
    $usuarioId    
);

if ($resultado) {
    header('Location: index.php?message=Relato registrado com sucesso!');
    exit();
} else {
    echo $conn->errorInfo();
}



