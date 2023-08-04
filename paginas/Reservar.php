<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/estilo-formulario.css">
  <script src="../js/validacionReserva.js"></script>
  <title></title>
</head>
<body>
    <?php 
    include '../header/header2.php';
    ?>

    <?php
    $cod=$_REQUEST['Id'];
    ?>

    <main class="tipotabla-reservar">
      <div class="centrado">
        <h1>Formulario de reserva</h1>
      </div>
        <h3>Podra reservar el anterior tour cuando complete los siguientes campos:</h3>
          <form action="../procesamiento_administrador/proceso_crearReserva.php" method="post" onsubmit=" return validarInputs()"> 
                <input type="hidden" id="paquete" name="paquete" value="<?=$cod?>"><br>

                <p>
                  <label>Nombres:&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">
                </p>

                <p>
                  <label>Apellidos:&nbsp;&nbsp;</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Escribe tu apellido">
                </p>
                
                <p>
                  <label>DNI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" id="dni" name="dni"  placeholder="Escribe tu número de DNI">
                </p>

                <p><label>Metodo de pago:</label></p>
                <select name="tarjeta">
                  <option value="Tarjeta Visa">Tarjeta Visa</option>
                  <option value="Tarjeta MasterCard">Tarjeta MasterCard</option>
                  <option value="Tarjeta de débito - BBVA Perú">Tarjeta de débito - BBVA Perú</option>
                </select> <br>

                <p>
                  <label>Número de tarjeta:&nbsp;&nbsp;</label>
                    <input type="text"  name="nrotarjeta" id="nrotarjeta" placeholder="Escribe tu número de tarjeta">
                </p>  
                <p>
                  <label>CVC:&nbsp;&nbsp;</label>
                    <input type="text" id="cvc" name="cvc"  placeholder="Escribe el CVC de tu tarjeta">
                </p>

                <p>
                  <label>Fecha de vuelo:&nbsp;&nbsp;</label>
                    <input type="date" id="fecha" name="fecha">
                </p>

              <div class="centrado">
                  <button type="submit"  id="rRegistrarse">Rerservar</button>
              </div>
          </form>

          <script>
          function validarInputs(){
                let nombre=document.getElementById('nombre').value;
                let apellido=document.getElementById('apellido').value;
                let dni=document.getElementById('dni').value;
                let nrotar=document.getElementById('nrotarjeta').value;
                let cvc=document.getElementById('cvc').value;
                let fecha=document.getElementById('fecha').value;

                if(nombre===""){
                    alert("Ingrese su nombre");
                    return false;
                }else if(apellido===""){
                    alert("Ingrese su apellido");
                    return false;
                }else if(isNaN(dni)||dni===""){
                    alert("Ingrese su DNI");
                    return false;
                }else if(isNaN(nrotar)||nrotar===""){
                    alert("Ingrese su número de tarjeta");
                    return false;
                }else if(isNaN(cvc)||cvc===""){
                    alert("Ingrese el CVC de la tarjeta");
                    return false;
                }else if(fecha==="")  {
                  alert("Ingrese la fecha");
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