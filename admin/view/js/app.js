$(document).ready(initialize);

function initialize() {
    $("#exit").click(finish);
    $("input#eliminar").click(eliminar);
}

function finish() {
    $.post("view/js/finish.php", function (data) {
        alert(data);
    });
}

function eliminar() {
    var id = $("#id").val();
    $.post("sugerencias/delete", {id: id}, function (data) {
        alert(data);
    });
}
