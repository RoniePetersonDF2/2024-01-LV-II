<?php
    $nome = $_GET['nome'];
    $estadoCivil = $_GET['estado'];

    if ($estadoCivil == "casado") {
        echo "<p>O $nome tem o estado civil: $estadoCivil</p>";
    } elseif ($estadoCivil == "uniaoestavel") {
        echo "<p>O $nome tem o estado civil: $estadoCivil</p>";
    } elseif ($estadoCivil == "divorciado") {
        echo "<p>O $nome tem o estado civil: $estadoCivil</p>";
    } elseif ($estadoCivil == "viuvo") {
        echo "<p>O $nome tem o estado civil: $estadoCivil</p>";
    } else {
        echo "<p>O $nome tem o estado civil: Solteiro</p>";
    }
      
?>
<hr>
<a href="index.php">Voltar</a>