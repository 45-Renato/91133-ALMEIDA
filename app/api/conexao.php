<?php
if($_SERVER['REQUEST_METHOD'] !== 'POST') (
    header("Location:http://localhost:8081/APP");
    exit;
)

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "estoque";


$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_erro){

    die("Erro na Conexão:" . $conn->connect_erro);
}

echo("Conectado");
?>