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
    <link rel="stylesheet" href="css/inicio2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Sigmar&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/2db30e9cdf.js" crossorigin="anonymous"></script>
</head>

<body>

   
    <header>
        <nav>
            <div class="titulos">
                <div class="imagen2">
                    <a href="index.html" class="enlace">
                        <img src="fotos/logo2.png" alt="" class="logo">
                    
                    </a>
                </div>
            </div>
            <ul class="menu">
                <li class="back"><a class="active" href="index.php">Inicio</a></li>
                <li class="back"> <a class="active" href="zapatillas.php">Zapatillas</a></li>
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
        <div id="imgs1">
            <img id="fondos1" src="fotos/zapa.gif" alt="fondo">
                <div id="imgs2">
                    <img src="fotos/logos.png" alt="icono" id="logo">
                </div>
        </div>
        <div id="text">
            <p class="">Novedades</p>
        </div>
        <div id="cont">
            <div class="slider-container">
                <ul class="slider">
                    <li class="slide"><img class="tmt" src="fotos/zapatilla1/zpa6.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla2/zpa13.jpg" alt="Imagen 2"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla3/3.jpg" alt="Imagen 3"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla4/3.jpg" alt="Imagen 4"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla5/3.jpg" alt="Imagen 5"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla6/3.jpg" alt="Imagen 6"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla7/3.jpg" alt="Imagen 7"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla8/3.jpg" alt="Imagen 8"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla9/3.jpg" alt="Imagen 9"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla10/3.jpg" alt="Imagen 9"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla11/3.jpg" alt="Imagen 3"></li>
                    <li class="slide"><img class="tmt" src="fotos/zapatilla12/3.jpg" alt="Imagen 4"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa1/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa2/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa3/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa4/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa5/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa6/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa7/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa8/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa9/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa10/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa11/1.jpg" alt="Imagen 1"></li>
                    <li class="slide"><img class="tmt" src="fotos/ropa12/1.jpg" alt="Imagen 1"></li>
                </ul>
                <div class="controls">
                    <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
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
                <br>
                <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://github.com/matu227/proyectofinal.git">X227</a> by <span property="cc:attributionName">Miguel Mata </span> is licensed under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">Attribution-NonCommercial-NoDerivatives 4.0 International<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"></a></p>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="java/index.js"></script>

</body>
</html>