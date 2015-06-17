<?php

use en2portr3s\admin\library\PHPMailer;

$nombre = ($_POST['nombre']);
$email = ($_POST['email']);
$asunto =($_POST['asunto']);
$adjunto = $_FILES['adjunto'];
$mensaje = $_POST['mensaje'];

/*
spl_autoload_register(function ($qualified_class_name) {
    $class_name_position = strripos($qualified_class_name, '\\') + 1;
    $class_name = substr($qualified_class_name, $class_name_position);
    $namespaces = str_replace(array(__NAMESPACE__ . '\\', $class_name), '', $qualified_class_name);
    $route = str_replace('\\', '/', $namespaces);

   echo $route . $class_name . ".php" . '<br />';
    require '../../'.$route . $class_name . ".php";
});
*/



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


function __autoload($qClassName) {
    $global_space = "en2portr3s\\admin";
   $lastNsPos = strripos($qClassName, '\\');
   $className = substr($qClassName, $lastNsPos + 1);
   $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../' . $route . $className . ".php";
}