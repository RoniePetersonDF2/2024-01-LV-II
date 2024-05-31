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
include 'inc/header.php';
?>
<main>

    <h1>Alterar Usuário</h1>

    <br>

    <form action="usuarios-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <ul>
            <li>
                <h2>Nome</h2>

                <p>
                    <input class="form-controle" type="text" name="nome" placeholder="Informe o nome do usuário." required autofocus value="<?= $usuario['nome'] ?? ''; ?>">
                </p>
            </li>

            <li>
                <h2>E-mail</h2>

                <p>
                    <input class="form-controle" type="email" name="email" placeholder="Informe o e-mail do usuário." required value="<?= $usuario['email'] ?? ''; ?>">
                </p>
            </li>

            <li>
                <h2>Status</h2>

                <p>
                    <select name="status" class="form-controle">
                        <option value="1" <?= ($usuario['statususuario'] == '1') ? 'selected' : ''; ?>>Ativo</option>
                        <option value="0" <?= ($usuario['statususuario'] == '0') ? 'selected' : ''; ?>>Inativo</option>
                    </select>
                </p>
            </li>

            <li>
                <h2>Tipo</h2>

                <p>
                    <select name="tipo" class="form-controle">
                        <option value="ADMIN" <?= ($usuario['tipousuario'] == 'ADMIN') ? 'selected' : ''; ?>>Administrador</option>
                        <option value="USUARIO" <?= ($usuario['tipousuario'] == 'USUARIO') ? 'selected' : ''; ?>>Usuário</option>
                        <option value="ANALISTA" <?= ($usuario['tipousuario'] == 'ANALISTA') ? 'selected' : ''; ?>>Analista</option>
                    </select>
                </p>
            </li>

        </ul>

        <div class="container-form-buttons">
            <button class="btn-button">Atualizar</button>
            <a class="btn btn-voltar" href="usuarios.php">Voltar</a>
        </div>
    </form>
</main>

<?php include 'inc/footer.php'; ?>