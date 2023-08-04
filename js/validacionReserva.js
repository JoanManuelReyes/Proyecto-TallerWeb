let reserva=function(){
    let nombre=document.getElementById("nomnbre").value;
    let apellido=document.getElementById("apellido").value;
    let dni=document.getElementById("dni").value;
    let numTarjeta=document.getElementById("tarjeta").value;
    let cvc=document.getElementById("cvc").value;
    

    if(nombre===""|| apellido==="" || dni==="" || numTarjeta==="" 
	|| cvc==="" ){
         alert("todos los campos son obligatorios")
		 return false;

}else if(isNaN(dni)){
        alert("El número de DNI debe ser un valor numerico");
}else if(isNaN(numTarjeta)){
        alert("El número de tarjeta debe ser un valor numerico");
}else if(isNaN(cvc)){
        alert("El CVC debe ser un valor numerico");
}
else {
	alert("SU RESERVA AH SIDO ENVIADA CORRECTAMENTE")
}
}