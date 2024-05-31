<?php
session_start();
include 'models/database/database.php';
include 'models/dao/usuariodao.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $conn =  Database::getConexao();
    $usuarioDAO = new UsuarioDAO($conn);
    $usuario = $usuarioDAO->getByEmail($email);

    if (!$usuario) {
        header('Location: login-recuperar.php?message=E-mail inválidos.&type=error');
        exit();
    }
    header('Location: login.php?message=E-mail de recuperação de senha enviado para o usuário.');
    exit();
}
?>
<?php include 'inc/header.php'; ?>
<main>
    <h1 class="login-title">Login</h1>

    <form method="post" class="login-form">
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="Informe o e-mail." required autofocus>

        <div class="container-form-buttons">
            <button class="btn-button">Recuperar</button>
            <a href="login.php" class="btn btn-voltar">Voltar</a>
        </div>
    </form>
</main>
<?php include 'inc/footer.php'; ?>