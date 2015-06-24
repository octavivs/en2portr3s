<?php

use en2portr3s\admin\library\PHPMailer;
use en2portr3s\admin\model\Question;


 $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $asunto =htmlspecialchars( $_POST["asunto"]);
    $mensaje = $_POST["mensaje"];
    $adjunto = $_FILES["adjunto"];
    $select = $_POST["respuesta"];
    
    if($select == 'eliminar'){
        
        $id = $_POST['id'];
        $question = new Question();
         $question->delete($id);
       echo $question->message;
    }else{
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
    
function __autoload($qClassName) {
    $global_space = "en2portr3s\\admin";
   $lastNsPos = strripos($qClassName, '\\');
   $className = substr($qClassName, $lastNsPos + 1);
   $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../' . $route . $className . ".php";
}


