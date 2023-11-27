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
	<link rel="stylesheet" href="../css/ropa/margeropa.css">
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
            </div>s
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
				 <button class="button" onclick="alternarTexto()">Nike x Off-White™
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				 </button>
					<div class="parrafo">
						<p id="miParrafo">
						La simetría es mentira: la belleza no es estática. Con un diseño que rinde homenaje a la exclusividad humana y a la maravilla orgánica de la vida, el legado de Virgil Abloh continúa con la c
						olección Nike x Off-White™. Esta selección, que reinventa el concepto de "perfección", ofrece una nueva versión de la moda que solo Off-White™ puede lograr.
						<br>
						<br>
						Con la seña de su propio número de serie, cada prenda se distingue del resto dentro de la colección. Desde ribetes únicos a estampados tipo grafiti y colores inspirados en la naturaleza, 
						estos detalles únicos celebran la idea de que nuestro futuro es una verdad asimétrica.
						<br>
						<br>
						Básicos de fondo de armario actualizados de acuerdo a las especificaciones de Off-White™: estampados llamativos, detalles únicos y estilo totalmente singular.
						</p>
					</div>
            </div>
			<div class="container2">
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa8/1.jpg" alt="Ropa 1">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa8/2.jpg" alt="Ropa 1">
                    </div>
                </div>
                <div class="content">
                    <div class="space">
                        <p class="txt">Nike x Off-White™</p>
                        <br>
                        <h2>Camiseta</h2>
                            <br>
                            <p class="precio">64,99 €</p>
                            <br>
                            <p>Número 005: una prenda ideal para el día a día, pero con mucha más garra. Confeccionada con una combinación de algodón y poliéster de alta densidad, esta camiseta amplia te da todo lo que necesitas para tu rutina con unos estampados superllamativos y unos colores que van con todo. El dobladillo asimétrico es el toque final perfecto para dar un giro de lo más original
                            </p>
                        <div class="pago">
                            <button class="button2">Comprar 64,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa8/3.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa8/4.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space1">
                         <p class="txt">Nike x Off-White™</p>
						<br>
						<h2>Pantalón corto de tejido Woven</h2>
							<br>
							<p class="precio">129,99 €</p>
							<br>
							<p>Número 002: perfeccionado con el duradero tejido antidesgarro Dyneema, este pantalón corto resistente al agua es ideal para marcar el ritmo de tus aventuras. El bolsillo de quita y pon es genial para decidir cómo quieres llevar tus cosas, al tiempo que el logotipo de Off-White™ y el bordado metalizado dan el toque único de Virgil.
							</p>
                        <div class="pago">
                            <button class="button2">Comprar 129,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa8/5.png" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa8/6.png" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space2">
                        <p>Nike x Off-White™</p>
						<br>
						<h2>Chándal</h2>
							<br>
							<p class="precio">349,99 €</p>
							<br>
							<p>Número 003: este chándal amplio y fácil de combinar tiene una parte superior y una parte de abajo resistentes al agua para que no te quedes en casa, llueva o haga sol. Los bolsillos grandes estilo militar son perfectos para guardar tus cosas y el dobladillo asimétrico de la chaqueta da un toque superoriginal.
							</p>
                        <div class="pago">
                            <button class="button2">Comprar 349,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa8/7.jpg" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa8/8.jpg" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space3">
                        <p>Nike x Off-White™</p>
						<br>
						<h2>Chaqueta</h2>
							<br>
							<p class="precio">499,99 €</p>
							<br>
							<p>Número 004: pon a prueba del paso del tiempo (y el clima) con esta chaqueta duradera y resistente al agua. Se ha confeccionado con un tejido antidesgarro y su diseño holgado está preparado para aguantar lo que le eches. Las líneas asimétricas y orgánicas son un extra de estilo perfecto y los bolsillos oversize son ideales para llevar tus cosas siempre a mano. Los puños regulables inspirados en el reloj Nike Triax rematan este look imprescindible para todo lo que el tiempo te depare.
							</p>
                        <div class="pago">
                            <button class="button2">Comprar 499,99 €</button>
                        </div>
                    </div>
                </div>
                <div class="image-container">
                    <div class="photo">
                        <img src="../fotos/ropa8/9.png" alt="Ropa 2">
                    </div>
                    <div class="photo">
                        <img src="../fotos/ropa8/10.png" alt="Ropa 3">
                    </div>
                </div>
                <div class="content">
                    <div class="space4">
                        <p>Nike x Off-White™</p>
						<br>
						<h2>Gorra</h2>
							<br>
							<p class="precio">49,99 €</p>
							<br>
							<p>La guinda del pastel: esta icónica gorra renueva el estilo de los 90 con un material duradero y resistente al agua, y un increíble bordado metalizado.
							</p>
                        <div class="pago">
                            <button class="button2">Comprar 49,99 €</button>
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