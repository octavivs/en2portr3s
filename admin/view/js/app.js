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
  	var id =$(this).attr('data-id');
    $.post("sugerencias/delete", {id: id}, function (data) {
        alert(data);
       location.href="sugerencias";
    });
     
}
