<?php


$first_name = $_POST['first_name'];
$mail = $_POST['email'];
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Contacto</title>
    </head>
    <body>
        <h3>Email de Contacto</h3>


        <form action="enviar.php" method="post" enctype="multipart/form-data">

            <table border="0">
                <tr>
                    <td>Nombre del destinatario:</td>
                    <td><input name="nombre" value='<?= $first_name ?>' type="text" id="nombre"></td>
                </tr>
                <tr>
                    <td>Email del destinatario:</td>
                    <td><input name="email"  value='<?= $mail ?>' type="text" id="email"></td>
                </tr>
                <tr>
                    <td>Asunto:</td>
                    <td><input name="asunto" type="text" id="asunto"></td>
                </tr>
                <tr>
                    <td>Archivo adjunto:</td>
                    <td><input type="file" name="adjunto"></td>
                </tr>
                <tr>
                    <td>Mensaje:</td>
                    <td><textarea name="mensaje" cols="50" rows="15" id="mensaje"></textarea></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="Enviar"></td>
                </tr>
            </table>
            <input type="hidden" name="phpmailer">
        </form>
    </body>

