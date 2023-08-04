<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/estilo-ejerciciosPHP.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
