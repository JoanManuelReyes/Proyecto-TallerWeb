<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-sierra.css">
    <title>Apurimac Tour</title>
    <script type="text/javascript" src="js/IncrementadorPrecio.js"></script>
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
        <Div class="centrado">
            <h1>4 días y 3 noches - Trekking Choquequirao 4 días</h1>
            <h3>Apurimac,Perú</h3>
        </Div>
        

        <div class="imagen-slider">
            <ul>
                <li><img src="imagenes_sierra/Apurimac.jpg" alt=""></li>
                <li><img src="imagenes_sierra/Apurimac2.jpg" alt=""></li>
                <li><img src="imagenes_sierra/Apurimac3.png" alt=""></li>
            </ul>
        </div>

        <div class="space">
            <h2 class="centrado">Descripcion General</h2>
            <p>
                Visita la ciudad hermana de Machu Picchu, sitio arqueológico en muy buen estado de conservación con
                caminata por el cañón del Apurímac.
            </p>
            <ul>
                <li>Servicio gratuito de recogida desde cusco</li>
                <li>Visite el sitio arqueológico de Choquequirao.</li>
                <li>Disfruta la noche de campamento en Playa Rosalina, Choquequirao y Chiquisca (carpa compartida doble)
                </li>

            </ul>
        </div>

        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Cusco – Capuliyoc – Chiquisca</h2>
                <p>
                    Te pasaremos a buscar a tu alojamiento para comenzar un viaje de alrededor de 5 horas en vehículo
                    hasta el pueblo de Cachora. En este lugar haremos una pequeña pausa para alistar todo, de manera que
                    podamos comenzar la caminata. El trekking nos llevará hasta un lugar llamado Capuliyoc, donde
                    haremos una pausa para descansar y almorzar. Luego de este relajo, continuaremos la caminata por 5
                    horas más hasta Chiquisca, el primer campamento y donde pasaremos la primera noche.
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 - Chiquisca – Santa Rosa – Choquequirao</h2>
                <p>
                    Nos levantaremos muy temprano para tomar desayuno y obtener energía para la caminata del día.
                    Nuestra primera visita será a playa Rosalina, en el río Apurímac. Descansaremos antes de continuar
                    la caminata, esta vez de subida durante 4 horas. Llegaremos a Santa Rosa, a 2100 m de altitud, donde
                    tendremos nuestro almuerzo y podremos descansar de la subida. Después, caminaremos por 3 horas más
                    hasta el complejo arqueológico Choquequirao. Tendremos las primeras vistas de las ruinas y podremos
                    acampar en algunos de sus andenes, donde se puede ver la ciudadela libremente. Durante la noche,
                    cenaremos y descansaremos.
                </p>
            </div>
            <div class="space">
                <h2>Dia 3 - Choquequirao – Santa Rosa – Chiquisca.</h2>
                <p>
                    Comenzaremos el día temprano con el desayuno, para luego hacer una visita de 2 horas al complejo
                    arqueológico. Durante el recorrido, el guía nos entregará algunos datos del lugar y explicará la
                    importancia para el imperio. Después de recorrer y tomar fotografías, regresaremos al campamento a
                    tomar nuestras cosas y comenzar el descenso hasta Santa Rosa. Llegaremos al lugar para almorzar y
                    descansar un poco, antes de continuar el trekking hasta playa Rosalina y luego a Chiquisca, donde
                    cenaremos y descansaremos.
                </p>
            </div>
            <div class="space">
                <h2>Dia 4 - Chiquisca – Cachora – Cusco</h2>
                <p>
                    Comenzaremos este último día con el desayuno, como ya es costumbre, y caminaremos hacia Cachora.
                    Llegaremos a la hora de almorzar, de manera que podremos disfrutar un momento con el grupo antes de
                    tomar el vehículo que nos llevará de vuelta a la ciudad de Cusco, donde termina nuestra actividad.
                    ¡Fin de nuestro servicio!
                </p>
            </div>
        </div>

        <div class="contenedor">
            <h2 class="centrado">Contenido Mínimo</h2>
                <div class="modificador">
                    <div class="minimos">
                        <p>Cantidad mínima de personas:</p>
                        <p id="personasIniciales" value="">2</p>
                        <p>Cantidad mínima de días:</p>
                        <p id="diasIniciales" value="">4</p>
                        <h2>Importante:</h2>
                        <p>La cantidad de noches siempre es un valor anterior al de la cantidad de días.</p>
                        </div>
                </div>
        </div>

        <div class="centrado">
            <div class="contenido-columnas">
                <div class="contenedor">
                    <h2>Personas</h2><br>
                    <div class="modificador">
                        <button id="verificador1" onclick="botonPersonas(this)" value="disminuir">
                            <
                        </button>

                        <div class="valor">
                            <p id="acumulado1" value="">2</p>
                        </div>

                        <button onclick="botonPersonas(this)" value="aumentar">
                            >
                        </button>
                    </div>
                </div>

                <div class="contenedor">
                    <h2>Días</h2><br>
                    <div class="modificador">
                        <button id="verificador2" onclick="botonDias(this)" value="disminuir">
                            <
                        </button>

                        <div class="valor">
                            <p id="acumulado2" value="">4</p>
                        </div>

                        <button onclick="botonDias(this)" value="aumentar">
                            >
                        </button>
                    </div>
                </div>

                    <div class="contenedor">
                        <h2>Total</h2>
                        <div class="modificador">
                            <div class="preciof">
                                <p>S/.</p><p id="preciofinal" value="">1542</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <nav><a href="Reservar.php">Reserva ahora mismo</a></nav>
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