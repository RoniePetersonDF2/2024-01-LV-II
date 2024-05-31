<?php
include 'inc/header.php';
include 'models/database/database.php';
include 'models/dao/usuariodao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $conn =  Database::getConexao();
    $usuarioDAO = new UsuarioDAO($conn);
    $usuario = $usuarioDAO->getByEmail($email);
    if ($usuario) {
        header('Location: login-create.php?message=E-mail já cadastrado.&type=error');
        exit;
    }

    $nome = $_POST['nome'];
    $password = $_POST['password'];

    $result = $usuarioDAO->create(
        $nome,
        $email,
        $password,
        'USUARIO',
        1
    );
    if ($result) {
        header('location: login.php?message=Usuário criado com sucesso!');
        exit();
    } else {
        echo $conn->errorInfo();
        exit('Erro ao cadastrar usuário');
    }
}
?>

<?php include 'inc/message.php'; ?>

<h1>Novo usuário</h1>

<br>
<main>
    <form method="post">
        <ul>
            <li>
                <h2>Nome</h2>

                <p>
                    <input class="form-controle" type="text" name="nome" placeholder="Informe o nome do usuário." required autofocus>
                </p>
            </li>

            <li>
                <h2>E-mail</h2>

                <p>
                    <input class="form-controle" type="email" name="email" placeholder="Informe o e-mail do usuário." required>
                </p>
            </li>

            <li>
                <h2>Password</h2>
                <p>
                    <input type="password" name="password" class="form-controle" required placeholder="Informe a senha do usuário.">
                </p>
            </li>
        </ul>

        <div class="container-form-buttons">
            <button class="btn-button">Enviar</button>
            <a class="btn btn-voltar" href="login.php">Voltar</a>

        </div>
    </form>
</main>
<?php include 'inc/footer.php'; ?>