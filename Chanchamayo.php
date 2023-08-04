<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/estilo-Rselva.css">
    <title>Tour Chanchamayo</title>
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
    
    <section class="slider-selva">
        <h1>4 días y 3 noches - Chanchamayo Aventurero</h1>
        <h5>Junin Region,Perú</h5>
        <div class="recorrido-selva">
            <ul>
                <li><img src="imagenes_selva/chanchamayo2.jpg" width="25%" alt=""></li>
                <li><img src="imagenes_selva/chanchamayo3.jpg" width="25%" alt=""></li>
                <li><img src="imagenes_selva/chanchamayo4.jpg" width="25%" alt=""></li>
            </ul>
        </div>
    </section>
    <section class="info">
        <div class="info__descripcion">
            <h2>Descripcion General</h2>
            <p>
                Luego de viajar por la Carretera Central y tomar el desvío a Tarma, podrá llegar en 6 horas, desde Lima, 
                a estos valles ubicados en zonas de selva alta con exuberante vegetación y rodeado de bosques de rica y variada fauna y vegetación.
            </p>
            <ul>
                <li>Excursiones mencionadas en el itinerario</li>
                <li>Entradas a los atractivos a visitar</li>
                <li>Guiado profesional en español o inglés</li>
            </ul>
        </div>
        <div class="info__itinerario">
            <h2>Itinerario</h2>
            <div>
               <h2>Dia 1 - La Merced</h2> 
               <p>
                10:00 hr. Nos trasladaremos hacia el distrito de San Ramón donde realizaremos una caminata de 30 minutos aproximadamente para llegar a la Catarata el Tirol donde podremos disfrutar de un refrescante baño.
                Por la tarde visitaremos Zhaveta Yard, observaremos el mariposario, el mini zoológico y las variedades de plantas (medicinales, ornamentales, orquídeas y otros),
                Visita a la Plaza de Armas de La Merced y el Mirador de la Cruz de Chanchamayo.
               </p>
            </div>
            <div>
                    <h2>Dia 2 - Valle del Perene</h2>
                        <p>
                            09:45 hr. Comenzando con nuestro recorrido apreciaremos el Perfil del Nativo Dormido. Conoceremos el nacimiento del Valle del Perené (confluencias de ríos), luego nos dirigiremos hacia Puerto Yurinaki donde después de una breve caminata, atravesaremos el Puente Colgante Victoria.
                            Conoceremos la Catarata Velo de Novia con sus 65 metros de caída y la Catarata Bayoz con sus múltiples piscinas naturales ideales para un refrescante chapuzón en sus cristalinas aguas.
                            Nos dirigiremos Puerto Chirani donde realizaremos paseo en bote por el río Perené
                            Intercambio cultural en la Comunidad Nativa Asháninka Pampa Michi.
                            Visita a Chanchamayo Highland planta procesadora productos de la zona café, cacao, cítricos y otras variedades de productos, degustación gratuita (tragos, jugos, café etc.).
    
         
                        </p>
            </div>
           
            <div>
                <h2>Dia 3 - Traslado a la merced terminal terrerstre </h2>
                <p>
                    Nos dirijiremos a recogerlo de su hotel en tarnma para posterior llevarlo hacia la merced y luego llevarlo al terminal terrestre para su regreso a Lima.
                     ¡Fin de nuestro servicio! 
                </p>
            </div>
        </div>

        <div class="contenedoraux">
            <h2 class="centrado">Contenido Mínimo</h2>
                <div class="modificador">
                    <div class="minimos">
                        <p>Cantidad mínima de personas:</p>
                        <p id="personasIniciales" value="">2</p>
                        <p>Cantidad mínima de días:</p>
                        <p id="diasIniciales" value="">3</p>
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
                            <p id="acumulado2" value="">3</p>
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
                                <p>S/.</p><p id="preciofinal" value="">740</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="reserva">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <a href="Reservar.php">Reserva ahora mismo</a>
        </section>
    </section>
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