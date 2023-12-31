<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo-sierra.css">
    <title>Cusco Tour</title>
    <script type="text/javascript" src="../js/IncrementadorPrecio.js"></script>
</head>

<body>
    <?php 
    include '../header/header2.php';
    ?>
    
    <main>
        <div class="centrado">
             <h1>4 días y 3 noches - Tour de aventura desde la selva inca de Cusco a Machu Picchu</h1>
            <h3>Cusco,Perú</h3>
        </div>
       
        <div class="imagen-slider">
            <ul>
                <li><img src="../imagenes_sierra/Cusco.jpg" alt=""></li>
                <li><img src="../imagenes_sierra/Cusco2.jpg" alt=""></li>
                <li><img src="../imagenes_sierra/Cusco3.jpg" alt=""></a></li>
            </ul>
        </div>
        <div class="space">
            <!--comentario-->
            <h2 class="centrado">Descripcion General</h2>
            <p>
                Descubre una de las 7 maravillas del mundo de la region andina peruana en esta aventura que sera una
                excursion de 4 dias y 3 noche. Tomara un sendero de la selva inca desde Cusco a Machu Picchu. En el
                camino, participará en actividades de aventura como ciclismo, rafting, tirolesa y senderismo, todo
                mientras disfruta de las impresionantes vistas de las montañas y ríos peruanos.
            </p>
            <div>
                <ul>
                    <li>Disfruta de actividades como ciclismo, rafting, tirolesa y trekking</li>
                    <li>Relájate en las aguas termales de Cocalmayo después de un día de caminata</li>
                    <li>Visita pueblos y aprende sobre la gente local</li>
                    <li>Explore Machu Picchu</li>
                </ul>
            </div>
        </div>
        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Cusco a Santa María (Ciclismo y Rafting)</h2>
                <p>
                    Comenzará tomando una furgoneta durante 3,5 horas hasta Abra Málaga, que se encuentra a 4350 metros
                    sobre el nivel del mar. Allí se le proporcionará todo el equipo antes de montar su bicicleta para un
                    agradable paseo en bicicleta cuesta abajo a Huamanmarca, a 1.430 metros sobre el nivel del
                    mar.<br><br>

                    Después de un descanso para almorzar, sus guías lo llevarán a una aventura de rafting en el río
                    Quillabamba durante aproximadamente 2 horas (costos no incluidos). La experiencia de rafting tendrá
                    una duración de 25 kilómetros e incluye rápidos de clase 2 y clase 3.<br><br>

                    Más tarde esa noche, disfrutará de la cena antes de retirarse a dormir en Santa María.
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 - Santa María a Santa Teresa (Trekking)</h2>
                <p>
                    Después del desayuno, se preparará para su caminata en lo alto del bosque. En su camino hacia
                    arriba, pasará por locales mientras se aventura hacia el Camino Inca original en el punto más alto
                    de su caminata.<br><br>

                    Después de dejar atrás el Camino Inca, llegará al pueblo de Quellomayo, donde disfrutará de un
                    delicioso almuerzo y un pequeño descanso antes de caminar hacia las aguas termales de Cocalmayo. Esa
                    noche disfrutará de una cena antes de pasar la noche en una casa de familia de Santa Teresa.
                </p>
            </div>
            <div class="space">
                <h2>Dia 3 - Santa Teresa a Aguas Calientes (Tirolesa)</h2>
                <p>
                    Después del desayuno, viajará a una tirolesa donde pasará 2 horas (gastos no incluidos). Desde allí,
                    el grupo será llevado en autobús a un área conocida como Hidroeléctrica para almorzar.<br><br>

                    Luego de un breve descanso, continuará caminando por las vías del tren, disfrutando de hermosos
                    paisajes durante aproximadamente 3 horas. Llegará al pueblo de Aguas Calientes alrededor de las 4:00
                    p. m., donde se registrará para su última noche de alojamiento y cena.
                </p>
            </div>
            <div class="space">
                <h2>Dia 4 - Machu Picchu a Cusco</h2>
                <p>
                    En su último día, se levantará temprano para tomar el autobús a Machu Picchu, donde realizará un
                    recorrido de 2 horas por las construcciones más importantes de la zona. Esta seguramente será una
                    experiencia esclarecedora, a medida que aprenda sobre esta antigua ciudad que una vez estuvo tan
                    vibrantemente viva.<br><br>

                    Después de su visita guiada, descenderá a Aguas Calientes para almorzar, antes de comenzar su viaje
                    de regreso a Cusco.
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
                                <p>S/.</p><p id="preciofinal" value="">990</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <nav><a href="Reservar.php?Id=T00004">Reserva ahora mismo</a></nav>
        </section>
    </main>
    
    <?php 
    include '../footer/footer2.php';
    ?>
</body>

</html>