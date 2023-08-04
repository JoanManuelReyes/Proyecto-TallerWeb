function ejem2()
{
	
	var top1 ="",top2="",top3 ="",top4="";
	
	
	if (document.getElementsByName("pri")[0].checked===true)
		var top1="Mas costosos: Huacachina con un coste de S/. 1730,  Choquequirao con un coste de S/.1542 y Tarapoto con un coste de S/. 940.";
	if (document.getElementsByName("seg")[0].checked===true)
		var top2="Con precio modico: Costa Verde con un coste de S/. 1150,  Machu Picchu con un coste de S/.990 y Tambopata con un coste de S/. 870.";
	if (document.getElementsByName("ter")[0].checked===true)
		var top3="Mas baratos: Paracas con un coste de S/. 850,  Puno con un coste de S/.570 y Chanchamayo con un coste de S/. 740.";
	
	document.Form2.respuesta.value = 
	"El top 3 de tours: \n"+
	top1+""+top2+""+top3;

	if (respuesta = pri)
	{
		
	}
}