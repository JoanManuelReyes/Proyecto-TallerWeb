<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilo-formulario.css">
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


    <main class="tipotabla-registro">
      <h1>Formulario de registro</h1>
        <h3>Crearemos tu cuenta despues de que ingreses la información requerida en cada campo.</h3>
          <form action="submeter-formulario.php" method="post">       
                <p>
                  <label for="nombre">Nombres:&nbsp;&nbsp;&nbsp;</label>
                    <input type="text"  required="obligatorio" placeholder="Escribe tu nombre">
                </p>

                <p>
                  <label for="apellido">Apellidos:&nbsp;&nbsp;</label>
                    <input type="text"  required="obligatorio" placeholder="Escribe tu apellido">
                </p>
                
                <p>
                  <label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="email"  required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="telefone">Teléfono:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="tel"  placeholder="Escribe tu teléfono">
                </p>                   
              
                <button type="submit"  id="rRegistrarse"><p>Registrarse</p></button>
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