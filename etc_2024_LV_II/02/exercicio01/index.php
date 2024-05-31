<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <main>
        <fieldset>
            <form action="resultado.php" method="post">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Informe seu e-mail." autofocus>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Informe sua senha.">
                <input type="submit" value="Enviar" class="botao">
            </form>
        </fieldset>
    </main>
</body>
</html>