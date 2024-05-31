<?php
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];

    # verificando se o valor 1 é maior que o valor 2.
    if ($valor1 > $valor2) {
        echo "<p>O valor 1: $valor1 e maior que o valor 2: $valor2</p>";
    }

?>
<hr>
<a href="index.php">Voltar</a>