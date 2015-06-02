varx; x=$(document);
x.ready(inicializarEventos);


function inicializarEventos() { 
var x;
 x=$("#enviar");
 x.click(presionSubmit); 
}


function presionSubmit() { 
 var Nombre = $("#Nombre").val();
 var Apellido = $("#Apellido").val();
 var Email = $("#Email").val();
 var Mensaje = $("#Mensaje").val();
 $.get("procesar.php",{nom:Nombre,ape:Apellido,Ema:Email,Men:Mensaje},llegadaDatos);
 return false; }
 
 function llegadaDatos(datos) {
	 alert(datos);
	 }
