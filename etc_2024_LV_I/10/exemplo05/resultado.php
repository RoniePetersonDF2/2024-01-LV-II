<?php
    $hora = $_GET['hora'];
    
    if ($hora >= 0 && $hora <=12) {
        echo "<p>Bom dia. São: $hora horas.</p>";
    } elseif ($hora > 12 && $hora <19) {
        echo "<p>Boa tarde. São: $hora horas.</p>";;
    } else {
        echo "<p>O Boa noite. São $hora horas.</p>";
    }
?>
<hr>
<a href="index.php">Voltar</a>