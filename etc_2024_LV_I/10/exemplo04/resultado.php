<?php
    $sexo = $_GET['sexo'];
    $retorno = $sexo == "masculino" ? "MASCULINO" : "FEMININO";

    echo "<p>A opção escolhida foi $retorno</p>";
      
?>
<hr>
<a href="index.php">Voltar</a>