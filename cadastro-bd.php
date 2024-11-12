<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro BD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <?php
    // Iniciar a sessão
    session_start();

    if (isset($_SESSION['nome_foto'])) {
        $nome_foto = $_SESSION['nome_foto'];
        echo "<img src='images/$nome_foto' title='$nome_foto' alt='Imagem do Estabelecimento' style='max-width: 200px; max-height: 200px;'>";
        unset($_SESSION['nome_foto']); // Limpa a variável da sessão após exibir a imagem
    }
    

    // Incluir a conexão com o banco de dados
    include 'conn.php';

     // Função para exibir mensagens
     function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
    }

    function mover_foto($vetor_foto) {
        if (!$vetor_foto['error']) {
            $extensao = pathinfo($vetor_foto['name'], PATHINFO_EXTENSION); // Obter extensão correta
            $nome_arquivo = date('YmdHis') . "." . $extensao; // Nome do arquivo com data e extensão
            $caminho = "images/" . $nome_arquivo;
    
            if (move_uploaded_file($vetor_foto['tmp_name'], $caminho)) {
                return $nome_arquivo; // Retornar o nome do arquivo para salvar no BD
            }
        }
        return null;
    }
    

    // Verificar se o formulário foi enviado via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastrar') {
        // Capturar os dados do formulário
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone']);
        $cidade = trim($_POST['cidade']);
        $endereco = trim($_POST['endereco']);
        $estado = trim($_POST['estado']);
        $cep = trim($_POST['cep']);
        $tipo = trim($_POST['tipo']);
        $valor = trim($_POST['valor']);

        $foto = $_FILES['foto'];
        $nome_foto = mover_foto($foto) ?: '';

        // Query para inserir os dados
        $sql = "INSERT INTO estabelecimento (nome, email, telefone, cidade, endereco, estado, cep, tipo, valor, foto) VALUES ('$nome', '$email', '$telefone', '$cidade', '$endereco', '$estado', '$cep', '$tipo', '$valor', '$nome_foto')";

        // Executar a query e verificar o sucesso
    if (mysqli_query($conn, $sql)) {
        
        if ($nome_foto) {
            $_SESSION['nome_foto'] = $nome_foto; // Armazena o nome da imagem na sessão
        }

        // Armazenar a mensagem na sessão
        $_SESSION['mensagem'] = "$nome cadastrado com sucesso!";
        $_SESSION['tipo_mensagem'] = 'success';

        // Redirecionar para evitar reenvio ao atualizar a página
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        mensagem("$nome não foi cadastrado! Erro: " . mysqli_error($conn), 'danger');
    }
}

// Exibir a mensagem da sessão, se existir
if (isset($_SESSION['mensagem'])) {
    mensagem($_SESSION['mensagem'], $_SESSION['tipo_mensagem']);
    // Limpar a mensagem da sessão
    unset($_SESSION['mensagem'], $_SESSION['tipo_mensagem']);
}

    // Buscar todos os registros cadastrados
    $result = mysqli_query($conn, "SELECT * FROM estabelecimento");
    
      // Buscar registros cadastrados ou filtrar pelo nome
      $termoPesquisa = isset($_GET['pesquisa']) ? trim($_GET['pesquisa']) : ''; // Certifica-se de que a variável está definida
      if ($termoPesquisa) {
          $sql = "SELECT * FROM estabelecimento WHERE nome LIKE '%$termoPesquisa%'";
      } else {
          $sql = "SELECT * FROM estabelecimento";
      }
      $result = mysqli_query($conn, $sql);
      
      ?>
    

    <h1>Cadastro BD</h1>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <form class="d-flex" role="search" action="cadastro-bd.php" method="GET">
                <input class="form-control me-2" type="search" name="pesquisa" placeholder="Nome da empresa" aria-label="Search" autofocus value="<?php echo htmlspecialchars($termoPesquisa); ?>">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    
    <table class="table table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Endereço</th>
                <th scope="col">Estado</th> 
                <th scope="col">CEP</th>
                <th scope="col">Tipo</th>
                <th scope="col">Valor (R$)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop para exibir cada registro como uma linha da tabela
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><img src='images/" . htmlspecialchars($row['foto']) . "' alt='Imagem do Estabelecimento' class='lista_foto' style='width: 100px; 100px; height: 100px; object-fit: cover; border-radius: 50px;'></td>";
                    echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['telefone']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cep']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['valor']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9' class='text-center'>Nenhum estabelecimento cadastrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="register.php" class="btn btn-primary mt-4">Voltar para cadastro</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

