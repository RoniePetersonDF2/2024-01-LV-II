<?php
session_start();
include 'config.php';
include 'src/models/dao/produtodao.php';

$dao = new ProdutoDAO($array_produtos);
$produtos = $dao->getAll();
?>
<?php include 'inc/header.php'; ?>

<main class="container">
    <h1>Loja</h1>

    <hr>
    <div class="row">
        <?php if (!isset($_SESSION['usuario'])) : ?>
            <div class="col">
                <a href="login.php">Login</a>
            </div>
        <?php else : ?>
            <div class="col-auto">
                <a href="carrinho/cart.php">Carrinho</a> 
            </div>
            <div class="col-auto">
                <a href="logout.php">Logout</a>
            </div>

        <?php endif; ?>

    </div>

    <br>

    <?php if (isset($_GET['message'])) : ?>
        <div class="row">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $_GET['message']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <div class="row align-items-center">
        <?php foreach ($produtos as $produto) : ?>
            <div class="col-xs col-md-6 col-lg-3">
                <div class="card" style="min-width: 18rem;">
                    <img src="assets/img/<?=$produto['imagem']??'cafe.jpg'?>" class="card-img-top" alt="imagem de café" style="height: 22vh;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produto['nome']; ?></h5>
                        <p class="card-text"><?= $produto['descricao']; ?></p>
                        <b>R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></b>
                    </div>
                    <div class="card-footer">
                        <?php if (isset($_SESSION['usuario'])) : ?>
                            <a href="carrinho/cart-add.php?id=<?= $produto['id'] ?>" class="btn btn-primary">Adicionar</a>
                        <?php endif; ?>
                        <a href="carrinho/cart-show.php?id=<?= $produto['id'] ?>" class="btn btn-success">Ver</a>
                    </div>
                </div>
                <br>
            </div>
            <br>

        <?php endforeach; ?>
    </div>
</main>

<?php include 'inc/footer.php'; ?>
