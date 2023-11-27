<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/ropa.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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
                <li class="back"><a class="active" href="zapatillas.php">Zapatillas</a></li>
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
     <section>
        <div id="contenedor">
            <div class="gallery">
                <div class="image-container">
                    <a href="html/dropa1.php">
                        <img src="fotos/ropa1/1.jpg" class="imagen1" >
                        <div class="caption">Pantalones ISPA</div>
                        <div class="overlay">
                                <img src="fotos/ropa1/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa2.php">
                         <img src="fotos/ropa2/1.jpg" class="imagen1">
                         <div class="caption">Sudadera con capucha de tejido Fleece</div>
                         <div class="overlay">
                            <img src="fotos/ropa2/2.jpg" alt="Overlay 2">
                         </div>
                     </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa3.php">
                         <img src="fotos/ropa3/1.jpg" class="imagen1">
                         <div class="caption">Chaqueta x ISPA</div>
                         <div class="overlay">
                            <img src="fotos/ropa3/2.jpg" alt="Overlay 2">
                         </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/dropa4.php">
                        <img src="fotos/ropa4/1.jpg" class="imagen1">
                        <div class="caption">Chaqueta de piel x Travis Scott</div>
                        <div class="overlay">
                            <img src="fotos/ropa4/2.jpg" alt="Overlay 2">
                        </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/dropa5.php">
                        <img src="fotos/ropa5/1.jpg" class="imagen1">
                        <div class="caption">Chaqueta x Converse</div>
                        <div class="overlay">
                            <img src="fotos/ropa5/2.jpg" alt="Overlay 2">
                        </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/dropa6.php">
                        <img src="fotos/ropa6/1.jpg" class="imagen1">
                        <div class="caption">Chaqueta de lana a rayas x Stüssy</div>
                        <div class="overlay">
                            <img src="fotos/ropa6/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                    <a href="html/dropa7.php">
                        <img src="fotos/ropa7/1.jpg" class="imagen1">
                        <div class="caption">Jersey de tejido Knit y manga larga</div>
                        <div class="overlay">
                            <img src="fotos/ropa7/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa8.php">
                        <img src="fotos/ropa8/1.jpg" class="imagen1">
                        <div class="caption">Camiseta x Off-White™</div>
                        <div class="overlay">
                            <img src="fotos/ropa8/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa9.php">
                        <img src="fotos/ropa9/1.jpg" class="imagen1">
                        <div class="caption">Sudadera con capucha x Travis Scott</div>
                        <div class="overlay">
                            <img src="fotos/ropa9/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa10.php">
                        <img src="fotos/ropa10/1.jpg" class="imagen1">
                        <div class="caption">Sudadera con capucha x JBalvin</div>
                        <div class="overlay">
                            <img src="fotos/ropa10/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/dropa11.php">
                        <img src="fotos/ropa11/1.jpg" class="imagen1">
                        <div class="caption">Camiseta de manga larga</div>
                        <div class="overlay">
                            <img src="fotos/ropa11/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                    <a href="html/dropa12.php">
                        <img src="fotos/ropa12/1.jpg" class="imagen1">
                        <div class="caption">Camiseta de manga larga x Stüssy</div>
                        <div class="overlay">
                            <img src="fotos/ropa12/2.jpg" alt="Overlay 2">
                        </div>
                    </a>
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
</body>
</html>
