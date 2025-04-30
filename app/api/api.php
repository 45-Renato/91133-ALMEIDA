<?php
// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Redireciona para a página inicial se for acesso direto
    header("Location: http://localhost:8081/APP/index.html");
    exit;
}



// Inclui a conexão com o    banco
include 'conexao.php';

// Inclui o script que insere os dados
include 'insere.php';

// Inclui o script que lista os dados
include '/view/conecta.php';



// Mostra alerta e redireciona para o formulário
echo "<script>
    alert('Cadastro realizado com sucesso!');
    window.location.href = 'http://localhost:8081/APP/cad.html';
</script>";
?>