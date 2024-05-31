<?php
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

$conn =  Database::getConexao();
$usuarioDAO = new UsuarioDAO($conn);

$id = $_GET['id'] ?? 0;
$usuario = $usuarioDAO->getById($id);
if (!$usuario) {
    header('Location: usuarios.php?message=Usuário não encontrado.');
    exit();
}
?>
<?php include 'inc/header.php'; ?>

<main>
    <h1>Usuário - Nº: <?= $usuario['id']; ?></h1>

    <hr>

    <ul>
        <li>
            <h2>Nome</h2>
            <p><?= $usuario['nome']; ?></p>
        </li>

        <li>
            <h2>E-mail</h2>
            <p><?= $usuario['email']; ?></p>
        </li>

        <li>
            <h2>Tipo</h2>
            <p><?= $usuario['tipousuario']; ?></p>
        </li>

        <li>
            <h2>Status</h2>
            <p><?= $usuario['statususuario']; ?></p>
        </li>
    </ul>

    <br>

    <div class="container-form-buttons">
        <a href="usuarios.php" class="btn btn-voltar">Voltar</a>
    </div>
</main>
<?php include 'inc/footer.php'; ?>