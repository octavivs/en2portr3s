<?php

require 'class.phpmailer.php';
require 'class.smtp.php';

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$asunto = addslashes($_POST['asunto']);
@$mensaje = addslashes($_POST['mensaje']);

$correo = new PHPMailer();
$correo->IsSMTP();
$correo->SMTPAuth = true;
$correo->SMTPSecure = "ssl";
$correo->Host = "smtp.gmail.com";
$correo->Port = 465;
$correo->Username = "7012@utcv.edu.mx";
$correo->Password = "Oc7@v10S@n";
$correo->From = $email;
$correo->FromName = $nombre;
$correo->Subject = $asunto;
$correo->AltBody = $mensaje;
$correo->MsgHTML("De: " . "$nombre" .
        "<br />" . "Email: " . "$email" .
        "<br />" . "Asunto: " . "$asunto" .
        "<br />" . "Mensaje: " . "$mensaje"
);
$correo->AddAddress("7012@utcv.edu.mx");
$correo->AddBCC("7012@utcv.edu.mx");
$correo->IsHTML(true);
if (!$correo->Send()) {
    //echo "catastrofe".$correo->ErrorInfo;
    echo '<script>alert("Se ha producido un erorr")</script>';
} else {
    echo '<script>alert("Enviado con exito")</script>';
    echo '<script>location.href = "http://localhost/contacto";</script>';
}