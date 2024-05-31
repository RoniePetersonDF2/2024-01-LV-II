<?php
    $valor = $_GET['valor'];
    $texto = " Concateando string com valor: ";

    # concatenando ou juntando strings.
    echo $texto . " - " . $valor . "<br>";
    
    # outra forma de concatenação
    echo "<p>Meu valor" . $valor . "</p>";
    # mais uma forma forma de concatenação
    echo $texto . $valor;
    # mais uma forma forma de concatenação
    echo "<p>$valor</p>" . "exibido em outra linha.";

?>
<hr>
<a href="index.php">Voltar</a>