<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/estilo-ejerciciosPHP.css">
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
        <form class="form">
        <?php
        if($_REQUEST['nombre']&&$_REQUEST['direccion']&&$_REQUEST['tiposP']
        &&$_REQUEST['productos']&&$_REQUEST['cantidad']&&$_REQUEST['precio'] ){

            $nombre=$_REQUEST['nombre'];
            $direccion=$_REQUEST['direccion'];
            $cant=$_REQUEST['cantidad'];
            $prec=$_REQUEST['precio'];
            $total=($prec*$cant);

            echo"Su nombre es ".$nombre."<br/>";
            echo"Su direccion es ".$direccion."<br/>";
            echo"El tipo de producto es <br/>";
            foreach($_REQUEST['tiposP'] as $tiposP ){
            echo $tiposP."<br/>";}
            echo"Su producto es <br/>";
            foreach($_REQUEST['productos'] as $productos){
            echo $productos."<br/>";}
            echo"el precio unitario es ".$prec."<br/>";
            echo"la cantidad que selecciono es ".$cant." unidades"."<br/>";


            switch($tiposP){
                case "Abarrote":
                    if( $cant>=1 && $cant<=6){
                        $descuento=($prec*$cant)*0.05;
                        echo"el total es ".$total." soles (S/)"."<br/>";
                        echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                        
                    }if($cant>6){
                        $descuento=($prec*$cant)*0.08;
                        echo"el total es ".$total." soles (S/)"."<br/>";
                        echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                        

                    }
                        break;

                case "Limpieza":
                    if( $cant>=1 && $cant<=6){
                            $descuento=($prec*$cant)*0.07;
                            echo"el total es ".$total." soles (S/)"."<br/>";
                            echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                    }if($cant>6){
                            $descuento=($prec*$cant)*0.10;
                            echo"el total es ".$total." soles (S/)"."<br/>";
                            echo"el descuento es ".$descuento."<br/>";
                            $precioFi=($total-$descuento);
                            echo"el precio final es ".$precioFi;
                    }
                        break;

                case 'Juguetes':
                    if( $cant>=1 && $cant<=6){
                                $descuento=($prec*$cant)*0.10;
                                echo"el total es ".$total." soles (S/)"."<br/>";
                                echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                    }if($cant>6){
                                $descuento=($prec*$cant)*0.13;
                                echo"el total es ".$total." soles (S/)"."<br/>";
                                echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                    }
                        break;

                case 'Ropa':
                    if( $cant>=1 && $cant<=6){
                                    $descuento=($prec*$cant)*0.12;
                                    echo"el total es ".$total." soles (S/)"."<br/>";
                                    echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                    }if($cant>6){
                                    $descuento=($prec*$cant)*0.15;
                                    echo"el total es ".$total." soles (S/)"."<br/>";
                                    echo"el descuento es ".$descuento."<br/>";
                        $precioFi=($total-$descuento);
                        echo"el precio final es ".$precioFi;
                    }
                        break;
            }
           
        }else 
        echo"No se ah hecho ninguna compra";

        ?>
        </form>
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