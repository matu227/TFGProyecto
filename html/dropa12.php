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
    <link rel="stylesheet" href="../css/ropa/margeropa5.css">
	<script type="text/javascript" src="../java/readmore.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&family=Sedgwick+Ave+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
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
        <div class="container1">
           <div class="principal">
				 <p class="big">Colección de ropa<p>
                 <br>
				 <button class="button" onclick="alternarTexto()">Nike x Stüssy
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				 </button>
					<div class="parrafo">
						<p id="miParrafo">
                           No dejes que la lluvia estropee tu día de playa. La colección Nike x Stüssy incluye equipación técnica diseñada para tus aventuras, con innovación inspirada en el deporte y prendas informales.
						</p>
					</div>
            </div>
			<div class="container2">
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa12/1.jpg" alt="Ropa 1">
					</div>
					<div class="photo">
						<img src="../fotos/ropa12/2.jpg" alt="Ropa 1">
					</div>
				</div>
				<div class="content">
                    <div class="space">
						<p>Nike x Stüssy</p>
						<br>
						<h2>Camiseta de manga larga</h2>
							<br>
							<p class="precio">79,99 €</p>
							<br>
							<p>Esta camiseta de manga larga llena de energía tu fondo de armario. El algodón de alta densidad, los colores degradados y el cuello con los logotipos de ambas marcas hacen que cualquier día sea fantástico.</p>
						 <div class="pago">
                            <button id="button" class="boton-comprar" data-producto="41">Comprar 79,99 €</button>
						 </div>
                    </div>
				</div>
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa12/3.jpg" alt="Ropa 2">
					</div>
					<div class="photo">
						<img src="../fotos/ropa12/4.jpg" alt="Ropa 3">
					</div>
				</div>
				<div class="content">
					<div class="space1">
						<p>Nike x Stüssy</p>
						<br>
						<h2>Chaqueta</h2>
							<br>
							<p class="precio">174,99 €</p>
							<br>
							<p>Esta chaqueta inspirada en la equipación de running vintage (pero con un diseño convertible) te permite quitar las mangas. Cuenta con múltiples bolsillos para guardar tus cosas de forma segura y con un tejido resistente al agua y al viento que aporta comodidad cuando hace mal tiempo. Sumérgete en un sinfín de aventuras con una gran confianza.
							</p>
						<div class="pago">
                            <button id="button" class="boton-comprar" data-producto="42">Comprar 174,99 €</button>
						</div>
					</div>
				</div>
				
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa12/5.jpg" alt="Ropa 4">
					</div>
					<div class="photo">
						<img src="../fotos/ropa12/6.jpg" alt="Ropa 4">
					</div>
				</div>
				<div class="content">
					<div class="space2">
						<p>Nike x Stüssy</p>
						<br>
						<h2>Pantalón</h2>
							<br>
							<p class="precio">124,99 €</p>
							<br>
							<p>¿Te vas a la playa, de finde de senderismo o de vacaciones? Hacer las maletas es más fácil que nunca con este pantalón ligero confeccionado para el mal tiempo. Su diseño convertible permite quitar la parte inferior de las perneras para convertirlo en un pantalón corto. Además, está hecho con un tejido antidesgarro resistente al agua y al viento para que nada te impida disfrutar del paisaje.
							</p>
						 <div class="pago">
                            <button id="button" class="boton-comprar" data-producto="43">Comprar 124,99 €</button>
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
                <br>
                <p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="https://github.com/matu227/proyectofinal.git">X227</a> by <span property="cc:attributionName">Miguel Mata </span> is licensed under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">Attribution-NonCommercial-NoDerivatives 4.0 International<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nd.svg?ref=chooser-v1"></a></p>
           </div>
       </footer>
    </div>
    <script src="../java/cesta.js"></script>
</body>
</html>