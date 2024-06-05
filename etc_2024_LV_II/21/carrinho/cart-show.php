<?php
include '../config.php';
include '../src/models/dao/produtodao.php';

$id = $_GET['id'] ?? 0;

$dao = new ProdutoDAO($array_produtos);
$produto = $dao->getById($id);

if ($produto == false) {
    header('Location: ../index.php?message=Produto não encontrado!&type=error');
    exit;
}

$preco = number_format($produto['preco'], 2,',', '.');

?>

<?php include '../inc/header.php'; ?>

<main class="container">
    <h1 class="mt-3 text-center">Produto</h1>

    <hr>

    <div class="card">
        <img src="../assets/img/<?= $produto['imagem']; ?>" alt="" class="card-img-top">

        <div class="card-header">
            <h5 class="card-title">
                <?= $produto['nome']; ?>
            </h5>
        </div>

        <div class="card-body">
            <p class="card-text">
                <?= $produto['descricao']; ?>
            </p>

            <p class="card-text">
            <b>R$: </b><?= $preco; ?>
            </p>
        </div>

        <div class="card-footer text-center">
            <a href="../index.php" class="btn btn-success">Voltar</a>
        </div>
    </div>
</main>

<?php include '../inc/footer.php'; ?>
