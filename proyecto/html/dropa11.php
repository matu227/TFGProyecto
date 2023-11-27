<?php
 include '../susuarios.php';


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="../css/dropa1.css">
    <link rel="stylesheet" href="../css/ropa/margeropa4.css">
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
				 <button class="button" onclick="alternarTexto()">Nike x PEACEMINUSONE G-Dragon
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				 </button>
					<div class="parrafo">
						<p id="miParrafo">
                            ¿Hay algo que G-Dragon no sepa hacer? Como superestrella del K-pop y director creativo de su propia marca, Peaceminusone, sabe cómo maximizar su potencial, y así lo ha hecho en esta colección. Inspirándose en el estilo de vida "Freedom in Flow" y en el taekwondo, deporte tradicional coreano, G-Dragon da su toque personal a unos looks increíbles.
						</p>
					</div>
            </div>
			<div class="container2">
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa11/1.jpg" alt="Ropa 1">
					</div>
					<div class="photo">
						<img src="../fotos/ropa11/2.jpg" alt="Ropa 1">
					</div>
				</div>
				<div class="content">
                    <div class="space">
						<p>Nike x PEACEMINUSONE G-Dragon</p>
						<br>
						<h2>Camiseta de manga larga</h2>
							<br>
							<p class="precio">59,99 €</p>
							<br>
							<p>El tejido de algodón de alta densidad y el ajuste holgado convierten esta camiseta en un básico de armario al instante. La combinación de estampados bordados y serigrafiados aporta un look texturizado.</p>
						 <div class="pago">
							 <button class="button2">Comprar 59,99 €</button>
						 </div>
					</div>
                </div>
				<div class="image-container">
					<div class="photo">
						<img src="../fotos/ropa11/5.jpg" alt="Ropa 4">
					</div>
					<div class="photo">
						<img src="../fotos/ropa11/6.jpg" alt="Ropa 4">
					</div>
				</div>
				<div class="content">
                    <div class="space">
						<p>Nike x PEACEMINUSONE G-Dragon</p>
						<br>
						<h2>Pantalón ancho</h2>
							<br>
							<p class="precio">149,99 €</p>
							<br>
							<p>Con un diseño oversize repleto de bolsillos, este pantalón te ofrece un estilo inigualable. Los logotipos Nike y G-Dragon bordados se combinan con detalles metalizados. Además, incluye una riñonera que se puede pasar por las presillas para el cinturón.</p>
						 <div class="pago">
							 <button class="button2">Comprar 149,99 €</button>
						 </div>
                    </div>
				</div>
			</div>
        </div>
		
    </main>
	php  <script src="../java/productos.js"></script>
    <script src="../java/cesta.js"></script>
</body>
</html>