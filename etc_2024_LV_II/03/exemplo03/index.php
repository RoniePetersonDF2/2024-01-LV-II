<?php

    session_start();

    if (isset($_SESSION['count']))
    {
        $_SESSION['count'] = $_SESSION['count'] + 1;
    } else {
        $_SESSION['count'] = 1;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
    <h1>Contador</h1>
    <?php
        echo "Contador = " . $_SESSION['count'];
    ?>
</body>
</html>