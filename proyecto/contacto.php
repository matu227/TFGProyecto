<?php

session_start();

require 'database.php';

$message = ''; // Inicializa el mensaje como una cadena vacía

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conexion->prepare('SELECT id, email, password FROM users WHERE email = :email');
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
<DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device w dth, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/contacto1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

    <header>
        <nav>
            <a href="index.html" class="enlace">
                <img src="fotos/logos.png" alt="" class="logo">
            </a>
            <ul class="menu">
                <li class="back"><a class="active" href="index.php">Inicio</a></li>
                <li class="back"><a class="active" href="zapatillas.php">Zapatillas </a></li>
                <li class="back"><a class="active" href="ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="contacto.php">Login</a></li>
                <li clas="back"><a class="active" href="../contacto.php"> 
                    <?php
                    
                    if (isset($_SESSION['user_email'])) {
                        $user_email = $_SESSION['user_email']; // Obtiene el correo almacenado en la variable de sesión
                        echo '<li class="back">' . $user_email . '</li>';
                    }
                    ?>
                </li>
                </a>
                <li class="submenu">
                    <img class="img-cesta" src="../fotos/cesta.png">
                    <div id="cesta">
                        <table id="lista-cesta">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                            </tbody>  
                        </table>
                        <p id="total">Total: 0.00 €</p>

                    </div>
                </li>
            </ul>
        </nav> 
    </header>
    <section id="login">
    <div id="container4">
            <video class="vd"src="video/3.mp4" loop autoplay></video>
            <div class="notification">
                <span class="texts">
                        <?php if(!empty($message)): ?>
                            <p class="mess"> <?= $message ?></p>
                        <?php endif; ?>
                </span>
            </div>
            <div class="wrapper">
                <div class="title">
                    Iniciar Sesion
                </div>
                <form action="contacto.php" method="POST">
                    <div class="field">
                        <input type="text" required name="email">
                        <label>Correo electronico</label>
                    </div>
                    <div class="field">
                        <input type="password" required name="password">
                        <label>Contraseña</label>
                    </div>
                    <div class="content">
                        <div class="checkbox">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Recorda me</label>
                        </div>
                        <div class="pass-link">
                            <a href="#">¿Olvidaste la contraseña?</a>
                        </div>
                    </div>
                    <div class="field">
                        <input type="submit" value=" Iniciar Sesion">
                    </div>
                    <div class="signup-link">
                        <a href="contacto1.php">Registrate</a>
                    </div>
                </form>
            </div>
    </div>
    </section>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Soporte</a></li>
                            <li><a href="#">Maps</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="index.html">Fundacion</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>X227</h3>
                        <p>Es tu destino para la moda urbana. Ofrecemos una amplia gama de zapatillas y ropa de alta calidad con diseños innovadores que combinan estilo y comodidad. Estamos comprometidos con la calidad y la sostenibilidad en cada paso de nuestra producción. ¡Únete a nuestra comunidad de estilo hoy mismo!"</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-youtube"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">X227 © 2023</p>
            </div>
        </footer>
    </div> 
</body>
</html>