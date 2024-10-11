<?php
// Conexão com o banco de dados
include 'conn.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenha os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    // Preparando a consulta para atualizar o registro
    $query = "UPDATE estabelecimento SET nome = ?, email = ?, telefone = ?, cidade = ?, endereco = ?, estado = ?, cep = ?, tipo = ?, valor = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssssdi", $nome, $email, $telefone, $cidade, $endereco, $estado, $cep, $tipo, $valor, $id);

    // Executa a consulta e verifica se foi bem-sucedida
    if ($stmt->execute()) {
        echo "Estabelecimento atualizado com sucesso!";
        header("Location: cadastro-admin.php");
        exit;
    } else {
        echo "Erro ao atualizar o estabelecimento: " . $stmt->error;
    }
}
?>
