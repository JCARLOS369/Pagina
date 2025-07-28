<?php
// Configuración de conexión
$host = "localhost";
$user = "root";         // Cambia si tienes otro usuario
$password = "";         // Cambia si tienes contraseña
$database = "almacen";  // Tu base de datos

// Crear conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta: contar registros de la tabla registroalmacen
$sql = "SELECT COUNT(*) AS total FROM registroalmacen";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(["total" => 0]);
}

$conn->close();
?>