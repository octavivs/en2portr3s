$(document).ready(initialize);

function initialize() {
    $("#exit").click(finish);
    $("input#eliminar").click(eliminar);
    $("input#eli").click(eli);
    $("input#actualizar").click(actualizar);
    $("input#Reply").click(responder);
    $("input#regresar").click(regresar);
}

function finish() {
    $.post("view/js/finish.php");
}

function eliminar() {
    var id = $(this).attr('data-id');
    $.post("sugerencias/delete", {id: id}, function (data) {
        alert(data);
        location.href = "sugerencias";
    });
}
function eli() {
    var id = $(this).attr('data-id');
    $.post("preguntas/delete", {id: id}, function (data) {
        alert(data);
        location.href = "preguntas";
    });
}
function actualizar() {
    var username = $(this).attr('data-username');
    var kind = $("#kind").val();

    $.post("permisos/update", {username:username, kind: kind}, function (data) {
        alert(data);
     
    });
}


function responder() {
    var id = $(this).attr('data-id');
    var fname = $(this).attr('data-fname');
    var email = $(this).attr('data-email');
    var content = $(this).attr('data-content');
    /*
     var fname = $("#fname_" + id).html();
     var email = $("#email_" + id).html();
     var content = $("#content_" + id).html();
     */
    //alert(fname + content + email);

    $.redirect('respuesta', {'first_name': fname, 'email': email, 'content': content});

}
function regresar() {
   $.redirect('preguntas');
   
}