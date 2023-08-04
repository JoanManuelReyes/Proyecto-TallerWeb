<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/estilo-formulario.css">
  <title></title>
</head>
<body>
    <?php 
    include '../header/header2.php';
    ?>

  <main class="centrado tipotabla-iniciar">
      <h1>Inicie Sesión</h1>
      <h3>Por favor, ingrese la información correcta en cada campo.</h3>
      <form action="../procesamiento_administrador/proceso_inicio_sesion.php" method="post">       
                <p>
                  <label for="email">Correo Electrónico</label>
                    <input class="tamañoletraIngreso" type="email" name="emailusuario" required="obligatorio" placeholder="Escribe tu correo electrónico">
                </p>    
                <p>
                  <label for="password">Contraseña</label>
                    <input class="tamañoletraIngreso" type="password" name="contrausuario" required="obligatorio" placeholder="Escribe tu contraseña">
                </p>                
              
                <button type="submit"  id="enviar" name="enviar">Enviar</button><br><br>
      </form>
            <a class="RegistrarseBoton" href="Registrarse.php">Registrarse</a>  
  </main>

  <?php 
  include '../footer/footer2.php';
  ?>

</body>
</html>