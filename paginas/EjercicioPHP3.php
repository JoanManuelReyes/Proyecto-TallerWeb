<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilo-ejerciciosPHP.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
</head>
<body>

    <?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<div class="bodyauxiliar">
    <main>
        <form class="form" id="form" action="salidaEjercicioPHP3.php" method="post" onsubmit=" return validarInputs()" >
            <h2>REGISTRO DE COMPRA</h2>
            <p>NOMBRE</p>
            <input type="text" name="nombre" id="nombre">
            <p>DIRECCION</p>
            <input type="text" name="direccion" id="direccion">
            <p>TIPO DE PRODUCTOS</p> 
            <select name="tiposP[]" id="" >
                <option value="Abarrote">Abarrote</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Juguetes">Jueguetes</option>
                <option value="Ropa">Ropa</option>
            </select>
            <p>CANTIDAD</p>
            <input type="text" name="cantidad" id="cantidad">
            <p> PRODUCTOS</p> 
            <select name="productos[]" id="" >
                <option value="Arroz">Arroz</option>
                <option value="Azucar">Azucar</option>
                <option value="Detergente">Detergente</option>
                <option value="Legia">Legia</option>
                <option value="Muñecos de Accion">Muñecos de Accion</option>
                <option value="Carro control Remoto">Carro control Remoto</option>
                <option value="Pantalon">Pantalon</option>
                <option value="Casaca">Casaca</option>
            </select>
            <p>PRECIO</p>
            <input type="text" name="precio" id="precio"><br><br>
            <input type="submit" value="ENVIAR">
        </form>
        <script >
            const nombre=document.getElementById('nombre');
            const direccion=document.getElementById('direccion');
            const cantidad=document.getElementById('cantidad');
            const precio=document.getElementById('precio');

    function validarInputs(){
        validNombre=nombre.value.trim();
        validDireccion=direccion.value.trim();
        validCant=cantidad.value.trim();
        validPrecio=precio.value.trim();


        if(validNombre===""){
        alert("El nombre esta vacio");
        return false;
        }
        else if(validDireccion===""){
            alert("Complete su direccion porfavor")
            return false;
        }
         else if( isNaN(validCant)||validCant===""){
          alert("Solo se permite numeros o complete el campo");
          return false;
        }
         else if(isNaN(validPrecio)|| validPrecio==="")  {
          alert("Solo se permite numeros o complete el campo");
          return false;
        }else{
            alert("SE AH ENVIADO CORRECTAMENTE SU REGISTRO");
        }
        
    }
        </script>
    <div class="desplazamientoEjercicios contenido-columnas">
        <a href="EjercicioPHP2.php">Ejercicio 2</a>
        <a href="EjercicioPHP4.php">Ejercicio 4</a>
    </div>
    </main>
</div>

    <?php 
    include '../footer/footer2.php';
    ?>

</body>
</html>
