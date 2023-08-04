<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/estilo-nosotros.css">
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

<main>
	<div class="foto-nostros">
		<div class="centrado">
				<h1>Nostros</h1>
					<div class="contenido-columnas">
						<div class="tarjeta-historia">
								<h3>Nuestra Historia</h3>
								<img src="imagenes-nosotros/N1.png">
								<p>Andes Fly S.A. es una empresa dedicada a atender la demanda de tours de sus clientes. La empresa se fundó a fines de 2019 viendo el potencial del turismo en el país con la llegada de la nueva década. Contamos con la inversión de capitales nacionales que nos ha ayudado en nuestro crecimiento para nuestra pequeña organización.</p>
						</div>
					</div>

				<div class="contenido-columnas">
					<div class="tarjeta">
						<h3>Proposito</h3>
						<img src="imagenes-nosotros/N2.png">
						<p>Nuestro propósito es impulsar la dinámica de la economía peruana, ayudando a miles de familias de varios lugares del país a que los visitantes puedan consumir los productos y servicios que ofrece la población.</p>
					</div>

					<div class="tarjeta">
						<h3>Misión</h3>
						<img src="imagenes-nosotros/N3.png">
						<p>Desarrollar los mercados internos aumentando el turismo en el Perú, esto brinda muchas oportunidades de crecimiento económico a varios hogares y da a conocer las diferentes perspectivas y costumbres de los peruanos.</p>
					</div>

					<div class="tarjeta">
						<h3>Visión</h3>
						<img src="imagenes-nosotros/N4.png">
						<p>Ser la empresa de referencia para los peruanos que quieran disfrutar estadías en la gran variedad de sitios que su país tiene para ofrecer.</p>
					</div>
				</div>
		</div>
		<div class="contenido-columnas">
			<div class="tarjeta-valores">
				<div class="centrado">
				<h3>Valores</h3>
				<img src="imagenes-nosotros/N5.png">
				</div>
					<ul>
						<li>Solidaridad con los demás.</li>
						<li>Respeto con los compañeros de trabajo y los clientes.</li>
						<li>La puntualidad para cada actividad que la empresa realiza.</li>
						<li>Seguridad garantizada para los clientes y trabajadores de la organización.</li>
						<li>Responsabilidad en las acciones que se realizan.</li>
					</ul>
			</div>
		</div>
	</div>
</main>

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