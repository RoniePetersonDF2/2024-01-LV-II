<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>Trabalhando com formulários e PHP</h1>
    <form action="resultado.php" method="POST">
        <label>Nome</label><br>
        <input type="text" name="nome" required autofocus> <br>
        <label>Estado civil</label><br>
        <select name="estadoCivil">
            <option value="0">Escolha uma opção</option>
            <option value="1">Solteiro</option>
            <option value="2">Casado</option>
            <option value="3">União estavel</option>
            <option value="4">Divorciado</option>
            <option value="5">Viuvo</option>
        </select>
        <br><br>     
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>