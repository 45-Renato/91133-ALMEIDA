<?php

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: http://localhost:8081/APP/index.html");
    exit;
}

// Recebe os dados do formulário com segurança
$produto = $_POST['produto'] ?? null;
$tipo = $_POST['tipo'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;

if (!$produto || !$tipo || !$quantidade) {
    die("Erro: Dados incompletos.");
}

// Conecta ao banco de dados
$conn = new mysqli("localhost", "root", "", "estoque");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Prepara a query SQL
$sql = "INSERT INTO produtos (produto, tipo, quantidade) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("ssi", $produto, $tipo, $quantidade);

// Executa o insert
if ($stmt->execute()) {
    echo "Produto inserido com sucesso!";
} else {
    echo "Erro ao inserir produto: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
