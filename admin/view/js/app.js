$(document).ready(initialize);

function initialize() {
    $("#exit").click(finish);
    $("input#eliminar").click(eliminar);
    $("input#eli").click(eli);
    $("input#actualizar").click(actualizar);
    $("input#Reply").click(responder);
    $("input#regresar").click(regresar);
    $("input[data-name='url']").click(updateContent);
    $("input[data-name='alt']").click(updateContent);
    $("input[data-name='body']").click(updateContent);
    $("input[data-name='lang_code']").click(updateContent);
}

function updateContent() {
    var id = $(this).attr('data-id');
    var kind = $(this).attr('data-kind');
    var name = $(this).attr('data-name');
    var value = $(this).val();
    if ($(this).prop('readonly') === true) {
        $("#manager input[type='text']").prop('readonly', true);
        $("#manager input[type='text']").css({
            "border-bottom": "1px solid #cccccc",
            "-webkit-box-shadow": "none",
            "-moz-box-shadow": "none",
            "box-shadow": "none"
        });
        $(this).prop('readonly', false);
        $(this).css({
            "border-bottom": "1px solid #51cbee",
            "-webkit-box-shadow": "0px 1px 2px -2px #51cbee",
            "-moz-box-shadow": "0px 1px 2px -2px #51cbee",
            "box-shadow": "0 1px 2px -2px #51cbee"
        });
        /*
        if (kind === 'image') {
            $("#manager input[type='file']").click();
        }
        */
    } else {
        $(this).prop('readonly', true);
        $(this).css({
            "border-bottom": "1px solid #cccccc",
            "-webkit-box-shadow": "none",
            "-moz-box-shadow": "none",
            "box-shadow": "none"
        });
        $.post("contenido/update", {id: id, kind: kind, name: name, value: value}, function (data) {
            alert(data);
        });
    }
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
    $.post("permisos/update", {username: username, kind: kind}, function (data) {
        alert(data);
        location.href = "permisos";
    });
}

function responder() {
    var id = $(this).attr('data-id');
    var fname = $(this).attr('data-fname');
    var email = $(this).attr('data-email');
    var content = $(this).attr('data-content');
    $.redirect('respuesta', {'first_name': fname, 'email': email, 'content': content});
}

function regresar() {
    $.redirect('preguntas');
}
