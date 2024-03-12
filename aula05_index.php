<?php
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        var_dump($_POST);
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pessoas</title>
</head>
<body>
	<h1>Cadastro de pessoas</h1>

	<form method="post">
		<div>

			<label for="">CPF</label><br>
			
			<input 
            type="text" 
            name="cpf" 
            placeholder="Informe o número do CPF.">

		</div>
		
		<div>

			<label for="">Nome</label><br>
			
			<input 
            type="text" 
            name="nome" 
            placeholder="Informe seu nome.">

		</div>
		
		<div>

			<label for="">E-mail</label><br>

			<input 
            type="email" 
            name="email" 
            placeholder="Informe seu e-mail.">

		</div>
    
    <hr>

		<button>Enviar</button>
	</form>
</body>
</html>
