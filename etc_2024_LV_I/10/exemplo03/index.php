<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <form action="resultado.php" method="get">
        Nome <br>
        <input type="text" name="nome" required autofocus><br>
        Estado civil <br>
        <select name="estado">
            <option value="casado">Casado</option>
            <option value="uniaoestavel">União estável</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viuvo</option>
        </select><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>