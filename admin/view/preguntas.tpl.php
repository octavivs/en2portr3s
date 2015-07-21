<?php

use en2portr3s\model\Question;

$question = new Question();
$datos = $question->get();
$first_item = array_shift($datos);
$firt_id = $first_item['label'];
?>

<div>
    <ul class="tabs" data-tab>
        <li class="tab-title active">
            <a href="#<?= $firt_id ?>">mensajes pendientes</a>
        </li>
          <li class="tab-title ">
            <a href="#<?= $firt_id ?>">mensajes contestados</a>
        </li>
        <?php
       // foreach ($list as $item) {
           // $id = $item['label'];
           // echo '<li class="tab-title">';
           // echo "<a href='#$id'>$id</a>";
           // echo '</li>';
       // }
        ?>
    </ul>
    <div class="tabs-content">
        <div class='content active' id='<?= $firt_id ?>'>
            <p>This is the <?= $firt_id ?> panel of the basic tab example.</p>
        </div>
        <?php
        /*foreach ($list as $item) {
            $id = $item['label'];
            echo "<div class='content' id='$id'>";
            echo "<p>This is the $id panel of the basic tab example.</p>";
            echo "</div>";
        }*/
        ?>
    </div>
</div>




<!--
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
   // foreach ($datos as $dato) {
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
   //}
    ?>
</table>
-->