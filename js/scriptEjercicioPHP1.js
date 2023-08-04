function validarDatos(){
	let nomPaquete=document.getElementById("selecPaquete").value;
	let detailPaquete=document.getElementById("detallePaquete").textContent;
	let pricePaquete=parseInt(document.getElementById("precioPaquete").textContent);
	let cantMeses = document.getElementById("cantidadMeses").value;
	let nomTarjeta = document.getElementById('nombreTarjeta1').value;

	if (nomPaquete=='' || detailPaquete=='Elegir paquetes' || pricePaquete==0){
		alert("Debe seleccionar un paquete");
	}else if (isNaN(cantMeses)){
		alert("Los meses deben ser valores númericos");
	}else if (cantMeses<2){
		alert("La cantidad mínima de meses debe ser mayor a 2");
	}else if(document.getElementById('nombreTarjeta1').checked || document.getElementById('nombreTarjeta2').checked || document.getElementById('nombreTarjeta3').checked){
		document.getElementById('activar').disabled=false;
	}else{
		alert("Debe seleccionar un tarjeta");
	}
}

function mostrarDetalles(){
	let nomPaquete=document.getElementById("selecPaquete").value;
	if(nomPaquete == 'Costa verde'){
		document.getElementById("detallePaquete").textContent='3 días/2 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=1150;
	}else if(nomPaquete == 'Huacachina'){
		document.getElementById("detallePaquete").textContent='4 días/3 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=1730;
	}else if(nomPaquete == 'Paracas'){
		document.getElementById("detallePaquete").textContent='3 días/2 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=850;
	}else if(nomPaquete == 'Cusco'){
		document.getElementById("detallePaquete").textContent='4 Dias/3 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=990;
	}else if(nomPaquete == 'Apurimac'){
		document.getElementById("detallePaquete").textContent='4 Dias/3 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=1542;
	}else if(nomPaquete == 'Puno'){
		document.getElementById("detallePaquete").textContent='2 Dias/1 noche - 2 Personas';
		document.getElementById("precioPaquete").textContent=570;
	}else if(nomPaquete == 'Tambopata'){
		document.getElementById("detallePaquete").textContent='4 Dias/3 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=870;
	}else if(nomPaquete == 'Tarapoto'){
		document.getElementById("detallePaquete").textContent='4 Dias/3 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=940;
	}else if(nomPaquete == 'Chanchamayo'){
		document.getElementById("detallePaquete").textContent='3 Dias/2 noches - 2 Personas';
		document.getElementById("precioPaquete").textContent=740;
	}else{
		document.getElementById("detallePaquete").textContent='Elegir paquete';
		document.getElementById("precioPaquete").textContent=0;
	}
}