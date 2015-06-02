varx; x=$(document);
x.ready(inicializarEventos);


function inicializarEventos() { 
var x;
 x=$("#alre");
 x.click(presionSubmit); 
}


function presionSubmit() { 
 var Nombre = $("#Nombre").val();
 var Apellido = $("#Apellido").val();
 var Email = $("#Email").val();
 var content = $("#content").val();
 $.get("registrarcomentario.php",{nom:Nombre,ape:Apellido,Ema:Email,cont:content},llegadaDatos);
 return false; }
 
 function llegadaDatos(datos) {
	 alert(datos);
	 }
