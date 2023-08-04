<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<title></title>
</head>
<body>
	<header>
		<img  src="Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="index.php">Inicio</a>
		   <a href="Nosotros.php">¿Quiénes somos?</a>
		   <a href="paquetes.php">Paquetes de tours</a>
		   <a href="GuiasTuristicos.php">Nuestros guias</a>
		   <a href="Contactanos.php">Contactanos</a>
		   <a href="Ejercicios1JS.php">Ejercicios JS</a>
		   <a href="EjercicioPHP1.php">Ejercicios PHP</a>
		   <a href="administrador.php">Administrador</a>
		</nav>
		
			<form method="post" class="form-nav" action="/RegionCosta.php">
				<select name="Departamentos" size="" select onChange="window.open(this.options[this.selectedIndex].value,'_self')">
					<option selected>Departamentos</option>
					<option value="Cusco.php">Cuzco</option>
					<option value="#">Tambopata</option>
					<option value="#">Apurimac</option>
					<option value="CostaVerde.php">Lima-Costa Verde</option>
					<option value="#">Ica</option>
					<option value="#">La Merced</option>
					<option value="#">Chanchamayo</option>
					<option value="#">Paracas</option>
					<option value="Puno.php">Puno</option>
				</select>
			</form>

			<form class="boton" action="/iniciar.php">
				<input type="submit" value="INICIAR">
			</form>
		
		
	</header>
     <hr>

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
				<a href="RegionCosta.php">Conoce más</a> 
		    </div>

		    <div class="regiones__cards">
				<img class="regiones__img" src="imagenes_sierra/Apurimac3.png" width="330" height="220"><br>
				<H3>SIERRA</H3>
				<a href="SIERRA.php">Conoce más</a>
		    </div>

		    <div class="regiones__cards">
				<img class="regiones__img" src="imagenes/img3_selva.jpg" width="330" height="220"><br>
				<H3>SELVA</H3>
				<a href="SELVA.php">Conoce más</a>
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
					<a href="Paracas.php">Conoce más</a>
				</div>
			
				
				<div class="top__lugares">
					<h2>MachuPichu</h2>
					<img src="imagenes_sierra/MachuPicchu.jpg" width="330" height="220"><br>
					<p>
						Descubre una de las 7 maravillas del mundo de la region andina peruana en esta aventura que sera una excursion de 4 dias y 3 noche. 
						Tomara un sendero de la selva inca desde Cusco a Machu Picchu. En el camino, participará en actividades de aventura
					    como ciclismo, rafting, tirolesa y senderismo, todo mientras disfruta de las impresionantes vistas de las montañas y ríos peruanos.
					</p>
					<a href="Cusco.php">Conoce más</a>
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
				    <a href="Tambopata.php">Conoce más</a>
				</div>
		</section>

	</main>
    <hr>
	<footer id="pie" class="centrado">

		<div class="contenido-columnas">
			<div class="item-footer padding-direccion">
				<h2>DIRECCIÓN</h2>
				<p>Av. Arequipa 1480,Cercado de Lima, Provincia de Lima</p>
				<p>+51 945 654 321</p>
				<p>informaciones@andesfly.com | derechosrecervadors@andesfly.com</p>
			</div>

			<div class="logos-tamaño item-footer padding-nosotros">
				<h2>CONOCE PERÚ<h2>
				<a href="Nosotros.php">Sobre Nosotros</a><br>
				<img src="Imagenes_header/facebook.png"><br>
				<img src="Imagenes_header/youtube.png">
			</div>

			<div class="item-footer padding-2022">
				<a href="LibroReclamos.php">Libro de Reclamos</a>
				<p><center>2022 ©</p>
				<a href="index.php">Andes Fly S.A.</a>
				<p>. All Rights Reserved</p>
			</div>	
		</div>

	</footer>
</body>
</html>