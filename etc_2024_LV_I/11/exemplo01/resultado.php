<?php
$nome = $_POST['nome'];
$estadoCivil = $_POST['estadoCivil'];
switch ($estadoCivil) {
    case '1':
        $estadoCivil = 'Solteiro';
        break;
    case '2':
        $estadoCivil = 'Casado';
        break;
    case '3':
        $estadoCivil = 'União estavel';
        break;
    case '4':
        $estadoCivil = 'Divorciado';
        break;
    case '5':
        $estadoCivil = 'Viuvo';
        break;
    default:
        $estadoCivil = "Nenhuma das opçoes";
}
echo "<p>O nome enviado foi: " . $nome . "</p>";
echo "<p>Seu estado civil e: " . $estadoCivil . "</p>";
?>
<hr>
<a href="index.php">Voltar</a>