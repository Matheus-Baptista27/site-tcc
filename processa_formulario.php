<?php
// conexão BD
include 'conn.php'; 

// RECEBE AQUI OS DADOS DO FORMULARIO
$investment_value = $_POST['investment_value'];
$city_from = $_POST['city_from'];
$city_to = $_POST['city_to'];
$date = $_POST['date'];
$days_available = $_POST['days_available'];
$establishment_type = isset($_POST['establishment_type']) ? implode(', ', $_POST['establishment_type']) : '';
$local_type = $_POST['local_type'];

try {
    // BUSCA OS DETISNOS DO USUARIO
    $query = "SELECT * FROM destinos WHERE valor <= :investment_value AND origem = :city_from AND destino = :city_to AND tipo_local = :local_type";
    
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':investment_value', $investment_value);
    $stmt->bindParam(':city_from', $city_from);
    $stmt->bindParam(':city_to', $city_to);
    $stmt->bindParam(':local_type', $local_type);
    
    $stmt->execute();
    
    $results = $stmt->fetchAll();
    
    if ($results) {
        foreach ($results as $result) {
            // EXIBE AS OPÇÕES DISPONIVEIS
            echo "<div>";
            echo "<h3>Destino: " . $result['nome_destino'] . "</h3>";
            echo "<p>Valor: R$" . $result['valor'] . "</p>";
            echo "<p>Local: " . $result['tipo_local'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Nenhum destino encontrado.";
    }
} catch (Exception $e) {
    echo "Erro ao buscar destinos: " . $e->getMessage();
}
?>
