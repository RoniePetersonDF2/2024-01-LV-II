<?php
session_start();
include 'src/models/dao/logindao.php';
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dao = new LoginDAO($array_usuarios);
    $loginSuccesso = $dao->Login($_POST['nome'], $_POST['password']);
    if (!$loginSuccesso) {
        session_destroy();
        header('Location: login.php?message=Usuário ou senha inválidos!&type=error');
        exit;
    } else {
        $_SESSION['usuario'] = [
            'id'        => $_POST['id'],
            'nome'      => $_POST['nome'],
            'carrinho'  => null,
        ];
        header('Location: index.php');
        exit;
    }
}
?>
<?php include 'inc/header.php'; ?>

<main class="container">
    <h1>Login</h1>

    <hr>

    <br>
    <?php if (isset($_GET['message'])) : ?>
        <div class="row">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_GET['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <form action="" method="post">

        <div class="mb-3">
            <label for="nome" class="form-label">Email address</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome." required autofocus>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Example textarea</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Informe o password." required>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Login</button>
            <a href="/" class="btn btn-warning">Voltar</a>
        </div>

    </form>

</main>

<?php include 'inc/footer.php'; ?>