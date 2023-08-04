<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilo-paquetes.css">
	<script type="text/javascript" src="js/scriptPaquetes.js"></script>
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

	<main class="cabeza">

		<h1 >Tours en la zona costa del Perú</h1>

	</main>

	<form name="Form2">
		
		<div class="contenido">
		<div >
		<label>Enlaces por coste de tours :</label><br>
		<input type="checkbox" name="pri">Tour de costo mayor<br>
		<input type="checkbox" name="seg">Tour de costo medio<br>
		<input type="checkbox" name="ter">Tour de costo bajo<br>
		
		<input type="button" value="Mostrar" onclick="ejem2()"><br><br>
		</div>
		<div >
		<label>Respuesta :</label>
		<br>
		<textarea name="respuesta" rows="4" cols="100"></textarea><br>
		</div>
		</div>
	</form>

			<main>
						

							<h2 class="titulo">Costa verde</h2>
							<div class="contenido">
								<img class="contenido" src="imagenes/img1.jpg" >
								<div class="dis">
									<p class="after">El Circuito de Playas de la Costa Verde, popularmente conocido como la Costa Verde, es una vía ubicada en la ciudad de Lima, capital del Perú y la ciudad del Callao, el Primer Puerto, recorriendo así la parte sur y central del litoral limeño y chalaco uniendo los distritos de La Punta, Callao, La Perla, San Miguel, Magdalena del Mar, San Isidro, Miraflores, Barranco y Chorrillos. 
									</p>
									<div class="detalles">
										<ul>
	                        				<li>3 días/2 noches - 2 Personas</li>
	                        				<li>Visitas Guiadas</li>
	                        				<h3>desde S/.1150</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a href="CostaVerde.php">Conoce más>></a>
									</div>
								</div>
								
								<img class="contenido" src="imagenes/img2.jpg" >

							</div>
						

							<h2 class="titulo">Huacachina</h2>
							<div class="contenido">
								
								<img class="contenido" src="imagenes/img3.jpg" >
								<div class="dis">
									<p class="after" >Si estas buscando recorrer el sur del Peru, y vivir las experiencias mágicas que tenemos para ti, contamos con diversos paquetes turísticos. Te animamos a ser parte de esta gran aventura! Conocerás todos los secretos y maravillas que dejaron las civilizaciones antiguas; además de destinos naturales como playas paradisíacas y el extenso desierto de grandes dunas.</p>
									<div class="detalles">
										<ul>
	                        				<li>4 días/3 noches - 2 Personas</li>
                        					<li>Visitas Guiadas</li>
                        					<h3>desde S/.1730</h3> 
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Huacachina.php" >Conoce más >></a>
									</div>
									
								</div>
								<img class="contenido" src="imagenes/img4.jpg" >

							</div>

					
							<h2 class="titulo">Paracas</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/img5.jpg" >
								<div class="dis">
									<p class="after" >Paracas es una ciudad de la costa oeste de Perú. Es conocida por sus playas, como El Chaco, ubicada en la bahía resguardada de Paracas. La ciudad es un punto de partida hacia las islas Ballestas deshabitadas, hogar de lobos marinos, pelícanos y pingüinos de Humboldt. La escabrosa Reserva Nacional de Paracas tiene abundante fauna y se extiende por desierto, océano, islas y la península de Paracas.
									</p>
									<div class="detalles">
										<ul>
					                        <li>3 días/2 noches - 2 Personas</li>
					                        <li>Visitas Guiadas</li>
					                        <h3>desde S/.850</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
									<a  class="next" href="Paracas.php" >Conoce más >></a>
									</div>
								
								</div>
							
								<img class="contenido" src="imagenes/img6.jpg" >

							</div>


							<h2 class="titulo">Machu Picchu</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/sierra1.jpg" >
								<div class="dis">
									<p class="after" >Para aquellos que busquen un lugar de aventura con espacios abiertos para pasear y disfrutar de los paisajes antiguos que albergaron las civilizaciones ya perdidas en el tiempo.Comenzará tomando una furgoneta durante 3,5 horas hasta Abra Málaga, que se encuentra a 4350 metros sobre el nivel del mar...
									</p>
									<div class="detalles">
										<ul>
	                        				<li>4 Dias/3noches - 2 Personas</li>
                        					<li>Visitas Guiadas</li>
                        					<h3>desde S/.990</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Cusco.php" >Conoce más >></a>
									</div>
									
								</div>
							
								<img class="contenido" src="imagenes/sierra2.jpg" >

							</div>

							<h2 class="titulo">Choquequirao</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/sierra3.jpg" >
								<div class="dis">
									<p class="after" >  Nos levantaremos muy temprano para tomar desayuno y obtener energía para la caminata del día. Nuestra primera visita será...
									Ademas, de su variada y exotica biodiversidad en algunas zonas turisticas. 
									</p>
									<div class="detalles">
										<ul>
	                        				<li>4 Dias/3noches - 2 Personas</li>
                        					<li>Visitas Guiadas</li>
                        					<h3>desde S/.1542</h3> 
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Apurimac.php" >Conoce más >></a>
									</div>
									
								</div>
							
								<img class="contenido" src="imagenes/sierra4.jpg" >

							</div>

							<h2 class="titulo">Uros, Amantani, Isla Taquile y Sillustani</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/sierra5.jpg" >
								<div class="dis">
									<p class="after" >Nuestras ofertas y tarifas están diseñadas para todos los presupuestos. Las tarifas están expresadas de dólares norteamericanos, incluyen todos los impuestos aplicables y son válidas para turistas extranjeros y peruanos. En este tour a las islas Amantani, Uros y Taquile, los pasajeros son recogidos de los hoteles del centro hasta el puerto para luego tomar un cómodo bote a motor... 
									</p>
									<div class="detalles">
										<ul>
	                        				<li>2 Dias/1noche - 2 Personas</li>
						                    <li>Visitas Guiadas</li>
						                    <h3>desde S/.570</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Puno.php" >Conoce más >></a>
									</div>
									
								</div>
							
								<img class="contenido" src="imagenes/sierra6.jpg" >

							</div>

							<h2 class="titulo">Tambopata</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/selva1.jpg" >
								<div class="dis">
									<p class="after" >Para aquellos que busquen un momento de paz y tranquilidad, y estar rodeados de naturaleza virgen, nuestra amazonia es un destino ideal. En este recorrido, tomaremos nuestro bote motorizado que nos llevara a nuestro albergue durante aproximadamnete 40 min rio abajo, al llegar a nuestro albergue conoceremos... 
									</p>
									<div class="detalles">
										<ul>
	                        				<li>4 Dias/3noches - 2 Personas</li>
					                        <li>Visitas Guiadas</li>
					                        <h3>desde S/.870</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Tambopata.php" >Conoce más >></a>
									</div>
								
								</div>
							
								<img class="contenido" src="imagenes/selva2.jpg" >

							</div>

							<h2 class="titulo">Tarapoto</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/selva3.jpg" >
								<div class="dis">
									<p class="after" >Nuestras ofertas y tarifas están diseñadas para todos los presupuestos.Maravillate con los impresionantes atractivos que guarda la hermosa cuidad de Tarapoto.Descubre la naturaleza,floray fauna que tembargaran... </p>
									<div class="detalles">
										<ul>
	                        				<li>4 Dias/3noches - 2 Personas</li>
					                        <li>Visitas Guiadas</li>
					                        <h3>desde S/.940</h3>
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Tarapoto.php" >Conoce más >></a>
									</div>
									
								</div>
							
								<img class="contenido" src="imagenes/selva4.jpg" >

							</div>

							<h2 class="titulo">Chanchamayo y Tarma</h2>
							<div  class="contenido">
								
								<img class="contenido" src="imagenes/selva5.jpg" >
								<div class="dis">
									<p class="after" > Luego de tomar el desvío a Tarma, podrá llegaren 6 horas, desde Lima, a estos valles ubicados en zonas de selva alta con exuberante vegetación y rodeado de bosques de rica y variada fauna y vegetación.... Las tarifas están expresadas de dólares norteamericanos, incluyen todos los impuestos aplicables y son válidas para turistas extranjeros y peruanos. 
									</p>
									<div class="detalles">
										<ul>
	                        				<li>3 Dias/2noches - 2 Personas</li>
                        					<li>Visitas Guiadas</li>
                        					<h3>desde S/.740</h3> 
	                    				</ul>
                    				</div>
                    				<div class="referencia">
                    				<a  class="next" href="Chanchamayo.php" >Conoce más >></a>
									</div>
								
								</div>
							
								<img class="contenido" src="imagenes/selva6.jpg" >

							</div>

			</main>

<footer id="pie" class="centrado">

		<div class="contenido-columnas ">
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