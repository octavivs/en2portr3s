<?php

use en2portr3s\model\Suggestion;

$suggestion = new Suggestion();
$datos = $suggestion->get();
?>
<table class="responsive">
    <tr>
        <th>ID</th>
        <th>Mensaje</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </tr>
    <?php
    foreach ($datos as $dato) {
        ?>
        <tr>
            <td  ><?=$dato['id']?></td>
            <td><?=$dato['content']?></td>
            <td><?=$dato['since']?></td>
            <td><input type='button' class='button tiny' data-id='<?=$dato['id']?>' id='eliminar' value='Eliminar' /></td>
        </tr>
        <?php
    }
    ?>
</table>
