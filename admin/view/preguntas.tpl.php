<?php

use en2portr3s\model\Question;

$question = new Question();
$datos = $question->get();
?>






<ul class="tabs" data-tab>
    <li class="tab-title active"><a href="#panel1">mensajes pendientes</a></li>
    <li class="tab-title"><a href="#panel2">mensajes revisados</a></li>

</ul>
<div class="tabs-content">
    <div class="content active" id="panel1">
        <p> En esta parte se imprimen los mensajes pendientes.</p>
        <table class="responsive">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Responder</th>
            </tr>
            <?php
            foreach ($datos as $dato) {
                if ($dato['status'] === 'Pendiente') {
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
            }
            ?>
        </table>
    </div>
    <div class="content" id="panel2">
        <p>En esta parte se imprimen los mensajes revisados y se podran eliminar.</p>
        <table class="responsive">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Responder</th>
            </tr>
            <?php
            foreach ($datos as $dato) {
                if ($dato['status'] === 'Revisado') {
                    ?>
                    <tr>
                        <td><?= $dato['id'] ?></td>
                        <td id="fname_<?= $dato['id'] ?>"><?= $dato['first_name'] ?></td>
                        <td id="lname_<?= $dato['id'] ?>"><?= $dato['last_name'] ?></td>
                        <td id="email_<?= $dato['id'] ?>"><?= $dato['email'] ?></td>
                        <td id="content_<?= $dato['id'] ?>"><?= $dato['content'] ?></td>
                        <td><?= $dato['since'] ?></td>
                        <td><input type='button' class='button tiny' data-id="<?= $dato['id'] ?>" id="eli" value='Eliminar' /></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>

</div>



<!--

-->