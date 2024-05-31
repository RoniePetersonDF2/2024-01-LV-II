<?php
    $valor = $_GET['valor'];

    # retornando a string.
    echo "<p>A string informada foi: $valor</p>";
    # retornando o tamanho da string.
    echo "<p>O tamanho é: " . strlen($valor) . "</p>";
    # retirando espaços vazios antes ou depois da string .
    echo "<p>A função trim tira espaços: " . trim($valor) . "</p>";
    # tranformando as letras da string para maiusculas.
    echo "<p>Transformando para maiusculas: " . strtoupper($valor) . "</p>";
    # tranformando as letras da string para minusculas.
    echo "<p>Transformando para minusculas: " . strtolower($valor) . "</p>";
    # retornando a quantidade de palavras  da string.
    echo "<p>O tamanho é: " . str_word_count($valor) . "</p>";
    # Localizando a posição de uma parte da string.
    echo "<p>A posição onde inicia o valor procurado é: " . strpos($valor, "Ron") . "</p>";
    # Substituindo um valor em uma string por outro.
    echo "<p>Substituindo valores em strings: " . str_replace("Ronie", "João", $valor) . "</p>";
    # invertendo a string.
    echo "<p>String invertida: " . strrev($valor) . "</p>";
?>
<hr>
<a href="index.php">Voltar</a>