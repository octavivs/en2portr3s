<?php

namespace en2portr3s\admin\view\scripts;

use en2portr3s\admin\library\PHPMailer;
use en2portr3s\admin\model\Question;

spl_autoload_register(function ($qualified_class_name) {
    $vendor_name = "en2portr3s";
    $prefix = '';

    if (__NAMESPACE__) {
        $this_namespace = str_replace($vendor_name . '\\', '', __NAMESPACE__);
        $this_array = explode('\\', $this_namespace);
        for ($index = 0; $index < count($this_array); $index++) {
            $prefix .= '../';
        }
    }

    $class_name_position = strripos($qualified_class_name, '\\') + 1;
    $class_name = substr($qualified_class_name, $class_name_position);
    $namespaces = str_replace(array($vendor_name . '\\', $class_name), '', $qualified_class_name);
    $route = str_replace('\\', '/', $namespaces);

    echo $prefix . $route . $class_name . ".php" . '<br />' . PHP_EOL;
    require $prefix . $route . $class_name . ".php";
});

$nombre = htmlspecialchars($_POST["nombre"]);
$email = htmlspecialchars($_POST["email"]);
$asunto = htmlspecialchars($_POST["asunto"]);
$mensaje = $_POST["mensaje"];
$adjunto = $_FILES["adjunto"];
$select = $_POST["respuesta"];

if ($select == 'eliminar') {
    $id = $_POST['id'];
    $question = new Question();
    $question->delete($id);

    echo $question->message;
} else {
    $mail = new PHPMailer();

    //indico a la clase que use SMTP
    $mail->isSMTP();

    //permite modo debug para ver mensajes de las cosas que van ocurriendo
    //$mail->SMTPDebug = 2;
    //Debo de hacer autenticación SMTP
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";

    //indico el servidor de Gmail para SMTP
    $mail->Host = "smtp.gmail.com";

    //indico el puerto que usa Gmail
    $mail->Port = 465;

    //indico un usuario / clave de un usuario de gmail
    $mail->Username = "6968@utcv.edu.mx";
    $mail->Password = "militar23";
    $mail->From = "6968@utcv.edu.mx";
    $mail->FromName = "En2portr3s Soluciones Graficas";
    $mail->Subject = $asunto;

    $mail->addAddress($email, $nombre);
    $mail->MsgHTML($mensaje);

    if ($adjunto ["size"] > 0) {
        $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
    }

    if ($mail->Send()) {
        echo '<script>alert("Enviado con exito")</script>';
    } else {
        echo '<script>alert("Se ha producido un erorr")</script>';
    }
}
