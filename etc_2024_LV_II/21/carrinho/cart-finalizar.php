<?php
session_start();
$carrinho = $_SESSION['usuario']['carrinho'] ?? [];
if (count($carrinho) ==0) {
    header('Location: ../index.php?message=Carrinho vazio.');
    exit;
}

$usuario = $_SESSION['usuario'];

$valorTotal = 0;

foreach ($carrinho as $item) {
    $valorTotal += $item['preco'] * $item['quantidade'];
}


?>

<?php include '../inc/header.php'; ?>

<main class="container">
    <h1 class="mb-5">Finalizar compra</h1>

    <p>
        <a href="cart.php">Voltar</a>
    </p>
    <hr>

    <h3>Cliente</h3>
    <p>
        <b>Nome: </b>
        <?= $usuario['nome']; ?>
    </p>

    <hr>
    <p>
        <b>Endereço: </b>
        <?= '.'; ?>
    </p>
    <p>
        <b>Bairro: </b>
        <?= '.'; ?>
    </p>
    <p>
        <b>Cidade: </b>
        <?= '.'; ?>
    </p>

    <hr>

    <h3>Total compras</h3>
    <p>
        <b>Valor Total: </b>
        <?= number_format($valorTotal, 2, ',', '.');; ?>
    </p>

    <h3>Forma de pagamento</h3>
    <figure>
        <img src="../assets/img/forma-pagamento-pix.png" alt="QR code pix">
    </figure>
</main>

<?php include '../inc/footer.php'; ?>
