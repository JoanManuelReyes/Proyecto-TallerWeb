<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/estilo-Rselva.css">
    <title>Tambopata Tour</title>
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
        <h1>4 días y 3 noches - Tambopata Jungle</h1>
        <h5>Madre de Dios Region,Perú</h5>
        <div class="recorrido-selva">
            <ul>
                <li><img src="imagenes_selva/tambopata2.jpg" width="50%" alt=""></li>
                <li><img src="imagenes_selva/tambopata3.jpg" width="50%" alt=""></li>
                <li><img src="imagenes_selva/tambopata4.jpg" width="50%" alt=""></a></li>
            </ul>
        </div>
    </section>
    <section class="info">
        <div class="info__descripcion">
            <h2>Descripcion General</h2>
            <p>
                Aventúrese en las profundidades de la selva amazónica y explore el diverso Parque Nacional 
                Tambopata en una excursión de 4 días desde Puerto Maldonado. Descubra la rica biodiversidad de la selva 
                mientras recorre los paseos nocturnos de los caimanes, visite la Isla de los Monos, navegue
                 por el lago Sandoval y emprenda algunas excursiones por la selva. Esta es una gran oportunidad
                  para desconectar y sumergirse en la hermosa naturaleza del Perú durante su viaje
            </p>
            <ul>
                <li>Toma un tour de 4 días por la selva desde Puerto Maldonado al Parque Nacional Tambopata</li>
                <li>Descubre la fauna y la flora de la selva mientras atraviesas la selva tropical.</li>
                <li>Disfruta de un viaje sin preocupaciones con este paquete todo incluido de Amazon Jungle</li>
            </ul>
        </div>
        <div class="info__itinerario">
            <h2>Itinerario</h2>
            <div>
               <h2>Dia 1 - Llegada a Puerto Maldonado - Traslado al albergue</h2> 
               <p>
                Llegada al aeropuerto de Puerto Maldonado. Disfruta un -Paseo en bote de 25 minutos hasta el albergue Inkaterra
                 Hacienda Concepción. Adéntrate en las profundidades de la selva tropical con Concepción Senderos para caminar 
                 por la jungla y tomar un crucero por el río Crepúsculo como nocturno criaturas despiertas. Noche en el albergue. 
               </p>
            </div>
            <div>
                    <h2>Dia 2 - Lago Sandoval</h2>
                        <p>
                                Camina por la selva tropical y deslízate por el lago cristalino Sandoval. Escale el Inkaterra Canopy Walkway para obtener
                                una panorámica vistas y observar la actividad secreta de la vida silvestre en la oscuridad 
                                explorando la selva tropical por la noche. Noche en el albergue.
                        </p>
            </div>
            <div>
                <h2>Dia 3 - Pesca</h2>
                <p>
                    Descubre muchas de las plantas tropicales de la selva. de cerca en nuestro bio-huerto orgánico seguido
                    de una visita a Palmetum, una colección de 19 palmeras amazónicas. Remar en un cocha, un lago con arco de buey y pesca
                    de pirañas. Visita al interior Collpa. Noche en el albergue.
                </p>
            </div>
            <div>
                <h2>Dia 4 - Regreso a Puerto Maldonado </h2>
                <p>
                    Salga en bote desde su albergue junto al río, visitando un Casa de las Mariposas antes de tu vuelo de salida desde Puerto Maldonado.
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
                                <p>S/.</p><p id="preciofinal" value="">870</p>
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