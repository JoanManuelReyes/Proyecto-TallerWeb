<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo-costa.css">
    <title>Huacachina Tour</title>
    <script type="text/javascript" src="../js/IncrementadorPrecio.js"></script>
</head>
<body>
	<?php 
    include '../header/header2.php';
    ?>


    <main>
        <div class="centrado">
             <h1>3 días y 2 noches - Tour por las playas de Paracas</h1>
            <h3>Ica, Perú</h3>
        </div>
       
        <div class="imagen-slider">
            <ul>
                <li><img src="../imagenes/img5.jpg"></li>
                <li><img src="../imagenes/img6.jpg"></li>
                <li><img src="../imagenes/img15.jpg"></li>
                <li><img src="../imagenes/img16.jpg"></li>
                <li><img src="../imagenes/img17.jpg"></li>
                <li><img src="../imagenes/img18.jpg"></li>
            </ul>
        </div>

        <div class="space">
            <h2 class="centrado">Descripcion General</h2>
            <p>
               Paracas es una ciudad de la costa oeste de Perú. Es conocida por sus playas, como El Chaco, ubicada en la bahía resguardada de Paracas. La ciudad es un punto de partida hacia las islas Ballestas deshabitadas, hogar de lobos marinos, pelícanos y pingüinos de Humboldt. La escabrosa Reserva Nacional de Paracas tiene abundante fauna y se extiende por desierto, océano, islas y la península de Paracas.
            </p>
                <ul>
                    <li>Nadar en la hermosa costa con aguas cristalinas.</li>
                    <li>Caminar por las hermosas costas que revosan de una abundante fauna.</li>
                    <li>Alquilar un yate y viajar a las islas Ballestas.</li>
                    <li>Jugar con uan gran variedad de animales marinos.</li>
                    <li>Tomarse fotos.</li>
                </ul>
        </div>
        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Senderismo al atardecer por la Reserva Nacional de Paracas</h2>
                <p>
                   Nos reuniremos a las 15:30 horas en el Restaurant Paracas a la hora indicada para trasladarnos hasta la Reserva Nacional de Paracas, uno de los espacios protegidos más destacados de la costa sur de Perú. Una vez allí, iniciaremos una caminata de una hora y cuarto de duración por los dorados acantilados y tranquilas playas de la Reserva Nacional de Paracas. Con esta ruta de senderismo sentiremos la energía que desprende este lugar rodeado de leyendas como la del Kori Apu, el señor de la Montaña Dorada, que lo desvelaremos durante el paseo. Sentirás la fresca brisa marina mientras caminamos por la costa de Paracas bajo la luz rojiza del atardecer y se maravillaran con los paisajes vírgenes de este espacio natural. Finalmente, haremos una parada en la cima de uno de los acantilados para disfrutar del espectáculo de la puesta de sol sobre el océano Pacífico. Tras esto, el autobús los recogerá a su hotel.
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 – Visita de las Islas Ballestas</h2>
                <p>
                   Nos dirigiremos primero hasta el puerto, donde subiremos a bordo de una lancha para iniciar el trayecto hacia las Islas Ballestas. Durante esta travesía, nos encontraremos con varios ejemplares de leones marinos, aves y pingüinos de Humboldt. ¡Les encantará! Nos acercaremos también al Candelabro de Paracas, una curiosa figura construida en una ladera y cuyo origen es aún desconocido. De hecho, solo se sabe que tiene más de 2000 años. El resto de teorías las descubriremos durante el tour. Tras un breve descanso, continuaremos el recorrido en tierra firme dentro de la Reserva Nacional de Paracas. En ella visitaremos el Centro de Interpretación para conocer mejor la fauna y la flora de este lugar. Veremos además los restos de la Catedral, una formación rocosa que durante años fue un auténtico emblema de Perú.  Después de recorrer también las playas Roja y Yumaque, regresaremos al hotel.
                </p>
            </div>
            <div class="space">
                <h2>Dia 3 – Visita al simulador rotatorio</h2>
                <p>
                   Disfrutarás de un apasionante viaje al pasado de Perú. ¿Estas listo para retroceder hasta 2500 años en el tiempo? Mediante un simulador rotatorio de tres pisos observaran representaciones a tamaño real de algunos de los acontecimientos más notables de la historia de Latinoamérica. Gracias a la tecnología 3D y a los equipamientos audiovisuales y animatrónicos, gozarás de un mayor realismo y de una experiencia sin igual que tendrá una duración de 45 minutos. Serán testigos de la llegada de la expedición libertadora a Perú o asistir a las primeras intervenciones quirúrgicas realizadas en el continente. De esta forma concluirá su última estadía por Paracas ¡Fin de nuestro servicio!
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
                                <p>S/.</p><p id="preciofinal" value="">850</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <div class="enlace">
            	<a href="Reservar.php?Id=T00003">Reserva ahora mismo</a>
            </div>
        </section>
    </main>

    <?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>