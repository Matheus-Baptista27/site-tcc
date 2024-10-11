<?php
// Iniciar a sessão
session_start();

// Incluir a conexão com o banco de dados
include 'conn.php';

// Verificar se o ID do registro a ser excluído foi passado
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Garantir que o ID é um número inteiro

    // Query para excluir o registro
    $sql = "DELETE FROM estabelecimento WHERE id = $id";

    // Executar a query e verificar o sucesso
    if (mysqli_query($conn, $sql)) {
        // Armazenar a mensagem na sessão
        $_SESSION['mensagem'] = "Registro excluído com sucesso!";
        $_SESSION['tipo_mensagem'] = 'danger'; // Alerta de erro, use 'success' se quiser um alerta de sucesso
    } else {
        // Mensagem de erro em caso de falha na exclusão
        $_SESSION['mensagem'] = "Erro ao excluir o registro: " . mysqli_error($conn);
        $_SESSION['tipo_mensagem'] = 'danger';
    }
}

// Redirecionar de volta para a página de cadastro ou onde deseja mostrar a mensagem
header("Location: cadastro-admin.php");
exit;
