<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-costa.css">
	<title>Tours de la Costa</title>
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
		<div class="imagen-slider">
            <ul>
                <li><img src="imagenes/img2.jpg"></li>
                <li><img src="imagenes/img4.jpg"></li>
                <li><img src="imagenes/img16.jpg"></li>
            </ul>
        </div>

        <h2 class="titulo centrado">Disfruta de las grandes calles, playas y ciudades de la región costa</h2>

        <div class="space">
            <p>Máncora, Chiclayo, Costa Verde, Paracas y Huacachina son de los destinos turísticos disponibles de la región costera de nuestro Perú. Estos lugares son ideales para aquellas personas que quieran pasar unas vacaciones con una estancia cercana al mar peruano. Ofrecemos paquetes que se adecuan según su presupuesto y sus requisitos. Las tarifas están expresadas de soles peruanos, incluyen todos los impuestos aplicables y son válidas para turistas extranjeros y peruanos.</p>
        </div>

        <section class="tours">
        <h2><b>Descubre los tours que tenemos para ti</b></h2>
            <div class="tours__card">
                <h2><b>Viaje a Costa Verde</b></h2>
                <div class="card">
                    <img src="imagenes/img1.jpg" width="25%" alt="">
                <p>El Circuito de Playas de la Costa Verde, popularmente conocido como la Costa Verde, es una vía ubicada en la ciudad de Lima, capital del Perú y la ciudad del Callao, el Primer Puerto, recorriendo así la parte sur y central del litoral limeño y chalaco uniendo los distritos de La Punta, Callao, La Perla, San Miguel, Magdalena del Mar, San Isidro, Miraflores, Barranco y Chorrillos.
                </p>    
                    <ul>
                        <li>3 días/2 noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.1150</h3>
                        <a href="CostaVerde.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>

            <div class="tours__card">
                <h2><b>Viaje a Huacachina</b></h2>
                <div class="card">
                    <img src="imagenes/img4.jpg" width="25%" height="70%" alt="">
                <p>
                    Si estas buscando recorrer el sur del Peru, y vivir las experiencias mágicas que tenemos para ti, contamos con diversos paquetes turísticos. Te animamos a ser parte de esta gran aventura! Conocerás todos los secretos y maravillas que dejaron las civilizaciones antiguas; además de destinos naturales como playas paradisíacas y el extenso desierto de grandes dunas.
                </p>    
                    <ul>
                        <li>4 días/3 noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.1730</h3> 
                        <a href="Huacachina.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>    

            <div class="tours__card">
                <h2><b>Viaje a Paracas</b></h2>
                <div class="card">
                    <img src="imagenes/img6.jpg" width="25%" height="70%" alt="">
                <p>
                    Paracas es una ciudad de la costa oeste de Perú. Es conocida por sus playas, como El Chaco, ubicada en la bahía resguardada de Paracas. La ciudad es un punto de partida hacia las islas Ballestas deshabitadas, hogar de lobos marinos, pelícanos y pingüinos de Humboldt. La escabrosa Reserva Nacional de Paracas tiene abundante fauna y se extiende por desierto, océano, islas y la península de Paracas.
                </p>      
                    <ul>
                        
                        <li>3 días/2 noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.850</h3>
                        <a href="Paracas.php">Ver Detalle</a>
                        
                    </ul>
                </div>
            </div>
        </section>
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