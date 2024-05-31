<?php
    # metodo PHP usado para que possamos usar acentuação.
    header('Content-Type: text/html; charset=utf-8;');

    include 'src/veiculo.php';

    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $combustivel = $_POST['combustivel'];
    # criando instancia da classe Veiculo e armazenando na variável $corsa.
    # quando usamos parâmetros em métodos construtores, é o obrigatório passar o valor. 
    $omega = new Veiculo($cor, $combustivel, $marca, $modelo);
    # acessando o método toString.
    echo $omega; 

?>
<hr>
<a href="index.php">Voltar</a>