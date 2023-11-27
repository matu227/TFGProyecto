<?php
require 'database.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['Direccion'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $direccion = $_POST['Direccion'];

    if ($email && !empty($password) && !empty($direccion)) {
      $checkUser = $conexion->prepare('SELECT id FROM users WHERE email = :email');
      $checkUser->bindParam(':email', $email);
      $checkUser->execute();

      if ($checkUser->rowCount() == 0) {
        $sql = "INSERT INTO users (email, password, direccion) VALUES (:email, :password, :direccion)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $passwordHash);
        $stmt->bindParam(':direccion', $direccion);

        if ($stmt->execute()) {
          $message = 'Se ha creado el usuario con éxito.';
        } else {
          $message = 'Hubo un problema al crear tu cuenta.';
        }
      } else {
        $message = 'El correo electrónico ya está en uso.';
      }
    } else {
      $message = 'Correo electrónico, contraseña o dirección no válidos.';
    }
  } else {
    $message = 'Por favor, completa todos los campos.';
  }
}
?>
