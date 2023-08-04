<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo-formulario.css">
    <title>Libro de Reclamaciones</title>
    <script type="text/javascript" src="js/validacionDatosReclamo.js"></script>
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


    <main class="tipotabla-reclamos">
    <div class="centrado">
      
      <h1>Formulario de reclamos</h1>
        <h3>Ingrese los datos requeridos y una descripción para poder tomar en cuenta su obserbación</h3>
    </div>
        <form action="" id="form" onsubmit="validacion()">
          <label for="">Numero de boleto:</label><br>
            <input class="datosIngresado" type="text" id="boleto" placeholder="Escribe el N° de boleto o codigo de reserva"><br><br>
          </div>
          <label for="">Fecha de vuelo:</label><br>
          <input class="datosIngresado" type="text" id="vuelo" placeholder="Escribe Fecha de vuelo (dd/mm/aa)"><br><br>
          <label for="">Nombres(s):</label><br>
          <input class="datosIngresado" type="text" id="nombre" placeholder="Escribe tus nombres"><br><br>
          <label for="">Apellidos(s):</label><br>
          <input class="datosIngresado" type="text" id="apellido" placeholder="Escribe tus apellidos"><br><br>
          <label for="">DNI:</label><br>
          <input class="datosIngresado" type="text" id="dni" placeholder="Escribe tus DNI"><br><br>
          <label for="">Telefono:</label><br>
          <input class="datosIngresado" type="text" id="telf" placeholder="Escribe tu número teléfonico"><br><br>
          <label for="">E-mail:</E-mail></label><br>
          <input class="datosIngresado" type="text" id="email" placeholder="Escribe tu email"><br><br>
          <label for="">Direccion:</label><br>
          <input class="datosIngresado" type="text" id="direccion" placeholder="Escribe tu dirección"><br><br>
          <label for="">Descripcion del mensaje:</label>
          <textarea name="introducir_mensaje" id="descripcion" placeholder="Describe aqui tu reclamo..."></textarea><br>
          <div class="centrado">
          <input class="btnEnviar" type="submit" value="Enviar"><br><br>
          </div>
        </form>
      
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