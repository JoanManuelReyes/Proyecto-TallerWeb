<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-selva.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/estilo-Rselva.css">
    <title>Tours de la Amazonia</title>
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
        <hr/>
        <h1 id="titulo-P"><b>Tours en la selva de nuestro pais</b></h1>
        
                <div class="slider">
                    <div class="slider__intro">
                        
                        <br>
                        <div class="recorrido-selva">
                            <ul>
                                <li><img src="imagenes_selva/img1.jpg"  alt=""></li>
                                <li><img src="imagenes_selva/img2.jpg"  alt=""></li>
                                <li><img src="imagenes_selva/img3.jpg"  alt=""></li>
                            </ul>
                        </div>
                       
                        <h2>Disfruta de la flora y fauna que te ofrece nuestra amazonia</h2> 
                        
                           <p>
                            Tambopata,Tarapoto, Chanchamayo,Oxapampa y Pozuzo son sólo algunos
                            de los destinos que podrá encontrar en la amazonia de nuestro Perú.
                            Para aquellos que busquen un momento de paz y tranquilidad, y estar 
                            rodeados de naturaleza virgen, nuestra amazonia es un destino ideal. 
                            Nuestras ofertas y tarifas están diseñadas para todos los presupuestos. Las tarifas están expresadas de 
                            soles Peruanos, incluyen todos los impuestos aplicables y son válidas para turistas extranjeros y peruanos.
                           </p> 
                           
                    </div>
                </div>

                

       <section class="tours">
        <h2><b>Descubre los tours que tenemos para ti</b></h2>
            <div class="tours__card">
                <h2><b>Tambopata Jungle Adventure Tour 4 Dias</b></h2>
                <div class="card">
                    <img src="imagenes_selva/tambopata1.jpg" width="25%" alt="">
                <p>
                    Aventúrese en las profundidades de la selva amazónica y explore el diverso Parque Nacional 
            Tambopata en una excursión de 4 días desde Puerto Maldonado. Descubra la rica biodiversidad de la selva 
            mientras recorre los paseos nocturnos de los caimanes, visite la Isla de los Monos, navegue
             por el lago Sandoval y emprenda algunas excursiones por la selva. Esta es una gran oportunidad
              para desconectar y sumergirse en la hermosa naturaleza del Perú durante su viaje  
                </p>    
                    <ul>
                        <li>4 Dias/3noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.870</h3>
                        <a href="Tambopata.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>

                
            <div class="tours__card">
                <h2><b>Tarapoto Aventurero</b></h2>
                <div class="card">
                    <img src="imagenes_selva/tarapoto1.jpg" width="25%" height="70%" alt="">
                <p>
                    Maravillate con los impresionantes atractivos que guarda la hermosa cuidad 
                    de Tarapoto.Descubre la naturaleza,floray fauna que tembargaran y descubre las maravillas naturales, culturales y gastronómicas de Tarapoto y disfruta de impresionantes
                    escenarios y las mejores actividades con Aventuras en 4 días de recorrido.
                </p>      
                    <ul>
                        
                        <li>4 Dias/3noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.940</h3>
                        <a href="Tarapoto.php">Ver Detalle</a>
                        
                    </ul>
                </div>
            </div>

            <div class="tours__card">
                <h2><b>Chanchamayo y Tarma Magicos</b></h2>
                <div class="card">
                    <img src="imagenes_selva/chanchamayo1.jpg" width="25%" height="70%" alt="">
                <p>
                    Luego de tomar el desvío a Tarma, podrá llegaren 6 horas, desde Lima, a estos valles
                     ubicados en zonas de selva alta con exuberante vegetación y rodeado de bosques de rica y variada fauna y vegetación 
                </p>    
                    <ul>
                        <li>3 Dias/2noches - 2 Personas</li>
                        <li>Visitas Guiadas</li>
                        <h3>desde S/.740</h3> 
                        <a href="Chanchamayo.php">Ver Detalle</a>
                    </ul>
                </div>
            </div>    
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