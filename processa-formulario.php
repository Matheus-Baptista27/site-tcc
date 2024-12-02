<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Listagem de Roteiro</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .lista_foto {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">LISTAGEM DE ROTEIRO</h1>

    <?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "site-voe";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo '<div class="container text-center mt-4">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Erro ao conectar!</h4>
                    <p>Não foi possível se conectar ao banco de dados. Verifique a configuração e tente novamente.</p>
                    <hr>
                    <p class="mb-0">Erro: ' . htmlspecialchars($conn->connect_error) . '</p>
                </div>
              </div>';
        exit;
    }

    // Pegando os dados do formulário
    $valor_invest = $_POST['valor_investimento'];
    $valor_investimento = intval($valor_invest);
    $cidade_para = strtolower($_POST['cidade_para']);
    $tipos = isset($_POST['tipo']) ? $_POST['tipo'] : [];

    // Montando a consulta
    $sql = "SELECT * FROM estabelecimento 
        WHERE (valor <= $valor_investimento OR valor IS NULL)";
        
        if (!empty($cidade_para)) {
            $sql .= " AND cidade = '$cidade_para'";
        }

        if (!empty($tipos)) {
            $tipo_condition = "'" . implode("','", array_map(function ($tipo) use ($conn) {
                return mysqli_real_escape_string($conn, $tipo);
            }, $tipos)) . "'";
            $sql .= " AND tipo IN ($tipo_condition)";
        }


    $consulta = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida
    if ($consulta) {
        if (mysqli_num_rows($consulta) > 0) {
            echo '<div class="container"><div class="row"><div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover mt-4">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Local</th>
                                </tr>
                            </thead>
                            <tbody>';
            while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td><img src='images/" . htmlspecialchars($row['foto']) . "' alt='Imagem do Estabelecimento' class='lista_foto'></td>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>R$" . htmlspecialchars($row['valor']) . "</td>";
                echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
                echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['local']) . "</td>";
                echo "</tr>";
            }
            echo '</tbody></table></div></div></div></div>';
        } else {
            echo '<div class="container text-center mt-4">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Nenhum resultado encontrado!</h4>
                        <p>Parece que não encontramos nenhum estabelecimento com os critérios selecionados.</p>
                        <hr>
                        <p class="mb-0">Tente ajustar os filtros ou <a href="index.php" class="alert-link">explore outras categorias</a>.</p>
                    </div>
                  </div>';
        }
    } else {
        echo '<div class="container text-center mt-4">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Erro na consulta!</h4>
                    <p>Ocorreu um problema ao realizar a consulta. Por favor, tente novamente mais tarde.</p>
                    <hr>
                    <p class="mb-0">' . htmlspecialchars(mysqli_error($conn)) . '</p>
                </div>
              </div>';
    }

    mysqli_close($conn);
    ?>

    <div class="container text-center">
        <a href="index.php" class="btn btn-primary mt-4">
            <i class="fas fa-arrow-left"></i> Voltar para o Formulário
        </a>
    </div>
</body>
</html>
