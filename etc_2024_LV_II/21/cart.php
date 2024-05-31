<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header('Location: index.php?message=Carrinho vazio');
    exit;
}

$carrinho = $_SESSION['usuario']['carrinho'] ?? [];
$count = 0;
?>
<?php include 'inc/header.php'; ?>

<main class="container">
    <h1>Carrinho</h1>

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($carrinho) > 0) : ?>
                <?php foreach ($carrinho as $item) : $count++; ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= $item['nome']; ?></td>
                        <td><?= $item['preco']; ?></td>
                        <td>
                            <a class="btn btn-success" href="cart-remove.php?id=<?=$item['id'];?>">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="4">Não existem produtos no carrinho.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
    <br>

    <a href="index.php">Home</a>
</main>

<?php include 'inc/footer.php'; ?>
