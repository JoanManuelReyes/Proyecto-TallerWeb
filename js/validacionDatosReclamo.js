let validacion =function(){
	 //boleto,vuelo,nombre,apellido,dni,telefono,email,direccion,descripción;
	let boleto=document.getElementById("boleto").value;
	let vuelo=document.getElementById("vuelo").value;
	let nombre=document.getElementById("nombre").value;
	let apellido=document.getElementById("apellido").value;
	let dni=document.getElementById("dni").value;
	let telefono=document.getElementById("telf").value;
	let email=document.getElementById("email").value;
	let direccion=document.getElementById("direccion").value;
	let descripción=document.getElementById("descripcion").value;
	
	
	

	if(boleto===""|| vuelo==="" || nombre==="" || apellido==="" 
	|| dni==="" || telefono==="" || email==="" || direccion==="" 
	|| descripción===""){
         alert("todos los campos son obligatorios")
		 return false;

}else if(isNaN(dni)){
		alert("El número de DNI debe ser un valor numerico");
}else if(isNaN(telefono)){
		alert("El número telefónico debe ser un valor numerico");
}
else {
	alert("su reclamo fue enviado con exito")
}
}