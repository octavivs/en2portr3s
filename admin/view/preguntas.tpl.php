<?php

use en2portr3s\model\Question;

$question = new Question();
$datos = $question->get();
?>
<table class="responsive">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Mensaje</th>
        <th>Fecha</th>
        <th></th>
    </tr>
    <?php
    foreach ($datos as $dato) {
        ?>
        <tr>
            <td><?= $dato['id'] ?></td>
            <td id="fname_<?= $dato['id'] ?>"><?= $dato['first_name'] ?></td>
            <td id="lname_<?= $dato['id'] ?>"><?= $dato['last_name'] ?></td>
            <td id="email_<?= $dato['id'] ?>"><?= $dato['email'] ?></td>
            <td id="content_<?= $dato['id'] ?>"><?= $dato['content'] ?></td>
            <td><?= $dato['since'] ?></td>
            <td><input type='button' class='button tiny' data-id="<?= $dato['id'] ?>" id="Reply" value='Responder' /></td>
        </tr>
        <?php
    }
    ?>
</table>
