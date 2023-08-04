function validarDatos(){
	let cant = document.getElementById("cantidadPrimos").value;

	if (cant ==''){
		alert("Debe ingresar un valor");
	}else if (isNaN(cant)){
		alert("La cantidad a calcular debe ser un valor númericos");
	}else if (cant<1){
		alert("La cantidad mínima debe ser mayor o igual a 1");
	}else{
		document.getElementById('activar').disabled=false;
	}
}