<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);

$result = $usuarioDAO->update(
    $_POST['id'],
    $_POST['nome'],
    $_POST['email'],
    $_POST['tipo'],
    $_POST['status']
);

if ($result) {
    header('location: usuarios.php?message=Usuário atualizado com sucesso!');
    exit();
} else {
    echo $conn->errorInfo();
    exit('Erro ao atualizar usuário');
}



