<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-costa.css">
    <title>Huacachina Tour</title>
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
        <div class="centrado">
             <h1>4 días y 3 noches - Tour por la laguna de Huacachina</h1>
            <h3>Ica, Perú</h3>
        </div>
       
        <div class="imagen-slider">
            <ul>
                <li><img src="imagenes/img3.jpg"></li>
                <li><img src="imagenes/img4.jpg"></li>
                <li><img src="imagenes/img11.jpg"></li>
                <li><img src="imagenes/img14.jpg"></li>
            </ul>
        </div>

        <div class="space">
            <h2 class="centrado">Descripcion General</h2>
            <p>
               Huacachina significa 'mujer que llora' en quechua. Cuenta la leyenda que esta laguna nace de las lágrimas de una hermosa mujer de ojos verdes, que lloraba la muerte de su amado.
               <br><br>Pero la laguna está llena de vida: desde sus palmeras y huarangos, hasta las aves que descansan en sus aguas, sus peces y las discretas criaturas de las dunas que la rodean. Una biodiversidad riquísima y ahora protegida, al declararse la Huacachina y el desierto subtropical a su alrededor como Área de Conservación Regional.
            </p>
                <ul>
                    <li>Nadar en el hermoso oasis.</li>
                    <li>Caminar por el hermoso recorrido de las dunas.</li>
                    <li>Conducir libremente por las dunas.</li>
                    <li>Comer en restaurantes con una vista hermosa.</li>
                    <li>Tomarse fotos.</li>
                </ul>
        </div>
        <div>
            <h2 class="centrado">Itinerario</h2>
            <div class="space">
                <h2>Dia 1 - Dar un paseo alrededor del Oasis de Huacachina</h2>
                <p>
                   Comenzará hospedándose en un hotel modesto de la zona para luego recorrer la laguna en un bote a pedales o realiza recorrido a pie por el malecón.  Además, podrás disfrutar de la deliciosa comida o saborear el buen vino en los diferentes bares y restaurantes que rodean la zona.
                </p>
            </div>
            <div class="space">
                <h2>Dia 2 - Visitar las bodegas de pisco y mirar el atardecer sobre las dunas</h2>
                <p>
                   Una de las actividades que no puedes dejar de hacer si estás en Huacachina es visitar los famosos viñedos de la zona. Podrás ver cómo se elabora la preparación de los vinos y sobre todo del pisco, licor de bandera de nuestro país. Luego, se le servirá dichos productos elaborados. Finalmente, contemplara el atardecer en las dunas de Huacachina, llegando al lugar luego de una caminata hasta el lugar donde se aprecia la caída de sol. Desde allí podrás contemplar este mágico momento en el que los últimos rayos solares tocan las dunas y lograras capturar una toma inolvidable.
                </p>
            </div>
            <div class="space">
                <h2>Dia 3 – Sandboarding</h2>
                <p>
                   Tendrá la oportunidad de disfrutar emociones únicas y extremas mediante el sandboarding sobre las dunas del desierto de Huacachina. Definitivamente el desierto de Huacachina es uno de los mejores, por no decir el mejor lugar para deslizarte sobre sus dunas de diferentes tamaños. Si eres principiante puedes iniciar deslizándote desde una duna de pico menor y luego probar con dunas un poco más empinadas. ¡No te arrepentirás de hacerlo!
                </p>
            </div>
            <div class="space">
                <h2>Dia 4 - Paseo por el desierto en buggys</h2>
                <p>
                   Los conductores de estos carros areneros son reconocidos por su destreza al manejar entre las dunas. Por eso no debes perderte recorrer el desierto en uno de estos buggys. Recorrerás el desierto a toda velocidad en uno de estos carros areneros no solo te hará sentir una descarga increible de adrenalina, sino que también te permitirá ver el paisaje desde otra perspectiva. Este es el momento ideal para sacar al aventurero/a que llevas dentro. De esta forma concluirá su última estadía por Huacachina ¡Fin de nuestro servicio!
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
                                <p>S/.</p><p id="preciofinal" value="">1730</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section class="centrado">
            <h2>¿TE GUSTO EL TOUR?</h2>
            <div class="enlace">
            	<a href="Reservar.php">Reserva ahora mismo</a>
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