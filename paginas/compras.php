<?php
session_start(['carrito']);

$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['btnAccion']){
        case 'Agregar':
            if(($_POST['id'])){
                $ID=$_POST['id'];
                $mensaje.="id correcto".$ID;
            }else{
                $mensaje.="id incorrecto";
            }
            if(($_POST['nombre'])){
                $NOM=$_POST['nombre'];
                $mensaje.="nombre correcto".$NOM;
            }else{
                $mensaje.="nombre incorrecto";
                }
             if(($_POST['dias'])){
                $D=$_POST['dias'];
                $mensaje.="dias correcto".$D;
            }else{
                $mensaje.="dias incorrecto";
                }
            if(($_POST['precio'])){
                $PREC=$_POST['precio'];
                $mensaje.="precio correcto".$PREC;
            }else{
                $mensaje.="precio incorrecto";
                }
            if(($_POST['imagen'])){
                $IMG=$_POST['imagen'];
                $mensaje.="imagen correcto".$IMG;
            }else{
                $mensaje.="imagen incorrecto";
                 }
            if(($_POST['region'])){
                $REG=$_POST['region'];
                $mensaje.="region correcto".$REG;
            }else{
                $mensaje.="region incorrecto";
                     }

            if(($_POST['cantidad'])){
                $CANT=$_POST['cantidad'];
                $mensaje.="cantidad correcto".$CANT;
            }else{
                    $mensaje.="cantidad incorrecto";
                }

                if(!isset($_SESSION['carrito'])){
                    
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOM,
                        'DIAS'=>$D,
                        'PRECIO'=>$PREC,
                        'IMAGEN'=>$IMG,
                        'REGION'=>$REG,
                        'CANTIDAD'=>$CANT,
                    );
                    $_SESSION['carrito'][0]=$producto;

                }else{
                    $numProductos=count($_SESSION['carrito']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOM,
                        'DIAS'=>$D,
                        'PRECIO'=>$PREC,
                        'IMAGEN'=>$IMG,
                        'REGION'=>$REG,
                        'CANTIDAD'=>$CANT,
                    );
                    $_SESSION['carrito'][$numProductos]=$producto;

                }

                $mensaje=print_r($_SESSION,true);

        break;
        case 'Eliminar':
            if(($_POST['id'])){
                $ID=$_POST['id'];
                foreach($_SESSION['carrito'] as $indice=>$producto){
                    if($producto['ID']===$ID){
                    unset($_SESSION['carrito'][$indice]);
                    echo "<script> alert ('Tour eliminado');</script>";
                }
                }
            }else{
                $mensaje.="id incorrecto";
            }
            

        break;    
    }

}

?>