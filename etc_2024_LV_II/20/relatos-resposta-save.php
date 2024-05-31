<?php
session_start();

include 'models/database/database.php';
include 'models/dao/respostadao.php';
include 'models/dao/relatodao.php';

$conn =  Database::getConexao();
$respostaDAO = new RespostaDAO($conn);
$relatoDAO = new RelatoDAO($conn);

$usuarioId = isset($_SESSION['usuario']) ? $_SESSION['usuario']['id'] : 0;
$relatoId =$_POST['relatoId'];
$resposta =  trim($_POST['resposta']);

$resultado = $respostaDAO->create(
    $resposta,
    $relatoId,
    $usuarioId    
);

#update status relato.
$statusResposta = $_POST['statusResposta'];
$resultado = $relatoDAO->updateStatusRelato(
    $relatoId,
    $statusResposta
);
if ($resultado) {
    header("Location: relatos-show.php?id=$relatoId&message=Resposta ao relato registrado com sucesso!");
    exit();
} else {
    echo $conn->errorInfo();
}