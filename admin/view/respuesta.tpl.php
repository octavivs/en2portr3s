<?php

$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensaje = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
?>
<h3>Email de Contacto</h3>
<form action="respuesta/send" method="post" enctype="multipart/form-data">
    <table class="responsive">
        <tr>
            <td>mensaje del cliente:</td>
            <td><input name="nombre" value='<?= $mensaje ?>' type="text" id="nombre" /></td>
        </tr>
        <tr>
            <td>Nombre del destinatario:</td>
            <td><input name="nombre" value='<?= $first_name ?>' type="text" id="nombre" /></td>
        </tr>
        <tr>
            <td>Email del destinatario:</td>
            <td><input name="email"  value='<?= $mail ?>' type="text" id="email" /></td>
        </tr>
        <tr>
            <td>Asunto:</td>
            <td><input name="asunto" type="text" id="asunto" /></td>
        </tr>
        <tr>
            <td>Archivo adjunto:</td>
            <td><input type="file" name="adjunto" /></td>
        </tr>
        <tr>
            <td>Mensaje:</td>
            <td><textarea name="mensaje" cols="50" rows="10" id="mensaje"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="Enviar" /></td>
           <!-- <td><input type="button" id="regresar" value="regresar" /></td>-->
        </tr>
    </table>
    <input type="hidden" name="phpmailer" />
</form>
