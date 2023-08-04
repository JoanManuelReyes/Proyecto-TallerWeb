<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilo-ejerciciosPHP.css">
</head>
<body>
    <?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

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

    <?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>