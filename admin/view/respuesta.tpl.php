<?php
$first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
?>
<h3>Email de contacto</h3>
<form action="respuesta/send" method="post" enctype="multipart/form-data">
    <label for="contenido">Mensaje del cliente:</label>
    <input name="contenido" type="text" id="contenido" value='<?= $content ?>' />

    <label for="nombre">Nombre del destinatario:</label>
    <input name="nombre" type="text" id="nombre" value='<?= $first_name ?>' />

    <label for="email">Email del destinatario:</label>
    <input name="email" type="text" id="email" value='<?= $email ?>' />

    <label for="asunto">Asunto:</label>
    <input name="asunto" type="text" id="asunto" />

    <label for="adjunto">Archivo adjunto:</label>
    <input name="adjunto" type="file" id="adjunto" />

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" cols="50" rows="8" id="mensaje"></textarea>

    <input type="submit" class="button tiny" value="Enviar" />
    <input type="button" class="button tiny" id="regresar" value="Cancelar" />
</form>
