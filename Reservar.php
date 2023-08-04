<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilo-formulario.css">
  <script src="js/validacionReserva.js"></script>
  <title></title>
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


    <main class="tipotabla-reservar">
      <div class="centrado">
        <h1>Formulario de reserva</h1>
      </div>
        <h3>Podra reservar el anterior tour cuando complete los siguientes campos:</h3>
          <form action="" id="formulario" onsubmit="reserva()" method="">       
                <p>
                  <label for="nombre">Nombres:&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="nomnbre"  placeholder="Escribe tu nombre">
                    <div></div>
                </p>

                <p>
                  <label for="apellido">Apellidos:&nbsp;&nbsp;</label>
                    <input type="text" id="apellido"  placeholder="Escribe tu apellido">
                    <div></div>
                </p>
                
                <p>
                  <label for="addres">DNI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="dni"  placeholder="Escribe tu número de DNI">
                    <div></div>
                </p>

                <p><label for="email">Metodo de pago:</label></p>
                <p>
                  <input type="checkbox" name="Tarjeta Visa" value="">Tarjeta Visa&nbsp;
                  <input type="checkbox" name="Tarjeta MasterCard" value="">Tarjeta MasterCard&nbsp;
                  <input type="checkbox" name="Tarjeta de débito - BBVA Perú" value="">Tarjeta de débito - BBVA Perú
                </p>  
                <p>
                  <label for="tarjeta">Número de tarjeta:&nbsp;&nbsp;</label>
                    <input type="text"  id ="tarjeta" placeholder="Escribe tu número de tarjeta">
                    <div></div>
                </p>  
                <p>
                  <label for="cvc">CVC:&nbsp;&nbsp;</label>
                    <input type="text" id="cvc"  placeholder="Escribe el CVC de tu tarjeta">
                    <div></div>
                </p>
                <div class="centrado">
                  <button type="submit"  id="rRegistrarse">Rerservar</button>
                </div>
          </form>
          <div id="error"></div>
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