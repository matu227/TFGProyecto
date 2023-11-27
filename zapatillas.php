<?php
 include 'usuarios.php';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/prueba.css">
    <link rel="stylesheet" href="css/zapatillas.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
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
                <li class="back"><a class="active" href="zapatillas.php">Zapatillas</a></li>
                <li class="back"><a class="active" href="ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="contacto.php">Login</a></li>
                <?php 
                    if (isset($_SESSION['user_email'])) {
                        $user_email = $_SESSION['user_email']; // Obtiene el correo almacenado en la variable de sesión
                        echo '<li class="back"><a class="active" href="../contacto.php">' . $user_email . '</a></li>';
                    }
                ?>
                <li class="submenu">
                    <a href="html/carrito.php"><img class="img-cesta" src="fotos/cesta.png"></a>
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
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Buscador">
            </div>
            <div class="gallery">
                <div class="image-container">
                    <a class="pepe" href="html/decoracion.php">
                        <img src="fotos/zapatilla1/zpa1.jpg" class="imagen1" >
                        <div class="overlay">
                                <img src="fotos/zapatilla1/zpa6.jpg" alt="Overlay 2">
                        </div>
                    </a>
                    <a class="pepe"  href="html/decoracion.php">
                        <div class="caption">Air Jordan 1 Chicago</div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion2.php">
                         <img src="fotos/zapatilla2/zpa12.jpg" class="imagen1">
                         <div class="caption">Air Jordan 1 Zoom CMFT 2 x Teyana Taylor Gym Red</div>
                         <div class="overlay">
                            <img src="fotos/zapatilla2/zpa13.jpg" alt="Overlay 2">
                         </div>
                     </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion3.php">
                         <img src="fotos/zapatilla3/1.jpg" class="imagen1">
                         <div class="caption">Air Jordan 2 "H" Wings</div>
                         <div class="overlay">
                            <img src="fotos/zapatilla3/3.jpg" alt="Overlay 2">
                         </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/decoracion4.php">
                        <img src="fotos/zapatilla4/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 1 Sail and Pale Vanilla</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla4/3.jpg" alt="Overlay 2">
                        </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/decoracion5.php">
                        <img src="fotos/zapatilla5/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 6 Toro Bravo</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla5/3.jpg" alt="Overlay 2">
                        </div>
                     </a>
                </div>
                <div class="image-container">
                    <a href="html/decoracion6.php">
                        <img src="fotos/zapatilla6/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 5 Craft</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla6/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                    <a href="html/decoracion7.php">
                        <img src="fotos/zapatilla7/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 1 High Multicolor</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla7/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion8.php">
                        <img src="fotos/zapatilla8/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 1 Heritage</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla8/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion9.php">
                        <img src="fotos/zapatilla9/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 1 Black and Smoke Grey</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla9/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion10.php">
                        <img src="fotos/zapatilla10/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 4 A Ma Maniére</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla10/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                     <a href="html/decoracion11.php">
                        <img src="fotos/zapatilla11/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 1 Starfish</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla11/3.jpg" alt="Overlay 2">
                        </div>
                    </a>
                </div>
                <div class="image-container">
                    <a href="html/decoracion12.php">
                        <img src="fotos/zapatilla12/1.jpg" class="imagen1">
                        <div class="caption">Air Jordan 9 Fire Red</div>
                        <div class="overlay">
                            <img src="fotos/zapatilla12/3.jpg" alt="Overlay 2">
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
    <script src="java/cesta.js"></script>
    <script src="java/buscador.js"></script>
</body>
</html>
