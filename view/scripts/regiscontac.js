var x; 
x=$(document);
x.ready(inicializarEventos);


function inicializarEventos() { 
var x;
 x=$("#alre");
 x.click(presionSubmit); 
}


function presionSubmit() { 
  
 var nombre = $("#nombre").val();
 var apellido = $("#apellido").val();
 var email = $("#email").val();
 var content = $("#cont").val();
  $.post("view/scripts/registrarcomentario.php",{nom:nombre,ape:apellido,ema:email,cont:content});

return false;

  }
 
 
         
        
