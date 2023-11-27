<?php
require 'database.php';

// Obtiene el ID del producto desde la solicitud GET
$productoId = $_GET["id"];

try {
    $query = "SELECT * FROM productos WHERE id = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $productoId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $producto = $stmt->fetch(PDO::FETCH_ASSOC);

        // Devuelve los detalles del producto como respuesta JSON
        header('Content-Type: application/json');
        echo json_encode($producto);
    } else {
        // El producto no se encontró
        header("HTTP/1.1 404 Not Found");
        echo "Producto no encontrado";
    }
} catch (PDOException $e) {
    // Manejo de errores de base de datos
    header("HTTP/1.1 500 Internal Server Error");
    echo "Error de la base de datos: " . $e->getMessage();
}
?>


