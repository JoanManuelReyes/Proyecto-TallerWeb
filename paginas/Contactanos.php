<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo-formulario.css">
    <title>Contactanos</title>
</head>
<body> 
    <?php 
    include '../header/header2.php';
    ?>


    <main class="tipotabla-contactanos">
    <div class="centrado">
    <h1>Contactanos</h1>
      
      <h1>Formulario de contacto</h1>
        <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>
    </div>
          <form action="../procesamiento_administrador/proceso_crearContactarse.php" method="post" onsubmit=" return validarInputs()">       
                <p>
                  <label for="nombre">Nombre:&nbsp;&nbsp;</label>
                  <input class="tamañoletraIngreso" name="nombre" id="nombre" type="text"  required="obligatorio" placeholder="Escribe tu nombre">
                </p>
              
                <p>
                  <label for="email">Email: &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" name="email" id="email" type="email"  required="obligatorio" placeholder="Escribe tu Email">
                </p>
            
                <p>
                  <label for="telefone">Teléfono:&nbsp;</label>
                    <input class="tamañoletraIngreso" name="telefono" id="telefono" type="number"  placeholder="Escribe tu teléfono">
                </p>   

                <p>
                  <label for="DNI">DNI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" name="DNI" id="DNI" type="number"  placeholder="Escribe tu DNI">
                </p>

                <p>
                  <label for="asunto">Asunto: &nbsp;&nbsp;&nbsp;</label>
                    <input class="tamañoletraIngreso" name="asunto" id="asunto" type="text" required="obligatorio" placeholder="Escribe un asunto">
                </p>    
                <p>
                  <label for="mensaje">Mensaje: &nbsp;</label>                     
                <textarea class="tamañoletraIngreso" name="mensaje"  id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                </p>                    
              <div class="centrado">
                <button type="submit"  id="enviar">Enviar</button>
              </div>
          </form>

          <script>
  function validarInputs(){
        let nombre=document.getElementById('nombre').value;
        let email=document.getElementById('email').value;
        let telefono=document.getElementById('telefono').value;
        let dni=document.getElementById('DNI').value;
        let asunto=document.getElementById('asunto').value;
        let mensaje=document.getElementById('mensaje').value;

        if(nombre===""){
            alert("Ingrese el nombre del cliente");
            return false;
        }else if(email===""){
            alert("Ingrese el email de cliente");
            return false;
        }else if(isNaN(telefono)||telefono===""){
            alert("Ingrese el teléfono de cliente");
            return false;
        }
        else if(isNaN(dni)||dni===""){
            alert("Ingrese un DNI del cliente");
            return false;
        }
         else if(asunto===""){
          alert("Complete el asunto");
          return false;
        }
         else if(mensaje==="")  {
          alert("Complete la descripción");
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