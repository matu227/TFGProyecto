<?php

session_start();

require 'database.php';

$message = ''; // Inicializa el mensaje como una cadena vacía

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  if ($results && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    $_SESSION['user_email'] = $results['email']; // Almacena el correo en una variable de sesión
    header("Location: /proyectos/index.php"); // Redirige si las credenciales son correctas
    exit; // Asegura que el script se detenga después de la redirección
    } else {
        $message = 'Correo o contraseña incorrectos'; // Establece el mensaje de error
    }

}
?>