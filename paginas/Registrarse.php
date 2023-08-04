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


    <main class="tipotabla-registro">
      <h1>Formulario de registro</h1>
        <h3>Crearemos tu cuenta despues de que ingreses la información requerida en cada campo.</h3>
         <form action="../procesamiento_administrador/proceso_registrarse.php" method="post" onsubmit=" return validarInputs()">
                <p>
                  <label>Nombres:&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre">
                </p>

                <p>
                  <label>Apellidos:&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="text" name="apellido" id="apellido" placeholder="Escribe tu apellido">
                </p>

                <p>
                  <label>DNI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="text" name="DNI" id="DNI" placeholder="Escribe tu DNI">
                </p>
                
                <p>
                  <label>Teléfono:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="text" name="telefono" id="telefono" placeholder="Escribe tu teléfono">
                </p>

                <p>
                  <label>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="email" name="email" id="email" placeholder="Escribe tu Email">
                </p>

                <p>
                  <label>Dirección:&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" type="text" name="direccion" id="direccion" placeholder="Escribe tu dirección">
                </p>

                <p>
                  <label>Contraseña:&nbsp;</label>
                    <input class="tamañoletraIngreso" type="password" name="contrasenia" id="contrasenia" placeholder="Escribe tu contraseña">
                </p>
              <div class="diseñoEnviar centrado">
              <input class="tamañoletraIngreso" type="submit" name="accion" value="Agregar">
              </div>
            </form>

            <script>
            function validarInputs(){
                  let nombre=document.getElementById('nombre').value;
                  let apellido=document.getElementById('apellido').value;
                  let dni=document.getElementById('DNI').value;
                  let telefono=document.getElementById('telefono').value;
                  let email=document.getElementById('email').value;
                  let direccion=document.getElementById('direccion').value;
                  let constrasenia=document.getElementById('contrasenia').value;


                  if(nombre===""){
                      alert("Ingrese su nombre");
                      return false;
                  }else if(apellido===""){
                      alert("Ingrese su apellido");
                      return false;
                  }else if(isNaN(dni)||dni===""){
                      alert("Ingrese su DNI");
                      return false;
                  }else if(isNaN(telefono)||telefono===""){
                      alert("Ingrese su teléfono");
                      return false;
                  }else if(email===""){
                      alert("Ingrese su email");
                      return false;
                  }else if(direccion===""){
                      alert("Ingrese su dirección");
                      return false;
                  }else if(contrasenia===""){
                      alert("Ingrese su contraseña");
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