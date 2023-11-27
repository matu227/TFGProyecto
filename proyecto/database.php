<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'x227';

try {
    $conexion = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}


?>