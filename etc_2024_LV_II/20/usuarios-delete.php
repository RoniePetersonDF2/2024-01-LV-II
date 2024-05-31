<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);

$id = $_GET['id'] ?? 0;

if ($usuarioDAO->delete($id)) {
    header('location: usuarios.php?message=Usuário excluído com sucesso!');
    exit();
} else {
    echo $conn->errorInfo();
}


