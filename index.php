<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estilos.css">
	<title></title>
</head>
<body>
	<?php 
	include 'header/header1.php';
	require 'controlador/conexion.php';
	$conn = conectar();
	?>

	<?php 
		session_start();
		if (!isset($_SESSION['emailusuario'])) {
			echo " ";
		}else{
			$aux=$_SESSION['emailusuario'];
			$persona=buscarCliente($aux,$conn);

			echo "<h3>Bienvenido: $persona[0] $persona[1]</h3>";
			echo "<h3><a href='procesamiento_administrador/proceso_cerrar_sesion.php'>Cerrar Sesión</a></h3>";
		}

	?>
	

	<main>
		<h1 class="titulo">Agencia de tours ANDES FLY</h1>
		<section class="intro">
			<img src="imagenes/" alt="">
			<h2>Nunca es tarde para conocer cada rincon de nuestro pais</h2>
			<p id="letra"> <span>¿Deseas darte un tiempo para disfrutar de la vida o estar en familia?</span> <br> Atrévete a optar por nuestros tours y crea momentos únicos en los diversos lugares que nuestro país ofrece.</p>
				<div class="text-slider">
					<p>AMAMOS<p>
					<ul>
						<li>VIAJAR</li>
						<li>CONOCER</li>
						<li>DISFRUTAR</li>
					</ul>
				   </div>
		</section>

		<h2 class="titulo" >Nuestros destinos</h2>

		<section class="regiones">
			<div class="regiones__cards">
			    <img class="regiones__img" src="imagenes/img3.jpg" width="330" height="220">
				<h3>COSTA</h3>
				<a href="paginas/RegionCosta.php">Conoce más</a> 
		    </div>

		    <div class="regiones__cards">
				<img class="regiones__img" src="imagenes_sierra/Apurimac3.png" width="330" height="220"><br>
				<H3>SIERRA</H3>
				<a href="paginas/SIERRA.php">Conoce más</a>
		    </div>

		    <div class="regiones__cards">
				<img class="regiones__img" src="imagenes/img3_selva.jpg" width="330" height="220"><br>
				<H3>SELVA</H3>
				<a href="paginas/SELVA.php">Conoce más</a>
		    </div>
		</section>

		<h2 class="titulo">Top 3 lugares mas visitados</h2>

		<section class="top">
				<div class="top__lugares">
					<h2>Paracas</h2>
					<img src="imagenes/img18.jpg" width="330" height="220"><br>
					<p>
						Paracas es una ciudad de la costa oeste de Perú. Es conocida por sus playas, como El Chaco, ubicada en la bahía resguardada de Paracas. 
						La ciudad es un punto de partida hacia las islas Ballestas deshabitadas, hogar de lobos marinos, pelícanos y pingüinos de Humboldt. 
						La escabrosa Reserva Nacional de Paracas tiene abundante fauna y se extiende por desierto, océano, islas y la península de Paracas.
					</p>
					<a href="paginas/Paracas.php">Conoce más</a>
				</div>
			
				
				<div class="top__lugares">
					<h2>MachuPichu</h2>
					<img src="imagenes_sierra/MachuPicchu.jpg" width="330" height="220"><br>
					<p>
						Descubre una de las 7 maravillas del mundo de la region andina peruana en esta aventura que sera una excursion de 4 dias y 3 noche. 
						Tomara un sendero de la selva inca desde Cusco a Machu Picchu. En el camino, participará en actividades de aventura
					    como ciclismo, rafting, tirolesa y senderismo, todo mientras disfruta de las impresionantes vistas de las montañas y ríos peruanos.
					</p>
					<a href="paginas/Cusco.php">Conoce más</a>
				</div>
				
					
				<div class="top__lugares">
					<h2>Tambopata</h2>
				    <img src="imagenes_selva/tambopata1.jpg" width="330" height="220"><br>
				    <p>
						Aventúrese en las profundidades de la selva amazónica y explore el diverso Parque Nacional 
						Tambopata en una excursión de 4 días desde Puerto Maldonado. Descubra la rica biodiversidad de la selva 
						mientras recorre los paseos nocturnos de los caimanes, visite la Isla de los Monos, navegue
						por el lago Sandoval y emprenda algunas excursiones por la selva. Esta es una gran oportunidad
						para desconectar y sumergirse en la hermosa naturaleza del Perú durante su viaje
				    </p>
				    <a href="paginas/Tambopata.php">Conoce más</a>
				</div>
		</section>

	</main>
	<?php 
		include 'footer/footer1.php';
	?>
</body>
</html>