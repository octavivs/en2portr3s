$(document).ready(initialize);

function initialize() {
    $("#exit").click(finish);
    $("input#Reset").click(clearMessages);
    $("input#eliminar").click(eliminar);
    $("input#eliminar2").click(eliminar2);
}

function finish() {
    $.post("view/scripts/finish.php", function (data) {
        alert(data);
    });
}

function eliminar() {
    var id = $("#id").val();
    $.post("view/scripts/eliminar.php", {id: id}, function (data) {
        alert(data);
    });
}

function eliminar2() {
    var id = $("#id2").val();
    $.post("view/scripts/eliminar2.php", {id: id}, function (data) {
        alert(data);
    });
}

function isEmpty(input) {
    return input === '';
}

function isText(input) {
    return isNaN(input);
}

function isName(input) {
    var pattern = /^([a-záéíóúüñÁÉÍÓÚÜÑ ]+)$/i;
    return pattern.test(input);
}

function isValidPass(input) {
    var pattern = /^([a-z0-9@#$%]{8,16})$/i;
    return pattern.test(input);
}

function isInteger(input) {
    var empty = '';
    var pattern = /[0-9]+/;
    return input.replace(pattern, '') === empty;
}

function isEmail(input) {
    var pattern = /^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i;
    return pattern.test(input);
}

function message(text) {
    return "<span class='required'>" + text + "</span>";
}

function clearMessages() {
    if ($("span.required").length) {
        $("span.required").remove();
    }
}

function clearDataFields() {
    $(".data-field").val("");
}
