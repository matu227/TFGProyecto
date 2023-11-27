<?php
include('../database.php');

if (isset($_SESSION['user_id'])) {
    // El usuario ha iniciado sesión, por lo que puedes obtener su información desde la base de datos
    $usuario_id = $_SESSION['user_id'];

    require 'database.php'; // Asegúrate de que la conexión a la base de datos esté configurada

    // Realiza una consulta para obtener la información del usuario
    $query = $conn->prepare('SELECT id, email, nombre FROM users WHERE id = :usuario_id');
    $query->bindParam(':usuario_id', $usuario_id);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Devuelve la información del usuario en formato JSON
        echo json_encode(['success' => true, 'usuario' => $usuario]);
        exit;
    }
}

// El usuario no ha iniciado sesión
echo json_encode(['success' => false]);
?>