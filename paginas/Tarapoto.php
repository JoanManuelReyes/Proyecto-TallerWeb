<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilo-Rselva.css">
    <title>Tarapoto Tour</title>
    <script type="text/javascript" src="../js/IncrementadorPrecio.js"></script>
</head>
<body>
    <?php 
    include '../header/header2.php';
    ?>
    
    <section class="slider-selva">
        <h1>4 días y 3 noches - Tarapoto Aventurero</h1>
        <h5>San Martin Region,Perú</h5>
        <div class="recorrido-selva">
            <ul>
                <li><img src="../imagenes_selva/tarapoto2.jpg" width="25%" alt=""></li>
                <li><img src="../imagenes_selva/tarapoto3.jpg" width="25%" alt=""></li>
                <li><img src="../imagenes_selva/tarapoto4.jpg" width="25%" alt=""></a></li>
            </ul>
        </div>
    </section>
    <section class="info">
        <div class="info__descripcion">
            <h2>Descripcion General</h2>
            <p>
                Descubre las maravillas naturales, culturales y gastronómicas de Tarapoto y disfruta de impresionantes
                 escenarios y las mejores actividades con Aventuras en 4 días de recorrido.
            </p>
            <ul>
                <li>4 Noches de alojamiento & 4 desayunos en Tarapoto</li>
                <li>Guía profesional de turismo</li>
                <li>Tickets de ingreso a los atractivos turísticos</li>
            </ul>
        </div>
        <div class="info__itinerariot">
            <h2>Itinerario</h2>
            <div>
               <h2>Dia 1 - Excursion a Lamas Nativo</h2> 
               <p>
                Los recogeremos de su hotel para empezar esta excursión por la ciudad de Lamas, ubicada a pocos minutos de la ciudad de Tarapoto. 
                Nuestro primer punto de visita será el  Castillo de rocas , con  una construcción en medio de la ciudad  y podres observar al rededor de lamas  su esplendor. 
                También nos dirigimos  al mirador Sheretero  para visualizar desde alli un hermoso paisaje que es la comunidad del barrio Wayku y su alrededores   y poner atención  a cada  
                 Leyenda que va contando el guía , Y por último, conoceremos la cultura de la comunidad nativa Wayku, quienes nos instruirán acerca de las bondades de sus 
                 productos como la sangre de grado, la Copaiba, el Sacha inchi, entre otros. 
               </p>
            </div>
            <div>
                    <h2>Dia 2 - Tour de Alto Mayo</h2>
                        <p>
                            Lo recogeremos de su hotel entre las 7:30 - 8:00 am para salir de la rumbo a la Ciudad de  Moyobamba . En este lugar, visitaremos el orquideario (colección de orquídeas)
                             de la ciudad, donde un guía nos llevará por las instalaciones y nos dará más información sobre estas flores. Luego, visitaremos la Ciudad de  Rioja , lugar donde conoceremos el nacimiento del río Tioyacu, 
                             donde tendremos la posibilidad de refrescarnos y darnos un baño placentero  también  dar un paseo por las áreas verdes del lugar, apto para los visitantes  . Luego, visitaremos Chakra Vieja 
                             donde podremos degustar tragos típicos de la región. Una vez finalizado el circuito, tomaremos nuestro vehículo para regresar a Tarapoto y finalizar el recorrido.      
                        </p>
            </div>
            <div>
                <h2>Dia 3 - Cataratas del salto de la Bruja</h2>
                <p>
                    Aproximadamente eso de  las 08:30 am - 09:00 am, pasaremos a recogerlo de su respectivo hotel para iniciar con el recorrido. Nos dirigiremos por la carretera de Yurimaguas y haremos una parada en el Km 39. 
                    En este punto iniciaremos con una caminata de aproximadamente 30 minutos hasta las caídas de agua del Salto de la Bruja, podremos disfrutar de las 4 caídas de agua donde podrás relajarte y bañarte para luego realizar el descenso. 
                    Luego de que nuestro guía pueda dar la explicación sobre la geografía e historia de la zona, podrás disfrutar de un almuerzo en un restaurante de la localidad, para finalmente retornar a la ciudad de  Tarapoto 
                    luego de a ver tenido una hermosa aventura en la catarata del Salto De La Bruja .  
                </p>
            </div>
            <div>
                <h2>Dia 4 - Traslado de Hotel - Aeropuerto Guillermo del Castillo Paredes </h2>
                <p>
                    Nos dirijiremos a recogerlo de su hotel para posterior llevarlo al aeropuerto apra su regreso a Lima.
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
                                <p>S/.</p><p id="preciofinal" value="">940</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <section class="reserva">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <a href="Reservar.php?Id=T00008">Reserva ahora mismo</a>
        </section>
    </section>
    <?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>