<?php
session_start();
include 'models/database/database.php';
include 'models/dao/usuariodao.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $conn =  Database::getConexao();
    $usuarioDAO = new UsuarioDAO($conn);
    $usuario = $usuarioDAO->getByEmail($email);

    $password = $_POST['password'];
    $password_verificado = password_verify($password, $usuario['password']);

    if (!$usuario || $password_verificado == false) {
        header('Location: login.php?message=Usuário ou senha inválidos.&type=error');
        exit();
    }

    $_SESSION["usuario"] = [
        'id'    => $usuario['id'],
        'nome'  => $usuario['nome'],
        'tipo'  => $usuario['tipousuario'],
    ];

    header('Location: index.php');
    exit();
}
?>
<?php include 'inc/header.php'; ?>
<main>
    <?php include 'inc/message.php'; ?>

    <h1 class="login-title">Login</h1>

    <form action="" method="post" class="login-form">
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="Informe o e-mail." required autofocus>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Informe sua senha." required>

        <div class="login-links">
            <a href="login-recuperar.php">Recuperar senha</a>
            <a href="login-create.php">Cadastre-se</a>
        </div>

        <div class="container-form-buttons">
            <button class="btn-button">Login</button>
            <a href="index.php" class="btn btn-voltar">Voltar</a>
        </div>
    </form>
</main>
<?php include 'inc/footer.php'; ?>