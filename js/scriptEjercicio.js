function validarInfo(){
    let estadoCivil, edad, sexo, info;
    info=parseInt(document.informacion.info.value);
    estadoCivil=(info%10000-info%1000)/1000;
    if(estadoCivil==1)
        estadoCivil="Soltero";
    if(estadoCivil==2)
        estadoCivil="Casado";
    if(estadoCivil==3)
        estadoCivil="Viudo";
    if(estadoCivil==4)
        estadoCivil="Divorciado";
    if(estadoCivil>=5){
        estadoCivil="No definido"
        alert('Ingrese numeros desde 1 al 4 para el primer digito:\n1. Soltero\n2. Casado\n3. Viudo\n4. Divorciado');
    }
    edad=(info%1000-info%10)/10;
    sexo=info%10;
    if(sexo==1)
        sexo="Masculino";
    if(sexo==2)
        sexo="Femenino";
    if(sexo>=3){
        sexo="No definido"
        alert('Ingrese el numero 1 o 2 para el ultimo digito:\n1. Masculino\n2. Femenino');
    }
    if(info>9999 || info<1000){
        estadoCivil="Vacio";
        edad="Vacio";
        sexo="Vacio";
        alert("Solo se acepta numeros de 4 digitos");
    }
    registro="Estado civil: "+estadoCivil+"\nEdad: "+edad+"\nSexo: "+sexo;
    document.informacion.salida.value=registro;

}