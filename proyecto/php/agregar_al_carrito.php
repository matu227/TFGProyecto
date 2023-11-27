<?php
session_start();
require '../database.php'; // Asegúrate de tener una conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['producto_id']) && isset($_SESSION['user_id'])) {
    $productoId = $_POST['producto_id'];
    $usuarioId = $_SESSION['user_id']; // Asumiendo que has almacenado el ID del usuario en la sesión

    // Inserta un registro en la tabla elementos_carrito
    $sql = "INSERT INTO elementos_carrito (id_carrito, id_producto, cantidad, nombre_producto, imagen_producto, precio_producto) SELECT c.id, :producto_id, 1, p.nombre, p.imagen, p.precio FROM carritos c, productos p WHERE c.id_usuario = :usuario_id AND c.fecha_creacion IS NULL";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':producto_id', $productoId);
    $stmt->bindParam(':usuario_id', $usuarioId);

    if ($stmt->execute()) {
      echo "Producto agregado al carrito";
    } else {
      echo "Error al agregar el producto al carrito";
    }
  }
}
?>
