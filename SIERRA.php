<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="css/estilo-sierra.css">
    <title>Tours de la sierra</title>
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
        <div class="imagen-slider">
            <ul>
                <li><img src="imagenes_sierra/MachuPicchu.jpg" alt=""></li>
                <li><img src="imagenes_sierra/Apurimac.jpg" alt=""></li>
                <li><img src="imagenes_sierra/Puno.jpg" alt=""></li>
            </ul>
        </div>


        <h2 class="titulo centrado">Disfruta de la biodiversidad, historia y cultura de la region sierra</h2>

        <div class="space">
            <p>
                Machu Picchu, Choquequirao, Uros, Amantani, Isla Taquile y Sillustani son algunos
                de los destinos turisticos que podrá encontrar en la region andina de nuestro Perú.
            </p><br>
            <p>Para aquellos que busquen un lugar de aventura con espacios abiertos para pasear y disfrutar de los
                paisajes antiguos que albergaron las civilizaciones ya perdidas en el tiempo. Ademas, de su variada y
                exotica biodiversidad en algunas zonas turisticas.
            </p><br>
            <p>
                Nuestras ofertas y tarifas están diseñadas para todos los presupuestos. Las tarifas están expresadas de
                dólares norteamericanos, incluyen todos los impuestos aplicables y son válidas para turistas extranjeros
                y peruanos.
            </p>
        </div>


        <section class="tours">
        <h2><b>Descubre los tours que tenemos para ti</b></h2>
            <div class="tours__card">
                <h2><b>Inca Jungle a Machu Picchu</b></h2>
                <div class="card">
                    <img src="imagenes_sierra/MachuPicchu.jpg" width="25%" alt="">
                <p>Comenzará tomando una furgoneta durante 3,5 horas hasta Abra Málaga, que se encuentra a 4350 metros sobre el nivel del mar...
                </p>    
                    <ul>
                        <li>4 Dias/3noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.990</h3>
                        <a href="Cusco.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>

            <div class="tours__card">
                <h2><b>Trekking Choquequirao</b></h2>
                <div class="card">
                    <img src="imagenes_sierra/Apurimac.jpg" width="25%" height="70%" alt="">
                <p>
                    Nos levantaremos muy temprano para tomar desayuno y obtener energía para la caminata del día. Nuestra primera visita será...
                </p>    
                    <ul>
                        <li>4 Dias/3noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.1542</h3> 
                        <a href="Apurimac.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>    


            <div class="tours__card">
                <h2><b>Viaje a Puno</b></h2>
                <div class="card">
                    <img src="imagenes_sierra/Puno.jpg" width="25%" height="70%" alt="">
                <p>
                    En este tour a las islas Amantani, Uros y Taquile, los pasajeros son recogidos de los hoteles
                    del centro hasta el puerto para luego...
                </p>      
                    <ul>
                        
                        <li>2 Dias/1noche - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.570</h3>
                        <a href="Puno.php">Ver Detalle</a>
                        
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