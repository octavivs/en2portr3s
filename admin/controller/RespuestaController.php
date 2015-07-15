<?php

namespace en2portr3s\admin\controller;

use en2portr3s\admin\library\View;
use en2portr3s\admin\library\PHPMailer;

class RespuestaController {

    private $reply_args = array(
        'nombre' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'email' => FILTER_SANITIZE_EMAIL,
        'asunto' => array(
            'filter' => FILTER_SANITIZE_STRING,
            'flags' => FILTER_FLAG_STRIP_LOW,
        ),
        'mensaje' => FILTER_SANITIZE_STRING
    );

    public function indexAction() {
        return new View('respuesta');
    }

    public function sendAction() {
        $replyData = filter_input_array(INPUT_POST, $this->reply_args);
        $adjunto = $_FILES["adjunto"];

        $mail = new PHPMailer();

        // Se indica la clase que use SMTP.
        $mail->isSMTP();

        // Permite el modo debug para ver mensajes de las cosas que van ocurriendo.
        // $mail->SMTPDebug = 2;

        // Se Debe de hacer autenticación SMTP.
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        // Se indica el servidor de Gmail para SMTP.
        $mail->Host = "smtp.gmail.com";

        // Se indica el puerto que usa Gmail.
        $mail->Port = 465;

        // Se indica el nombre de usuario y la contraseña de una cuenta de gmail.
        $mail->Username = "6968@utcv.edu.mx";
        $mail->Password = "militar23";
        $mail->From = "6968@utcv.edu.mx";
        $mail->FromName = "En2portr3s Soluciones Graficas";
        $mail->Subject = $replyData['asunto'];

        $mail->addAddress($replyData['email'], $replyData['nombre']);
        $mail->MsgHTML($replyData['mensaje']);

        if ($adjunto ["size"] > 0) {
            $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
        }

        return $mail->Send() ? 'Enviado con exito' : 'Se ha producido un error';
    }

}
