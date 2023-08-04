function Solucion(){
    let dias = document.getElementById ("dias").value;
    let mes = document.getElementById ("mes").value;
    let anio = document.getElementById ("anio").value;
    let sumaTotal = 0;
    let validar =0;

    if (dias == '') {
        alert("Es obligatorio ingresar dias");
    }
    else if (mes == '') {
        alert("Es obligatorio ingresar un mes");
    }
    else if (anio == '') {
        alert("Es obligatorio ingresar un año");
    }
    else if (isNaN(dias)) {
        alert("El dia debe ser un valor numerico");
    }
    else if (isNaN(mes)) {
        alert("El mes debe ser un valor numerico");
    }
    else if (isNaN(anio)) {
        alert("El año debe ser un valor numerico");
    }
    else if (dias<0) {
        alert("Colocar un dia en un rango del 1-31");
    }
    else if (mes<0) {
        alert("Colocar un mes en un rango del 1-12");
    }
    else if (anio<999) {
        alert("Colocar un año de 4 digitos positivo");
    }
    else if (dias>31) {
        alert("Colocar un dia en un rango del 1-31");
    }
    else if (mes>12) {
        alert("Colocar un mes en un rango del 1-12");
    }
    else if (anio>9999) {
        alert("Colocar un año de 4 digitos positivo");
    }
    else{
        validar=1;
    }

    if (validar==1) {

    sumaTotal = Suma(dias) + Suma(mes) + Suma(anio);

    do{
        if(sumaTotal % 10 == 0){
            sumaTotal = 0;
        }else{
            sumaTotal = Suma(sumaTotal);
        }
    }while(sumaTotal >= 10);

    nombre = '';
    if (sumaTotal==1) {
        nombre  = "Plata";
    }else if (sumaTotal==2) {
        nombre  = "Hierro";
    }else if (sumaTotal==3) {
        nombre  = "Mercurio";
    }else if (sumaTotal==4) {
        nombre  = "Zinc";
    }else if (sumaTotal==5) {
        nombre  = "Estanio";
    }else if (sumaTotal==6) {
        nombre  = "Plomo";
    }else if (sumaTotal==7) {
        nombre  = "Platino";
    }else if (sumaTotal==8) {
        nombre  = "Niquel";
    }else if (sumaTotal==9) {
        nombre  = "Oro";
    }else if (sumaTotal==0) {
        nombre  = "Cobre";
    }
    document.getElementById('mostrarAqui').innerHTML=nombre;
    document.getElementById('imagenHorosco').src = 'imagenes_horoscopo/'+nombre+'.jpg';
    }
}

function Suma(num){
    var sum = 0 , residuo;

    while(num > 0){
        residuo = num% 10;
        num =Math.floor( num / 10);
        sum = sum + residuo;
    }

    return sum;
}