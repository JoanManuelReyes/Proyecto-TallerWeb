function botonPersonas(detector){
	let valorInicio=parseInt(document.getElementById("acumulado1").textContent);
	let precioInicio=parseFloat(document.getElementById("preciofinal").textContent);
	let personasInicio=parseInt(document.getElementById("personasIniciales").textContent);
	let limite = document.getElementById("verificador1");

	if(detector.value == 'aumentar'){
		valorInicio++;
		document.getElementById("preciofinal").textContent=precioInicio+50;
	}else{
		valorInicio--;
		document.getElementById("preciofinal").textContent=precioInicio-50;
	}
	document.getElementById("acumulado1").textContent=valorInicio;

	if(valorInicio==personasInicio){
		limite.disabled=true;
	}else{
		limite.disabled=false;
	}
}

function botonDias(detector){
	let valorInicio=parseInt(document.getElementById("acumulado2").textContent);
	let precioInicio=parseFloat(document.getElementById("preciofinal").textContent);
	let diasInicio=parseInt(document.getElementById("diasIniciales").textContent);
	let limite = document.getElementById("verificador2");
	
	if(detector.value == 'aumentar'){
		valorInicio++;
		document.getElementById("preciofinal").textContent=precioInicio+100;
	}else{
		valorInicio--;
		document.getElementById("preciofinal").textContent=precioInicio-100;
	}
	document.getElementById("acumulado2").textContent=valorInicio;

	if(valorInicio==diasInicio){
		limite.disabled=true;
	}else{
		limite.disabled=false;
	}
}