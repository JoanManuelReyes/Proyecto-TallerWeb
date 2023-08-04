<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-formulario.css">
    <title>Libro de Reclamaciones</title>
    <script type="text/javascript" src="../js/validacionDatosReclamo.js"></script>
</head>
<body> 
  <?php 
  include '../header/header2.php';
  ?>


    <main class="tipotabla-reclamos">
      <?php
        require '../controlador/conexion.php';
        $conn=conectar();
        $codigo=buscarCodigoDisponibleReclamo($conn);
      ?>
    <div class="centrado">
      
      <h1>Formulario de reclamos</h1>
        <h3>Ingrese los datos requeridos y una descripción para poder tomar en cuenta su obserbación</h3>
    </div>
        <form action="../procesamiento_administrador/proceso_crearReclamo.php" method="post" onsubmit=" return validarInputs()">
          <input type="hidden" name="codigo" id="codigo" value="<?=$codigo[0]?>"><br>

          <div class="tamañoletraIngreso">
          <label for="">Numero de boleto:</label><br>
            <input class="datosIngresado tamañoletraIngreso" type="text" id="boleto" name="boleto" placeholder="Escribe el N° de boleto o codigo de reserva"><br><br>
          

          <label for="">Fecha de vuelo:</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="date" id="fecha" name="fecha" placeholder="(Año-Mes-Día)"><br><br>
          <label for="">Nombres(s):</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="text" id="nombre" name="nombre" placeholder="Escribe tus nombres"><br><br>

          <label for="">Apellidos(s):</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="text" id="apellido" name="apellido" placeholder="Escribe tus apellidos"><br><br>

          <label for="">DNI:</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="text" id="DNI" name="DNI" placeholder="Escribe tus DNI"><br><br>

          <label for="">Telefono:</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="text" id="telefono" name="telefono" placeholder="Escribe tu número teléfonico"><br><br>

          <label for="">E-mail:</E-mail></label><br>
          <input class="datosIngresado tamañoletraIngreso" type="email" id="email" name="email" placeholder="Escribe tu email"><br><br>

          <label for="">Direccion:</label><br>
          <input class="datosIngresado tamañoletraIngreso" type="text" id="direccion" name="direccion" placeholder="Escribe tu dirección"><br><br>

          <label for="">Descripcion del mensaje:</label>
          <textarea class="datosIngresado tamañoletraIngreso" type="text" id="descripcion" name="descripcion" placeholder="Describe aqui tu reclamo..."></textarea><br>
          <div class="centrado">
          <input class="tamañoletraIngreso btnEnviar" type="submit" name="accion" value="Enviar"><br><br>
          </div>
          </div>
        </form>

        <script>
        function validarInputs(){
              let boleto=document.getElementById('boleto').value;
              let fecha=document.getElementById('fecha').value;
              let nombre=document.getElementById('nombre').value;
              let apellido=document.getElementById('apellido').value;
              let dni=document.getElementById('DNI').value;
              let telefono=document.getElementById('telefono').value;
              let email=document.getElementById('email').value;
              let direccion=document.getElementById('direccion').value;
              let des=document.getElementById('descripcion').value;


              if(isNaN(boleto)||boleto===""){
              alert("Complete bien el número de boleto");
              return false;
              }else if(fecha===""){
                  alert("Ingrese la fecha del vuelo");
                  return false;
              }else if(nombre===""){
                  alert("Ingrese su nombre");
                  return false;
              }else if(apellido===""){
                  alert("Ingrese su apellido");
                  return false;
              }else if(isNaN(dni)||dni===""){
                  alert("Ingrese correctamente su DNI");
                  return false;
              }else if(isNaN(telefono)||telefono===""){
                  alert("Ingrese coreectamente su número teléfonico");
                  return false;
              }else if(email===""){
                alert("Ingrese su email");
                return false;
              }else if(direccion==="")  {
                alert("Ingrese su dirección");
                return false;
              }else if(des===""){
                alert("Ingrese su descripción");
                return false;
              } 
          }
        </script>

  </main>
  
  <?php 
  include '../footer/footer2.php';
  ?>
</body>
</html>