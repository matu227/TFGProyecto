<?php
    require 'database.php';
    include 'usuarios.php';

    // Verificar si se ha enviado el formulario de restablecimiento de contraseña
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener datos del formulario
        $email = $_POST['email'];
        $new_password = $_POST['new_password'];

        // Verificar si el correo electrónico existe en la base de datos
        $checkUser = $conexion->prepare('SELECT id FROM users WHERE email = :email');
        $checkUser->bindParam(':email', $email);
        $checkUser->execute();

        if ($checkUser->rowCount() > 0) {
            // Actualizar la contraseña en la base de datos
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $update_query = "UPDATE users SET password = :hashed_password WHERE email = :email";
            $stmt = $conexion->prepare($update_query);
            $stmt->bindParam(':hashed_password', $hashed_password);
            $stmt->bindParam(':email', $email);

            if ($stmt->execute()) {
                $message = "Contraseña actualizada con éxito";
            } else {
                $message = "Error al actualizar la contraseña: " . implode(", ", $stmt->errorInfo());
            }
        } else {
            $message = "El correo electrónico no está registrado en la base de datos";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device w dth, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/restablecer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>

    <header>
        <nav>
            <a href="index.html" class="enlace">
                <img src="fotos/logo2.png" alt="" class="logo">
            </a>
            <ul class="menu">
                <li class="back"><a class="active" href="index.php">Inicio</a></li>
                <li class="back"><a class="active" href="zapatillas.php">Zapatillas </a></li>
                <li class="back"><a class="active" href="ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="contacto.php">Login</a></li>
                <?php 
                    if (isset($_SESSION['user_email'])) {
                        $user_email = $_SESSION['user_email']; // Obtiene el correo almacenado en la variable de sesión
                        echo '<li class="back"><a class="active" href="../contacto.php">' . $user_email . '</a></li>';
                    }
                ?>
                <li class="submenu">
                <a href="carrito.php"><img class="img-cesta" src="fotos/cesta.png"></a>
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
                        Restablecer contraseña
                        </div>
                        <form action="contacto1.php" method="POST">
                            <div class="field">
                                <input type="text" required name="email">
                                <label>Correo electronico</label>
                            </div>
                            <div class="field">
                                <input type="password" required name="new_password">
                                <label>Nueva contraseña</label>
                            </div>
                            <div class="field">
                                <input type="submit" value="Restrablecer">
                            </div>
                        </form>
                    </div>
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
                <br>
                <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://github.com/matu227/proyectofinal.git">X227</a> by <span property="cc:attributionName">Miguel Mata </span> is licensed under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">Attribution-NonCommercial-NoDerivatives 4.0 International<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"></a></p>
            </div>
        </footer>
    </div> 
</body>
</html>