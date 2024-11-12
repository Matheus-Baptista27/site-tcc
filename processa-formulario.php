

<!DOCTYPE html>
<html lang="pt-BR"> 
  <head>
    <!-- Site Titulo -->
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

  //$valor_investimento = $_POST['valor_investimento'];
  //var_dump($_POST);
  $valor_invest = $_POST['valor_investimento'];
  $valor_investimento = intval($valor_invest);
  $cidade_para = "Taquara";
  $tipo = "Hotel";


  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
  }


  $sql = "SELECT *, SUM(valor) AS calculo 
  FROM estabelecimento 
  WHERE cidade = '$cidade_para' 
  GROUP BY id
  AND tipo = '$tipo'
  HAVING calculo <= $valor_investimento;
  ";
  $consulta = mysqli_query($conn, $sql);

  // Verifica se a consulta foi bem-sucedida
  if ($consulta) {
    while ($row = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
      
  ?>

  
<div class="container">
        <div class="row">
            <div class="col-12">
  <table class="table table-hover mt-4">
    <thead class="table-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Valor</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Tipo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
              echo "<tr>";
              echo "<td><img src='images/" . htmlspecialchars($row['foto']) . "' alt='Imagem do Estabelecimento' class='lista_foto' style='width: 100px; 100px; height: 100px; object-fit: cover; border-radius: 50px;'></td>";
              echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
              echo "<td>R$" . htmlspecialchars($row['valor']) . "</td>";
              echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
              echo "<td>" . htmlspecialchars($row['cidade']) . "</td>";
              echo "<td>" . htmlspecialchars($row['tipo']) . "</td>";
              echo "</tr>";
        ?>
      </tr>
    </tbody>

  </div>
  </div>
  </div>
  <?php      
    }

  } else {
    echo "Erro na consulta: " . mysqli_error($conn);
  }

  // Fechar a conexão
  mysqli_close($conn);

  ?> 

</body>
</html>