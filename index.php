<?php
require 'database.php';

// Simular uma consulta de monitoramento
$query = "SELECT * FROM monitoring_data";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Quality: " . $row["water_quality"] . " - Irrigation: " . $row["irrigation_status"] . "<br>";
    }
} else {
    echo "No data available";
}
?>
