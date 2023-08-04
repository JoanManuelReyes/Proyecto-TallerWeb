<!DOCTYPE html>
<html>
<head>
	<title>ANDES FLY</title>
	<link rel="stylesheet" href="css/estilo-guias.css">
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
		<h1 class="titulo">Guias Turisticos</h1>
		<h1 class="title">GUIAS TURISTICOS</h1>
		<div class="uno">
			<img class="imagen" src="imagenes_guias/guia.jpg">
			<p class="texto">Nuestro objetivo es ofrecer una experiencia agradable a los visitantes, guiándolos y dotándolos de los recursos informativos necesarios para que puedan aprovechar al máximo su tiempo de estadía. Por ello tenemos a nuestra disposicion guias turisticos que haran su visita una experiencia mucho mas agradable de lo que sera, estos te comentaran las mejores opciones al momento de tomar un bus, manejo de la moneda local, numero de contactos de hospitales, numeros policiales, etc. Por otro lado tambien te ofrecera un folleto en tu idioma materno con todo lo que necesitas saber para tu estadia en nuestro pais Sabemos que su seguridad es lo primero, por ello cada guia turistco esta certificado por el Ministerio de Educacion.</p>
		</div>
		<div class="uno">
			<p class="texto">Nuestros guias turisticos se encuentran tanto en costa, sierra y selva. La costa es una estrecha franja que se sitúa entre el océano pacífico y la cordillera occidental. En esta región, las precipitaciones disminuyen de norte a sur.La sierra ocupa una muy extensa área dentro del territorio peruano. Los Andes constituyen el 28% de este, en esta región se extienden entre picos y abruptas cimas, entre nevados y pampas.Por ultimo la selva es la region mas extensa del Peru, el paisaje de esta región natural del Perú tiene como principal característica su inmenso tamaño territorial, su cálido clima y su humedad.</p>
			<img src="imagenes_guias/peru.jpg">
		</div>
		<h1 class="gtc">GUIAS TURISTICOS DE LA COSTA</h1>
		<div class="gunny">

			<div class="gunny1">
				<img src="imagenes_guias/costa1.jpg">
				<p>Luis es alguien comprometido con su trabajo, domina el ingles, frances, espanol y chino Mandarin. Se graduo de la carrera de Hoteleria y turismo en la Universidad Mayor de San Marcos</p>
			</div>
			<div class="gunny2">
				<img src="imagenes_guias/costa2.jpg">
				<p>Henry es alguien muy carismatico al momento de explicarse, domina el ingles, espanol y frances. Fue miembro voluntario de los bomberos en el año 2018, y ahora esta estudiando la carrera de traduccion e iterpretacion.</p>
			</div>
			<div class="gunny3">
				<img src="imagenes_guias/costa3.jpg">
				<p>Roberto fue a Francia para estudiar la carrera de Hoteleria y Turismo, le encanta los animales y hablar sobre los idiomas. Sabe hablar ingles, español y frances.</p>
			</div>
		</div>

		<h1 class="gtc">GUIAS TURISTICOS DE LA SIERRA</h1>
		<div class="gunny">

			<div class="gunny1">
				<img src="imagenes_guias/sierra1.jpg">
				<p>Ariana es una persona muy centrada lo que le permite escuchar atentamente a los turista y responder todas sus dudas. Domina el ingles y espanol. Estudio Ciencias politicas pero como le encantaba viajar decidio estudiar Hoteleria y turismo en la Universidad La Catolica</p>
			</div>
			<div class="gunny2">
				<img src="imagenes_guias/sierra2.jpg">
				<p>Fernanda es alguien muy amable que tiene paciencia al momento de explicar. Habla aleman, espanol e ingles. Estudio traduccion e Iterpretacion en la Universidad San Martin de Porres.</p>
			</div>
			<div class="gunny3">
				<img src="imagenes_guias/sierra3.jpg">
				<p>Elizabeth tiene muchos años siendo guia turistico, habla ingles, español y portugues. Estudio en la Universidad Ricardo Palma y realizo unos cursos sobre atencion al cliente en Brasil. </p>
			</div>
		</div>

		<h1 class="gtc">GUIAS TURISTICOS DE LA SELVA</h1>
		<div class="gunny">

			<div class="gunny01">
				<img src="imagenes_guias/selva1.jpg">
				<p class="gunny1">Josefina le gusta tomarse fotos con los turistas como recurso, tiene una capacidad extraordinaria para comunicarse. Habla espanol, ingles, aleman y chino</p>
			</div>
			<div class="gunny02">
				<img src="imagenes_guias/selva2.jpg">
				<p>Rosa es muy observadora y ademas es amable con los ninos, Habla español e ingles. Es egresada de la carrera de comunicacion de la Universidad San Martin de Porres</p>
			</div>
			<div class="gunny03">
				<img src="imagenes_guias/selva4.jpg">
				<p>Maria es una persona divertida que le encanta conocer nuevos lugares y personas. Es estudiante de la carrera de Hoteleria y turismo, habla ingles y español</p>
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