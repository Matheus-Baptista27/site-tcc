<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site-voe";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Captura os dados do formulário
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Insere os dados na tabela `feedbacks`
$sql = "INSERT INTO feedbacks (name, email, date, message) VALUES ('$name', '$email', '$date', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
    echo "<a href='index.php'>Voltar para o site</a>";
} else {
    echo "Erro ao enviar o feedback: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
