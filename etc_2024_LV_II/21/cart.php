<?php
session_start();
var_dump($_SESSION); exit;
if (!isset($_SESSION["usuario"])) {
    header('Location: index.php?message=Carrinho vazio');
    exit;
}

$cart = $_SESSION["carrinho"]['']
?>
<?php include 'inc/header.php'; ?>

<main class="container">
    <h1>Carrinho</h1>
    
</main>

<?php include 'inc/footer.php'; ?>