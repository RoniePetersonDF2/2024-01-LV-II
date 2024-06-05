<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header('Location: ../index.php?message=Carrinho vazio');
    exit;
}

$carrinho = $_SESSION['usuario']['carrinho'] ?? [];
$count = 0;
$total = 0;
?>
<?php include '../inc/header.php'; ?>

<main class="container">
    <h1 class="mb-5">Carrinho</h1>
    
    <div class="row mb-3">
        <div class="col">
            <a href="../index.php">Home</a>            
        </div>
        
        <div class="col">
            <a href="cart-finalizar.php"
            onclick="return confirm('Deseja finalizar a operação?');">Finalizar compras</a>
        </div>
    </div>

    <table class="table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($carrinho) > 0) : ?>
                <?php foreach ($carrinho as $item) : $count++; $total+= $item['preco'] * $item['quantidade']; ?>
                    <tr>
                        <td><?= $count; ?></td>
                        <td><?= $item['nome']; ?></td>
                        <td>R$ <?= number_format($item['preco'], 2, ',', '.'); ?></td>
                        <td><?= $item['quantidade']; ?></td>
                        <td>
                            <a class="btn btn-success" href="cart-remove.php?id=<?=$item['id'];?>">Remover</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Não existem produtos no carrinho.</td>
                </tr>
            <?php endif; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" >Total: <b>R$ <?= number_format($total, 2, ',', '.'); ?></b></td>
            </tr>
        </tfoot>
    </table>
    
    <br>

</main>

<?php include '../inc/footer.php'; ?>
