<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo-costa.css">
    <title>Costa Verde Tour</title>
    <script type="text/javascript" src="../js/IncrementadorPrecio.js"></script>
</head>
<body>
	<?php 
    include '../header/header2.php';
    ?>


    <main>
        <div class="centrado">
             <h1>3 días y 2 noches - Tour por el Circuito de playas de la Costa Verde</h1>
            <h3>Lima, Perú</h3>
        </div>
       
        <div class="imagen-slider">
            <ul>
                <li><img src="../imagenes/img7.jpg"></li>
                <li><img src="../imagenes/img8.jpg"></li>
                <li><img src="../imagenes/img2.jpg"></li>
                <li><img src="../imagenes/img1.jpg"></li>
                <li><img src="../imagenes/img9.jpg"></li>
                <li><img src="../imagenes/img10.jpg"></li>
            </ul>
        </div>

        <div class="space">
            <h2 class="centrado">Descripcion General</h2>
            <p>
               La atracción principal de la costa verde Lima son sus playas, que, aunque no son cálidas y cristalinas, son muy visitadas por surfistas. La única playa de arena se encuentra a nivel de Chorrillos y es muy visitada durante el verano. Los parques y malecones de la Costa verde son ideales para dar un paseo caminando. Todo esto acompañado por el sonido del mar. Desde la Costa verde tendrás una bonita perspectiva de Lima. Podrás ver como los edificios se erigen por encima del acantilado.
            </p>
                <ul>
                    <li>Nadar en la hermosa playa.</li>
                    <li>Caminar por el hermoso recorrido de la costa.</li>
                    <li>Paracaidas deportivo.</li>
                    <li>Comer en restaurantes con una hermosa vista al mar.</li>
                    <li>Tomarse fotos.</li>
                </ul>
        </div>
        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Recorrido por los lugares más icónicos de Lima</h2>
                <p>
                   Explore la ciudad de Lima, conocida por su hermosa arquitectura, historia y deliciosa comida. Te desplazarás por la ciudad en la comodidad de un vehículo privado con nuestro guía turístico experimentado. Sera recogido en su alojamiento y en la noche será llevado a uno de los restaurantes más reconocidos de Lima según sea el platillo que espera consumir. Después regresara a su estancia en su hotel.
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 – Surf en las Playas de Chorrillos</h2>
                <p>
                   Los llevaremos a las mejores playas de este distrito donde pueda optar por practicar surf, previas lecciones si es necesario, o optar por disfrutar de su estadía en estas playas tan visitadas. A la hora del almuerzo lo llevaremos a un restaurante que prepara los mas deliciosos platillos marinos. En la tarde podrá optar que lo llevemos devuelta a su hotel o quedarse hasta las 8 de la noche.
                </p>
            </div>
            <div class="space">
                <h2>Dia 3 – Paracaidismo deportivo por la Costa Verde</h2>
                <p>
                   Podrá experimentar el deslizarse por el aire con su instructor y ver los distritos de Magdalena, San Isidro, Miraflores y San Miguel, que conforman la Costa Verde de Lima. El vuelo dura entre 10 y 15 minutos y todos los participantes recibirán una tarjeta de memoria SD con un vídeo en alta definición de su vuelo para compartir con su familia y amigos. De esta forma concluirá su última estadía por la Costa Verde ¡Fin de nuestro servicio!
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
                                <p>S/.</p><p id="preciofinal" value="">1150</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <div class="enlace">
            	<a href="Reservar.php?Id=T00001">Reserva ahora mismo</a>
            </div>
        </section>
    </main>

    <?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>