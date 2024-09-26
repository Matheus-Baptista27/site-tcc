<?php
include 'conn.php';

$nome = mb_strtoupper($_POST['nome']);
$senha = $_POST['senha'];

try {
    // Consulta para buscar o usuário pelo nome
    $query = "SELECT * FROM usuario WHERE nome = :nome";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(":nome", $nome);
    $stmt->execute();

    // Pega o resultado da consulta
    $result = $stmt->fetch();

    if ($result) {
        // Verifica se a senha informada corresponde à hash armazenada
        if (password_verify($senha, $result['senha'])) {
            session_start();
            $_SESSION['nome'] = $nome;
            $_SESSION['nivel'] = $result['TIPO_ACESSO'];
            $_SESSION['ID'] = $result['ID_USUARIO'];

            // Redireciona para a página inicial
            header("Location: index.php");
            exit();
        } else {
            // Senha incorreta
            header("Location: login.php?status=erro");
            exit();
        }
    } else {
        // Usuário não encontrado
        header("Location: login.php?status=erro");
        exit();
    }
} catch (Exception $e) {
    // Em produção, evite exibir mensagens de erro para o usuário final
    echo "Ocorreu um erro no login.";
    error_log($e->getMessage()); // Para log de erros no servidor
}
?>
