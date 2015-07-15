<?php

use en2portr3s\model\Question;

$question = new Question();
$datos = $question->get();
?>
<div id="tab">
    <table>
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
            echo "<tr><form action='respuesta' method='POST'>" . PHP_EOL;
            echo "<td><input type='text' id='id2' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='text' name='first_name' value='" . $dato['first_name'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='text' name='last_name' value='" . $dato['last_name'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='text' name='email' value='" . $dato['email'] . "'  /></td>" . PHP_EOL;
            echo "<td ><input type='text' name='content' value='" . $dato['content'] . "'  /></td>" . PHP_EOL;
            // echo "<td><input type='text' name='status' value='" . $dato['status'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='submit' class='button tiny' value='Responder' /></td>" . PHP_EOL;
            //echo "<td><input type='button' id='elimimnar2' value='eliminar' /></td>" . PHP_EOL;
            echo "</form></tr>" . PHP_EOL;
        }
        ?>
    </table>
</div>
