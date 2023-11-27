<?php
 include '../usuarios.php';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="../css/carrito.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div class="imagen2">
            <a href="index.php" class="enlace">
                <img src="../fotos/logo2.png" alt="" class="logo">
            </a>
            </div>
            <ul class="menu">
                <li class="back"><a class="active" href="../index.php">Inicio</a></li>
                <li class="back"> <a class="active" href="../zapatillas.php">Zapatillas</a></li>
                <li class="back"><a class="active" href="../ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="../contacto.php">Login</a></li>
                <?php 
                    if (isset($_SESSION['user_email'])) {
                        $user_email = $_SESSION['user_email']; // Obtiene el correo almacenado en la variable de sesión
                        echo '<li class="back"><a class="active" href="../contacto.php">' . $user_email . '</a></li>';
                    }
                ?>
                <li class="submenu">
                <a href="carrito.php"><img class="img-cesta" src="../fotos/cesta.png"></a>
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
     <section>
        <div class="container1">
            <div class="container2">
                <div class="container3">
                    <div class="categoria">
                        <div class="tipos-carrito">
                            <div class="izq">Imagen</div>
                            <div class="drc">Nombre</div>
                            <div class="drc">Precio</div>
                            <div class="drc">Cantidad</div>
                        </div>
                    </div>
                    <div class="compra">
                        <table id="cesta-lista">
                            
                        </table>
                    </div>
                </div>  
                <div class="container4">
                <div class="tj">Tarjeta de Credito</div>
                    <form action="#" method="post">
                        
                        <label for="name">Nombre en la tarjeta:</label>
                        <input type="text" id="name" name="name" placeholder="Nombre completo" required>

                        <label for="cardNumber">Número de tarjeta:</label>
                        <input type="text" id="cardNumber" name="cardNumber" placeholder="Ingrese el número de tarjeta" required>

                        <label for="expiryDate">Fecha de caducidad:</label>
                        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/AA" required>

                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" name="cvv" placeholder="Ingrese el CVV" required>
                        <div class="pg"> 
                            <button id="button2" class="boton-comprar" type="submit">Pagar</button>
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
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
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
    <script src="../java/cesta.js"></script>

</body>
</html>