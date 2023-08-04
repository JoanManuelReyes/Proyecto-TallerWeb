<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo-sierra.css">
    <title>Puno Tour</title>
    <script type="text/javascript" src="../js/IncrementadorPrecio.js"></script>
</head>

<body>
    <?php 
    include '../header/header2.php';
    ?>
    
    <main>
        <div class="centrado ">
            <h1>4 días y 3 noches - Tour en dos dias: Uros, Amantani, Taquile y Sillustani.</h1>
            <h3>Puno,Perú</h3>
        </div>
        <div class="imagen-slider">
            <ul>
                <li><img src="../imagenes_sierra/Puno.jpg" alt=""></li>
                <li><img src="../imagenes_sierra/Puno2.jpg" alt=""></li>
                <li><img src="../imagenes_sierra/Puno3.jpg" alt=""></a></li>
            </ul>
        </div>

        <div class="space">
            <!--comentario-->
            <h2 class="centrado">Descripcion General</h2>
            <p>
                En este exclusivo tour, tendrás la oportunidad de Visitar los 4 lugares más emblemáticos de Puno en 2
                días: Uros, Amantani, Taquile y Sillustani. Este tour es para personas que no tienen mucho tiempo y
                quieren explorar todo en Puno.
            </p>
            <ul>
                <li>Visita una casa local en Amantani</li>
                <li>Ver los lugares más importantes de Puno</li>
                <li>Explora 4 lugares en solo 2 días</li>
            </ul>
        </div>
        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Isla de los Uros y Amantani</h2>
                <p>
                    En este tour a las islas Amantani, Uros y Taquile, los pasajeros son recogidos de los hoteles del
                    centro hasta el puerto para luego tomar un cómodo bote a motor. Su guía (español / inglés) lo
                    llevará a las islas flotantes de los Uros (tiempo de viaje de 30 minutos), antes de llegar a
                    Amantani (aproximadamente 2.5 horas).<br><br>

                    Camine (30 minutos cuesta arriba) hasta las casas locales en la isla de Amantani, luego coma un
                    almuerzo proporcionado por los isleños. Habrá tiempo para descansar antes de caminar hasta la cima
                    de la isla para ver los templos ceremoniales incas Pachamama y Pachatata, y también disfrutará de
                    una de las mejores puestas de sol del mundo. Regreso a la casa local para cenar, luego por la noche
                    baile con las familias (la fiesta es opcional).
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 - Taquile y Sillustani</h2>
                <p>
                    Después del desayuno, descenso al puerto de Amantani (8:00 am) para tomar un bote hacia la isla de
                    Taquile. Almuerzo en la isla y luego regreso al Puerto de Amantani (1:00 pm.) Llegada a Puno
                    alrededor de las 3:30 pm.<br><br>

                    Su guía lo estará esperando para llevarlo a Sillustani. Visita por aproximadamente 1 hora antes de
                    regresar a Puno. ¡Fin de nuestro servicio!
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
                        <p id="diasIniciales" value="">2</p>
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
                            <p id="acumulado2" value="">2</p>
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
                                <p>S/.</p><p id="preciofinal" value="">570</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <nav><a href="Reservar.php?Id=T00006">Reserva ahora mismo</a></nav>
        </section>
    </main>
    <?php 
    include '../footer/footer2.php';
    ?>
</body>

</html>