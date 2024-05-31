<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>Exercício</h1>
    <form action="resultado.php" method="POST">
        <label>Informe o número</label>
        <input type="number" name="numero" min="10" max="1000" required autofocus> <br>
        <br><br>     
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>