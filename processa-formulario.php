<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
    <title>Listagem de Roteiro</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
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
          die("Conexão falhou: " . $conn->connect_error);
      }
    // Exibir os dados recebidos para depuração
    //echo "Valor Investimento: " . $_POST['valor_investimento'] . "<br>";
    //echo "Cidade de Destino: " . $_POST['cidade_para'] . "<br>";
    //echo "Tipo de Local: " . $_POST['tipo'] . "<br>";

    // pegando os dados do formulario
    $valor_invest = $_POST['valor_investimento'];
    $valor_investimento = intval($valor_invest);
    $cidade_para = strtolower($_POST['cidade_para']);
    $tipos = isset($_POST['tipo']) ? $_POST['tipo'] : []; 

    // Modificar a consulta para não usar SUM(valor) e garantir a comparação direta
    $sql = "SELECT * FROM estabelecimento 
            WHERE valor <= $valor_investimento";

    // adicionar a filtragem pela cidade e tip ode estabelecimento
    if (!empty($cidade_para)) {
      $sql .= " AND cidade = '$cidade_para'";
    }


    if (!empty($tipos)) {
      // Use array_map para escapar os valores e criar a condição 'IN'
      $tipo_condition = "'" . implode("','", array_map(function ($tipo) use ($conn) {
          return mysqli_real_escape_string($conn, $tipo);
      }, $tipos)) . "'";
      $sql .= " AND tipo IN ($tipo_condition)";
  }


    // Depuração: exibe a consulta SQL
    //echo "Consulta SQL: " . $sql . "<br>";

    $consulta = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida
    if ($consulta) {
        if (mysqli_num_rows($consulta) > 0) {
            echo '<div class="container"><div class="row"><div class="col-12"><table class="table table-hover mt-4">
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
                    </thead><tbody>';

            while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
                //echo "Valor no banco de dados: " . $row['valor'] . "<br>";  
                echo "<tr>";
                echo "<td><img src='images/" . htmlspecialchars($row['foto']) . "' alt='Imagem do Estabelecimento' class='lista_foto' style='width: 100px; height: 100px; object-fit: cover; border-radius: 50px;'></td>";
                echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                echo "<td>R$" . htmlspecialchars($row['valor']) . "</td>";
                echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
                echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
                echo "<td>" . htmlspecialchars($row['local']) . "</td>";
                echo "</tr>";
            }

            echo '</tbody></table></div></div></div>';
        } else {
            echo "Nenhum resultado encontrado.";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

    <a href="index.php" class="btn btn-primary mt-4">Voltar para o Formulário</a>   

</body>
</html>