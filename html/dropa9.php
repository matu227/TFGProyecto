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
    <link rel="stylesheet" href="../css/ropa/margeropa2.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../java/readmore.js"></script>
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
				 <button class="button" onclick="alternarTexto()">Jordan x Travis Scott
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				 </button>
					<div class="parrafo">
						<p id="miParrafo">
                            El atemporal diseño de Cactus Jack, que está inspirado en los oasis de los desiertos, llega a los modelos clásicos Jordan para darles auténtica originalidad. 
                            Sus adornos e intrincados parches son el extra de estilo perfecto para la colección Jordan x Cactus Jack.
						</p>
					</div>
            </div>
			<div class="container2">
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa9/1.jpg" alt="Ropa 1">
					</div>
					<div class="photo">
						<img src="../fotos/ropa9/2.jpg" alt="Ropa 1">
					</div>
				</div>
				<div class="content">
                    <div class="space">
                        <p>Jordan x Travis Scott</p>
						<br>
						<h2>Sudadera con capucha</h2>
							<br>
							<p class="precio">169,99 €</p>
							<br>
							<p>La sudadera con capucha de tejido Fleece premium lleva unos adornos tipo pedrería de cactus con llamas.</p>
						 <div class="pago">
						 	<button id="button" class="boton-comprar" data-producto="29">Comprar 169,99 €</button>
						 </div>
                    </div>
                </div>
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa9/3.jpg" alt="Ropa 2">
					</div>
					<div class="photo">
						<img src="../fotos/ropa9/4.jpg" alt="Ropa 3">
					</div>
				</div>
				<div class="content">
					<div class="space1">
						<p>Jordan x Travis Scott</p>
						<br>
						<h2>Chaqueta de tejido Woven</h2>
							<br>
							<p class="precio">229,99 €</p>
							<br>
							<p>La chaqueta cuenta con unos estampados tipo pedrería de cactus con llamas, y con los logotipos de Cactus Jack y Jumpman.
							</p>
						<div class="pago">
							<button id="button" class="boton-comprar" data-producto="30">Comprar 229,99 €</button>
						</div>
					</div>
                </div>
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa9/5.jpg" alt="Ropa 4">
					</div>
					<div class="photo">
						<img src="../fotos/ropa9/6.jpg" alt="Ropa 4">
					</div>
				</div>
				<div class="content">
					<div class="space2">
						<p>Jordan x Travis Scott</p>
							<br>
							<h2>Pantalón corto</h2>
								<br>
								<p class="precio">99,99 €</p>
								<br>
								<p>Pantalón corto de algodón con estampados de cactus y un tejido transpirable.
								</p>
							<div class="pago">
								<button id="button" class="boton-comprar" data-producto="31">Comprar 99,99 €</button>
							</div>
					</div>
                </div>
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa9/7.jpg" alt="Ropa 4">           
					</div>
					 <div class="photo">
						<img src="../fotos/ropa9/8.jpg" alt="Ropa 4">
					</div>
				</div>
				<div class="content">
					<div class="space3">
						<p>Jordan x Travis Scott</p>
						<br>
						<h2>Chaqueta universitaria</h2>
							<br>
							<p class="precio">749,99 €</p>
							<br>
							<p>Chaqueta universitaria de piel exclusiva con lentejuelas, parches y forro de satén
							</p>
						<div class="pago">
							<button id="button" class="boton-comprar" data-producto="32">Comprar 749,99 €</button>
						</div>
					</div>
                </div>
				<div class="image-container">
					 <div class="photo">
						<img src="../fotos/ropa9/9.jpg" alt="Ropa 4">
					</div>
					 <div class="photo">
						<img src="../fotos/ropa9/10.jpg" alt="Ropa 4">
					</div>
				</div>
				<div class="content">
					<div class="space4">
						<p>Jordan x Travis Scott</p>
							<br>
							<h2>Pantalón de tejido Fleece</h2>
								<br>
								<p class="precio">129,99 €</p>
								<br>
								<p>Pantalón de tejido Fleece premium con estampado de cactus y detalles tipo pedrería.
								</p>
							<div class="pago">
								<button id="button" class="boton-comprar" data-producto="33">Comprar 129,99 €</button>
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