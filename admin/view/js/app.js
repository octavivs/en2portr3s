$(document).ready(initialize);

function initialize() {
    $("#exit").click(finish);
    $("input#eliminar").click(eliminar);
    $("input#actualizar").click(actualizar);
}

function finish() {
    $.post("view/js/finish.php", function (data) {
        alert(data);
    });
}

function eliminar() {
  	var id =$(this).attr('data-id');
    $.post("sugerencias/delete", {id: id}, function (data) {
        alert(data);
       location.href="sugerencias";
    });
     
}

function actualizar(){
    var id = $(this).attr('data-id');
    var username = $("#username").val();
    var pass = $("#pass").val();
    var kind= $("#kind").val();
        
    $.post("permisos/actualizar",{id:id, username:username, pass: pass, kind:kind}, function(data){
        alert(data);
        location.href="permisos";
    });
}