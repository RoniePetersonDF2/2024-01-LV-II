<?php
    $valor = $_GET['valor'];

    # retornando a string.
    echo "<p>O valor informado foi: $valor</p>";
    var_dump($valor);
    echo "<br>";
    # verificando o tipo da variavel se é inteiro
    echo "<p>O valor informado é numerico? " . is_int($valor) . "</p>";
    # convertendo uma string para inteiro.
    $valor = (int) $valor;
    var_dump($valor);
    echo "<p>O valor informado foi: $valor</p>";
    # verificando o tipo da variavel se é inteiro
    echo "<p>O valor informado é numerico? " . is_int($valor) . "</p>";    
?>
<hr>
<a href="index.php">Voltar</a>