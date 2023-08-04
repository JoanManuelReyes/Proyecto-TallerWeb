<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root","","bdproyecto"); 
    return $conn; 
}

//metodos para loguearse
function validarLogueo($correo,$contra,$conn){
    $sql="select * from login where email='$correo' and contrasenia='$contra'";
    $res= mysqli_query($conn, $sql);
    $filas = mysqli_num_rows($res);
    return $filas; 
}

function obtenertipoLogueo($correo,$contra,$conn){
    $sql="select * from login where email='$correo' and contrasenia='$contra'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}


//metodos para CRUD Reclamos
function agregarReclamo($cod,$nrobol,$fecha,$nombre,$apellido,$dni,$telefono,$email,$dir,$des,$conn){
    $sql="insert into Reclamo values('$cod','$nrobol','$fecha','$nombre','$apellido','$dni','$telefono','$email','$dir','$des')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarReclamo($cod,$conn){
    $sql="delete from Reclamo where Codigo_Reclamo='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarReclamo($cod,$nrobol,$fecha,$nombre,$apellido,$dni,$telefono,$email,$dir,$des,$conn){
    $sql="update Reclamo set Nro_boleto='$nrobol',Fecha_vuelo='$fecha',Nombre_cliente='$nombre',Apellido_cliente='$apellido',DNI='$dni',Telefono_cliente='$telefono',Email_cliente='$email',Direccion_cliente='$dir', Descripcion_reclamo='$des' where Codigo_Reclamo='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function buscarReclamo($cod,$conn){
    $sql="select Nro_boleto,Fecha_vuelo,Nombre_cliente,Apellido_cliente,DNI,Telefono_cliente,Email_cliente,Direccion_cliente,Descripcion_reclamo from Reclamo where Codigo_Reclamo='$cod'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

function buscarCodigoDisponibleReclamo($conn){
    $sql="select ifnull(max(Codigo_Reclamo),0)+1 from Reclamo";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

function listarReclamo($conn){
    $sql="select * from Reclamo"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarBoleto($conn){
    $sql="select * from Reservar"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}
function listarCliente($conn){
    $sql="select * from Cliente"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}



//metodos para CRUD contactarse
function agregarContacto($id,$nombre,$email,$tel,$dni,$snt,$mns,$conn){
    $sql="insert into Contactarse values('$id','$nombre','$email','$tel','$dni','$snt','$mns')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarContacto($id,$conn){
    $sql="delete from contactarse where ID_contactarse='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarContacto($id,$nombre,$email,$tel,$dni,$snt,$mns,$conn){
    $sql="update contactarse set Nombre='$nombre',Email='$email',Telefono='$tel',DNI='$dni', Asunto_contactarse='$snt', Descripcion_contactarse='$mns' where ID_contactarse='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
function buscarContacto($id,$conn){
    $sql="select Nombre,Email,Telefono,DNI, Asunto_contactarse, Descripcion_contactarse from contactarse where ID_contactarse='$id'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function listarContacto($conn){
    $sql="select * from contactarse"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function buscarCodigoDisponibleContactarse($conn){
    $sql="select ifnull(max(ID_contactarse),0)+1 from Contactarse";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}




//metodos para el CRUD de guias
function agregarGuia($id,$nom,$rt,$des,$reg,$conn){
    $sql="insert into Guia values('$id','$nom','$rt','$des','$reg')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarGuia($id,$conn){
    $sql="delete from Guia where ID_guia='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTodoGuia($id,$nom,$rt,$des,$reg,$conn){
    $sql="update Guia set Nombre_guia='$nom', Foto_guia='$rt', Descripcion_guia='$des', Region='$reg' where ID_guia='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarGuia($id,$nom,$des,$reg,$conn){
    $sql="update Guia set Nombre_guia='$nom', Descripcion_guia='$des', Region='$reg' where ID_guia='$id'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}


function buscarGuia($id,$conn){
    $sql="select Nombre_guia, Foto_guia, Descripcion_guia, Region from Guia where ID_guia='$id'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function listarGuia($conn){
    $sql="select * from Guia"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function buscarCodigoDisponibleGuia($conn){
    $sql="select concat('G',Lpad(ifnull(RIGHT(MAX(ID_guia),7),0)+1,7,'0')) from Guia";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

function listarRegiones($conn){
    $sql="select DISTINCT(Region) from Guia";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}



//metodos para el CRUD de registrar
function conectarboleto($conn) {
    $sql="select ifnull(max(Nro_Boleto_reservar),0)+1 from Reservar";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec;

}

function agregarBoleto($bol,$dni,$paq,$tar,$nrotar,$cvc,$fech,$conn){
    $sql="insert into Reservar values('$bol','$dni','$paq','$tar','$nrotar','$cvc','$fech')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarBoleto($bol,$conn){
    $sql="delete from reservar where Nro_Boleto_reservar='$bol'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTodoBoleto($bol,$dni,$paq,$tar,$nrotar,$cvc,$fech,$conn){
    $sql="update reservar set Cliente_DNI_cliente='$dni', Paquete_Tour_Codigo_tour='$paq', Metodo_pago_reservar='$tar', Numero_tarjeta_reservar='$nrotar', CVC_reservar='$cvc', Fecha_reservar ='$fech' where Nro_Boleto_reservar='$bol'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function buscarBoleto($bol,$conn){
    $sql="select Cliente_DNI_cliente, Paquete_Tour_Codigo_tour, Metodo_pago_reservar, Numero_tarjeta_reservar, CVC_reservar, Fecha_reservar from reservar where Nro_Boleto_reservar='$bol'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}

function listarTarjeta($conn){
    $sql="select DISTINCT(Metodo_pago_reservar) from reservar";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function listarPaquetesTour($conn){
    $sql="select Codigo_tour, Nombre_tour from Paquete_Tour";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}



//metodos para el CRUD de paquetes de tours
function agregarTour($id,$nom,$reg,$des,$ft,$cands,$pr,$guia,$conn){
    $sql="insert into Paquete_Tour values('$id','$nom','$reg','$des','$ft','$cands','$pr','$guia')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarTour($id,$conn){
    $sql="delete from Paquete_Tour where Codigo_tour='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTodoTour($id,$nom,$reg,$des,$ft,$cands,$pr,$guia,$conn){
    $sql="update Paquete_Tour set Nombre_tour='$nom', Region_tour='$reg', Descripcion_tour='$des', Foto_tour='$ft', Cantidad_dias_tour='$cands', Precio_tour='$pr', Guia_ID_guia='$guia' where Codigo_tour='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTour($id,$nom,$reg,$des,$cands,$pr,$guia,$conn){
    $sql="update Paquete_Tour set Nombre_tour='$nom', Region_tour='$reg', Descripcion_tour='$des', Cantidad_dias_tour='$cands', Precio_tour='$pr', Guia_ID_guia='$guia' where Codigo_tour='$id'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}


function buscarTour($id,$conn){
    $sql="select Nombre_tour, Region_tour, Descripcion_tour, Cantidad_dias_tour, Precio_tour, Guia_ID_guia from Paquete_Tour where Codigo_tour='$id'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function listarTour($conn){
    $sql="select * from Paquete_Tour"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function buscarCodigoDisponibleTour($conn){
    $sql="select concat('T',Lpad(ifnull(RIGHT(MAX(Codigo_tour),5),0)+1,5,'0')) from Paquete_Tour";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}




//metodos para CRUD login
function agregarUsuario($id,$email,$contra,$conn){
    $sql="insert into Login values('$id','$email','$contra','Cliente')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarUsuario($id,$conn){
    $sql="delete from Login where id_login='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarUsuario($id,$email,$contra,$conn){
    $sql="update Login set email='$email',contrasenia='$contra' where id_login='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
function buscarUsuario($id,$conn){
    $sql="select email,contrasenia from Login where id_login='$id'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}
function listarUsuario($conn){
    $sql="select * from Login"; 
    $res= mysqli_query($conn, $sql);
    $vec=array();
    while($f= mysqli_fetch_array($res))  
        $vec[]=$f;
    return $vec;
}

function buscarCodigoDisponibleUsuario($conn){
    $sql="select ifnull(max(id_login),0)+1 from Login";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}



//Crear Cuenta
function crearCuenta($nombre,$apellido,$dni,$telefono,$email,$direccion,$contra,$conn){
    $sql="call spcrearcuenta('$nombre','$apellido','$dni','$telefono','$email','$direccion','$contra')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function buscarCliente($email,$conn){
    $sql="select Nombre_cliente, Apellido_cliente from cliente where email_cliente='$email'";
    $res= mysqli_query($conn, $sql);
    $vec=array();
    if(mysqli_num_rows($res)>0){
        $vec= mysqli_fetch_array($res);
    }
    return $vec; 
}


?>
