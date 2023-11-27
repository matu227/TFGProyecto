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
    <link rel="stylesheet" href="../css/ropa/margeropa3.css">
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
				 <button class="button" onclick="alternarTexto()">Jordan x J Balvin
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				 </button>
					<div class="parrafo">
						<p id="miParrafo">
                            "Sigue adelante, cuida tu salud mental y persigue tus sueños". La colección Jordan x J Balvin no conoce límites. Los detalles enérgicos rinden homenaje a la estrella del reguetón, mientras que los estampados reactivos a los rayos ultravioleta transforman tu look constantemente. Los detalles arcoíris y el logotipo Jordan aportan un toque de alegría y positividad a todos los diseños.
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
						<p>Jordan x J Balvin</p>
						<br>
						<h2>Sudadera con capucha</h2>
							<br>
							<p class="precio">149,99 €</p>
							<br>
							<p>Los sueños te permiten ir donde quieras, al igual que esta cálida sudadera con capucha. Los estampados reactivos a los rayos ultravioleta, con el estilo sin límites característico de J Balvin, transforman tu look cuando hace sol. Además, el diseño cómodo, con un estampado tie-dye y costuras de arcoíris, la convierte en la prenda ideal para cualquier ocasión.</p>
						 <div class="pago">
							 <button class="button2">Comprar 149,99 €</button>
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
						<p>Jordan x J Balvin</p>
						<br>
						<h2>Sudadera</h2>
							<br>
							<p class="precio">119,99 €</p>
							<br>
							<p>En nuestra colaboración con J Balvin no hay límites, prueba de ello es esta versión enérgica de las sudaderas clásicas. El tejido suave cuenta con unos estampados reactivos a los rayos ultravioleta que transforman tu look cuando hace sol. Las costuras de arcoíris y la carita sonriente exclusiva de J Balvin llenan tu mundo de luz. Además, el ajuste holgado te proporciona comodidad durante todo el día.
							</p>
						 <div class="pago">
							 <button class="button2">Comprar 119,99 €</button>
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
						<p>Jordan x J Balvin</p>
						<br>
						<h2>Camiseta</h2>
							<br>
							<p class="precio">49,99 €</p>
							<br>
							<p>Esta camiseta holgada transmite la energía y la actitud sin límites de J Balvin. Además, cuenta con un diseño llamativo y lleno de luz. Los estampados brillantes rinden homenaje a la colaboración, mientras que el algodón transpirable proporciona frescura.
							</p>
						 <div class="pago">
							 <button class="button2">Comprar 49,99 €</button>
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
						<p>Jordan x J Balvin</p>
						<br>
						<h2>Pantalón de tejido Fleece</h2>
							<br>
							<p class="precio">119,99 €</p>
							<br>
							<p>Lleva el sol contigo cuando bajen las temperaturas con estos joggers de alta densidad. Los estampados reactivos a la luz ultravioleta hacen que veas todo de otra forma, mientras que el cordón de arcoíris y las costuras a juego aportan energía hasta en los días más nublados. Este pantalón supersuave es un sueño hecho realidad.
							</p>
						 <div class="pago">
							 <button class="button2">Comprar 119,99 €</button>
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
						<p>Jordan x J Balvin</p>
						<br>
						<h2>Pantalón corto</h2>
							<br>
							<p class="precio">99,99 €</p>
							<br>
							<p>La estrella del reguetón actualiza tu pantalón corto favorito de la franquicia Jordan. Los estampados reactivos a los rayos ultravioleta transforman tu look, mientras que el cordón de arcoíris aporta energía. Además, por si fuera poco, su gran suavidad lo convierte en un imprescindible en cualquier armario.
							</p>
						 <div class="pago">
							 <button class="button2">Comprar 99,99 €</button>
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
</html>