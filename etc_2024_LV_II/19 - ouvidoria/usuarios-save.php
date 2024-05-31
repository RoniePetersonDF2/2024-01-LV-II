<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);
$result = $usuarioDAO->create(
    $_POST['nome'],
    $_POST['email'],
    $_POST['password'],
    $_POST['tipo'],
    $_POST['status']
);

if ($result) {
    header('location: usuarios.php?message=Usuário criado com sucesso!');
    exit();
} else {
    echo $conn->errorInfo();
    exit('Erro ao inserir usuário');
}



