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
    <link rel="stylesheet" href="../css/dropa1.css">
    <link rel="stylesheet" href="../css/ropa/margeropa1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script type="text/javascript" src="../java/readmore.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="imagen2">
            <a href="../index.html" class="enlace">
                <img src="../fotos/logos.png" alt="" class="logo">
            </a>
            </div>
            <ul class="menu">
                <li class="back"><a class="active" href="../index.php">Inicio</a></li>
                <li class="back"> <a class="active" href="../zapatillas.php">Zapatillas</a></li>
                <li class="back"><a class="active" href="../ropa.php">Ropa</a></li>
                <li class="back"><a class="active" href="../contacto.php">Login</a></li>
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
    <main>
        <div class="container1">
            <div class="principal">
                <p class="big">Colección de ropa<p>
                <br>
                <button class="button" onclick="alternarTexto()">Jordan x Travis Scott
                   <span></span>
                   <span></span>
                   <span></span>
                   <span></span>
                </button>
                 <br>
                 <div class="parrafo">
                    <p id="miParrafo">
                    Para su primera línea para mujer en colaboración con la franquicia Jordan, Travis Scott se ha inspirado en la cultura y la moda del motocross. Los materiales premium y los ajustes favorecedores hacen que cada prenda de la colección sea impactante. Siéntete genial con ropa que solo podría crear Cactus Jack.
                    </p>
                </div>
            </div>
            <div class="container2">
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa4/1.jpg" alt="Ropa 1">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa4/2.jpg" alt="Ropa 1">
                    </div>
                </div>
                <div class="content">
                    <div class="space">
                        <p>Jordan x Travis Scott</p>
                        <br>
                        <h2>Chaqueta de piel</h2>
                            <br>
                            <p class="precio">599,99 €</p>
                            <br>
                            <p>Esta chaqueta de piel premium tiene un diseño ligeramente más corto y un ajuste ceñido. El forro de satén, el cuello con botón a presión y las mangas con cremallera unen la innovación con el estilo motero. Los parches de goma y bordados incorporan detalles gráficos originales y exclusivos.
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 599,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa4/3.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa4/4.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space2">
                        <p>Jordan x Travis Scott</p>
                        <br>
                        <h2>Pantalón de piel </h2>
                            <br>
                            <p class="precio">399,99 €</p>
                            <br>
                            <p>El pantalón de piel premium con lazadas subirá las revoluciones de tu look. Los logotipos minimalistas en forma de parche de goma en la parte posterior y de bordados en la parte delantera añaden el mejor estilo.
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 399,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa4/5.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa4/6.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space3">
                        <p>Jordan x Travis Scott</p>
                        <br>
                        <h2>Camiseta de tirantes</h2>
                            <br>
                            <p class="precio">79,99 €</p>
                            <br>
                            <p>El diseño de material elástico y ceñido se actualiza con estampados serigrafiados. Las aberturas delantera y trasera aportan un toque que llama la atención y te hace destacar.
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 399,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa4/7.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa4/8.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space4">
                        <p>Jordan x Travis Scott</p>
                        <br>
                        <h2>Pantalón de piel</h2>
                            <br>
                            <p class="precio">399,99 €</p>
                            <br>
                            <p>Este pantalón de piel premium cuenta con una cintura de talle medio y un diseño ligeramente acampanado. El forro de satén y las cremalleras en los tobillos ofrecen un look de motorista elegante y cómodo. Los elementos gráficos en forma de parches bordados y de goma añaden un estilo Cactus Jack inconfundible.
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 399,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa4/9.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa4/10.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space5">
                        <p>Jordan x Travis Scott</p>
                        <br>
                        <h2>Body</h2>
                            <br>
                            <p class="precio">399,99 €</p>
                            <br>
                            <p>Este body de material elástico y ceñido con un corte de pierna alto está pensado para ofrecer un look atrevido. Además, los estampados serigrafiados minimalistas te dan todo el protagonismo.
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 399,99 €</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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
    <script src="../java/productos.js"></script>
    <script src="../java/cesta.js"></script>phpody>
</html>