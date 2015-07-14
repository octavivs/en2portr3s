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
        echo "<tr>" . PHP_EOL;
        echo "<td ><input type='text' id='id' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
        echo "<td >" . $dato['content'] . "</td>" . PHP_EOL;
        echo "<td  ><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
        echo "<td ><input type='button' class='button tiny' data-id='" . $dato['id'] . "' id='eliminar' value='Eliminar' /></td> </tr>" . PHP_EOL;
    }
    ?>
</table>
