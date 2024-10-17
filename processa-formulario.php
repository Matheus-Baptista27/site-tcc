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

// Recebendo os dados do formulário
$investment_value = isset($_POST['investment_value']) ? floatval(str_replace('R$', '', str_replace(',', '.', $_POST['investment_value']))) : null;
$city_from = $_POST['city_from'] ?? null;
$city_to = $_POST['city_to'] ?? null;
$date = $_POST['date'] ?? null;
$days = $_POST['days'] ?? null;
$establishment_types = $_POST['establishment_type'] ?? [];
$place_type = $_POST['place_type'] ?? null;

// Montando a query com base nos filtros
$sql = "SELECT * FROM destinos WHERE 1=1";

// Adicionando os filtros na query
if ($investment_value) {
    $sql .= " AND investimento_max <= $investment_value";
}

if ($city_from) {
    $sql .= " AND cidade_origem = '$city_from'";
}

if ($city_to) {
    $sql .= " AND cidade_destino = '$city_to'";
}

if ($date) {
    $sql .= " AND data_inicio <= '$date'";
}

if ($days) {
    $sql .= " AND dias_disponiveis >= $days";
}

if ($place_type) {
    $sql .= " AND tipo_local = '$place_type'";
}

// Adicionando os tipos de estabelecimento se houver
if (!empty($establishment_types)) {
    $types = implode("','", $establishment_types);
    $sql .= " AND tipo_estabelecimento IN ('$types')";
}

// Executando a query
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultados da Pesquisa</title>
    <!-- Inclua aqui o CSS e outras dependências -->
</head>
<body>

<!-- Formulário original aqui -->

<!-- Seção para exibir os resultados -->
<section>
    <h3>Resultados da Pesquisa</h3>
    <?php if ($result->num_rows > 0): ?>
        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <h4><?php echo htmlspecialchars($row['nome_destino']); ?></h4>
                    <p>Local: <?php echo htmlspecialchars($row['cidade_destino']); ?></p>
                    <p>Investimento Médio: R$<?php echo number_format($row['investimento_max'], 2, ',', '.'); ?></p>
                    <p>Tipo de Estabelecimento: <?php echo htmlspecialchars($row['tipo_estabelecimento']); ?></p>
                    <!-- Exibir outros dados conforme necessário -->
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum resultado encontrado com os critérios selecionados.</p>
    <?php endif; ?>
</section>

<?php
$conn->close();
?>
</body>
</html>
