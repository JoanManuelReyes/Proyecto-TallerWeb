<?php
 //variable conexion
function conectar() {
    $conn= mysqli_connect ("localhost","root","","bdproyecto"); 
    return $conn; 
}


//metodos para CRUD Reclamos
function agregarReclamo($cod,$nrobol,$dni,$des,$conn){
    $sql="insert into Reclamo values('$cod','$nrobol','$dni','$des')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarReclamo($cod,$conn){
    $sql="delete from Reclamo where Codigo_Reclamo='$cod'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarReclamo($cod,$nrobol,$dni,$des,$conn){
    $sql="update Reclamo set Reservar_Nro_Boleto_reservar='$nrobol', Cliente_DNI_cliente='$dni', Descripcion_reclamo='$des' where Codigo_Reclamo='$cod'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function buscarReclamo($cod,$conn){
    $sql="select Reservar_Nro_Boleto_reservar,Cliente_DNI_cliente,Descripcion_reclamo from Reclamo where Codigo_Reclamo='$cod'";
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
function agregarContacto($id,$dni,$snt,$mns,$conn){
    $sql="insert into contactarse values('$id','$dni','$snt','$mns')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarContacto($id,$conn){
    $sql="delete from contactarse where ID_contactarse='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarContacto($id,$dni,$snt,$mns,$conn){
    $sql="update contactarse set Cliente_DNI_cliente='$dni', Asunto_contactarse='$snt', Descripcion_contactarse='$mns' where ID_contactarse='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
function buscarContacto($id,$conn){
    $sql="select Cliente_DNI_cliente, Asunto_contactarse, Descripcion_contactarse from contactarse where ID_contactarse='$id'";
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
    $sql="insert into reservar values('$bol','$dni','$paq','$tar','$nrotar','$cvc','$fech')";
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
function agregarTour($id,$nom,$reg,$des,$ft,$canpr,$cands,$pr,$guia,$conn){
    $sql="insert into Paquete_Tour values('$id','$nom','$reg','$des','$ft','$canpr','$cands','$pr','$guia')";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function eliminarTour($id,$conn){
    $sql="delete from Paquete_Tour where Codigo_tour='$id'";    
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTodoTour($id,$nom,$reg,$des,$ft,$canpr,$cands,$pr,$guia,$conn){
    $sql="update Paquete_Tour set Nombre_tour='$nom', Region_tour='$reg', Descripcion_tour='$des', Foto_tour='$ft', Cantidad_personas_tour='$canpr', Cantidad_dias_tour='$cands', Precio_tour='$pr', Guia_ID_guia='$guia' where Codigo_tour='$id'";   
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

function actualizarTour($id,$nom,$reg,$des,$canpr,$cands,$pr,$guia,$conn){
    $sql="update Paquete_Tour set Nombre_tour='$nom', Region_tour='$reg', Descripcion_tour='$des', Cantidad_personas_tour='$canpr', Cantidad_dias_tour='$cands', Precio_tour='$pr', Guia_ID_guia='$guia' where Codigo_tour='$id'"; 
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}


function buscarTour($id,$conn){
    $sql="select Nombre_tour, Region_tour, Descripcion_tour, Cantidad_personas_tour, Cantidad_dias_tour, Precio_tour, Guia_ID_guia from Paquete_Tour where Codigo_tour='$id'";
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

?>
