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
    <link rel="stylesheet" href="../css/decoracion.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="imagen2">
            <a href="../index.html" class="enlace">
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
                </a>
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
                            <tbody id="cesta-lista">
                           
                            </tbody>   
                        </table>
                        <p id="total">Total: 0.00 €</p>

                    </div>
                </li>
            </ul>
        </nav> 
    </header>
    <main>
        <div class="conteiner1">
            <div class="image-container">
                <div class="small-image">
                    <img src="../fotos/zapatilla3/2.jpg" class="imagen-2">
                    <img src="../fotos/zapatilla3/3.jpg" class="imagen-2">
                    <img src="../fotos/zapatilla3/4.jpg" class="imagen-2">
                </div>
                <div class="big-imagen">
                    <img src="../fotos/zapatilla3/1.jpg" class="imagen-1">
                </div>
                <div class="content">
                    <h2>Air Jordan 2 "H" Wings</h2>
                    <br>
                    <p class="precio">209,99 €</p>
                    <br>
                    <p>Howard "H" White, la leyenda de la franquicia Jordan, suele decir que: "todo el mundo puede volar". Para rendir homenaje a su trabajo como figura fundadora de la marca y de las bases de nuestra comunidad, le hemos dedicado las zapatillas Jordan Brand Wings de este año. Las AJ2 son sus preferidas de la franquicia Jordan y, por eso, la versión "H" Wings está diseñada con las características originales del modelo de 1987. Además, estas zapatillas incluyen un diseño dibujado a mano en el panel del contrafuerte, un contratacón translúcido con un logotipo "H" dorado, y cordones adornados con las palabras "POWER" y "BELIEF", que reflejan la extraordinaria actitud de H en cada paso.

                    </p>
                    <div class="talla">
                    <table>
                          <tbody>
                            <tr>
                              <td>EU 38</td>
                              <td>EU 38.5</td>
                            </tr>
                            <tr>
                              <td>EU 39</td>
                              <td>EU 40</td>
                            </tr>
                            <tr>
                              <td>EU 40.5</td>
                              <td>EU 41</td>
                            </tr>
                            <tr>
                              <td>EU 42</td>
                              <td>EU 42.5</td>
                            </tr>
                            <tr>
                              <td>EU 43</td>
                              <td>EU 44</td>
                            </tr>
                            <tr>
                              <td>EU 44</td>
                              <td>EU 44.5</td>
                            </tr>
                            <tr>
                              <td>EU 45</td>
                              <td>EU 45.5</td>
                            </tr>
                            <tr>
                              <td>EU 46</td>
                              <td>EU 47</td>
                            </tr>
                            <tr>
                              <td>EU 47.5</td>
                              <td>EU 48.5</td>
                            </tr>
                          </tbody>
                        </table>
                 </div>
                 <div class="pago">
                    <button id="button2" class="boton-comprar" data-producto="3">Comprar 209,99 €</button>
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
              <br>
                <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://github.com/matu227/proyectofinal.git">X227</a> by <span property="cc:attributionName">Miguel Mata </span> is licensed under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">Attribution-NonCommercial-NoDerivatives 4.0 International<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"></a></p>
         </div>
     </footer>
    </div>
    <script src="../java/cesta.js"></script>
</body>
</html>