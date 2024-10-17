<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site-voe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se os dados foram enviados pelo formulário
$feedbackSuccess = false; // Variável para indicar sucesso no envio

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização dos dados recebidos
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Insere os dados no banco
    $sql = "INSERT INTO feedback (name, email, date, message) VALUES ('$nome', '$email', '$date', '$message')";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $date, $message);
        if ($stmt->execute()) {
            $feedbackSuccess = true; // Define que a inserção foi bem-sucedida
        } else {
            // Exibe erro específico da execução
            echo "Erro ao salvar feedback: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // Exibe erro específico da preparação da query
        echo "Erro na preparação da consulta: " . $conn->error;
    }
    $conn->close();
}
?>
