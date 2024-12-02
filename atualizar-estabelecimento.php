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
    $local = $_POST['local'];
    $valor = $_POST['valor'];

    // Preparando a consulta para atualizar o registro
    $query = "UPDATE estabelecimento SET nome = ?, email = ?, telefone = ?, cidade = ?, endereco = ?, estado = ?, cep = ?, tipo = ?, local = ?, valor = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssssdi", $nome, $email, $telefone, $cidade, $endereco, $estado, $cep, $tipo, $local, $valor, $id);

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
