<?php
require 'database.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // Validar el formato del correo electrónico
    $password = $_POST['password'];

    if ($email && !empty($password)) {
      // Comprobar si el correo electrónico ya está en uso
      $checkUser = $conexion->prepare('SELECT id FROM users WHERE email = :email');
      $checkUser->bindParam(':email', $email);
      $checkUser->execute();

      if ($checkUser->rowCount() == 0) {
        // El correo electrónico no está en uso, proceder con el registro
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $passwordHash);

        if ($stmt->execute()) {
          $message = 'Se ha creado el usuario con éxito.';
        } else {
          $message = 'Hubo un problema al crear tu cuenta. ';
        }
      } else {
        $message = 'El correo electrónico ya está en uso.';
      }
    } else {
      $message = 'Correo electrónico o contraseña no válidos.';
    }
  } else {
    $message = 'Por favor, completa todos los campos.';
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
                <li class="back"><a class="active" href="../contacto.php"> 
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
                        <p class="mess"> <?php echo $message; ?> </p>
                        </span>
                    </div>
            <div class="wrapper">
                    <div class="title">
                        Registrarte
                        </div>
                        <form action="contacto1.php" method="POST">
                            <div class="field">
                                <input type="text" required name="email">
                                <label>Correo electronico</label>
                            </div>
                            <div class="field">
                                <input type="password" required name="password">
                                <label>Contraseña</label>
                            </div>
                            <div class="field">
                                <input type="submit" value="Registrarte">
                            </div>
                            <div class="signup-link">
                                <a href="contacto.php">Inicio Sesion</a>
                            </div>
                        </form>
                    </div>
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