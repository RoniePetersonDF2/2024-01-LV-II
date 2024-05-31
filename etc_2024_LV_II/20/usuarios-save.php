<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);

$password =  $_POST['password'];
$password_hash = password_hash($password, PASSWORD_BCRYPT);
    
$result = $usuarioDAO->create(
    $_POST['nome'],
    $_POST['email'],
    $password_hash,
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



