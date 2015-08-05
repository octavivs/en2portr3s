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
    $("input#image").change(catchFilename);
}

function catchFilename() {
    var filename = $(this).val().replace(/.*[\/\\]/, '');
    var filepath = "view/img/";
    $(".selected").val(filepath + filename);
}

function completeHandler(event) {
    $("#status").html(event.target.responseText);
    var id = $(".selected").attr('data-id');
    var kind = $(".selected").attr('data-kind');
    var name = $(".selected").attr('data-name');
    var value = $(".selected").val();
    $.post("contenido/update", {id: id, kind: kind, name: name, value: value}, function (data) {
        alert(data);
    });
    $(".selected").removeClass(".selected");
}

function progressHandler(event) {
    $("#status").html(Math.round(percent) + "% uploaded... please wait");
}

function errorHandler(event) {
    $("#status").html("Upload Failed");
}

function abortHandler(event) {
    $("#status").html("Upload Aborted");
}

function uploadFile() {
    var file = _("image").files[0];
    var formdata = new FormData();
    formdata.append("image", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "contenido/upload");
    ajax.send(formdata);
}

function updateContent() {
    var id = $(this).attr('data-id');
    var kind = $(this).attr('data-kind');
    var name = $(this).attr('data-name');
    var value = $(this).val();
    if ($(this).prop('readonly') === true) {
        $("#manager input[type='text']").removeClass("selected");
        $("#manager input[type='text']").prop('readonly', true);
        $("#manager input[type='text']").css({
            "border-bottom": "1px solid #cccccc",
            "-webkit-box-shadow": "none",
            "-moz-box-shadow": "none",
            "box-shadow": "none"
        });
        $(this).addClass("selected");
        $(this).prop('readonly', false);
        $(this).css({
            "border-bottom": "1px solid #51cbee",
            "-webkit-box-shadow": "0px 1px 2px -2px #51cbee",
            "-moz-box-shadow": "0px 1px 2px -2px #51cbee",
            "box-shadow": "0 1px 2px -2px #51cbee"
        });
        if (kind === 'image' && name === 'url') {
            $("input#image").click();
        }
    } else {
        $(this).prop('readonly', true);
        $(this).css({
            "border-bottom": "1px solid #cccccc",
            "-webkit-box-shadow": "none",
            "-moz-box-shadow": "none",
            "box-shadow": "none"
        });
        if (kind === 'image' && name === 'url') {
            uploadFile();
            return;
        }
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

function _(elementID) {
    return document.getElementById(elementID);
}
