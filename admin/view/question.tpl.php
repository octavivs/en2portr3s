<?php

use en2portr3s\admin\model\Question;

$question = new Question();

$datos = $question->get();
?>
<div class="row">
        <table   border="5px" width="110%">
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Email</td>
                <td>mensaje</td>
                <td>estatus</td>
                <td>fecha</td>
                <td>responder</td>
                <td>eliminar</td>
            </tr>
            <?php
            foreach ($datos as $dato) {
                echo "<tr><form action='resquestion' method='POST'>" . PHP_EOL;
                echo "<td width=15%><input type='text' name='first_name' value='" . $dato['first_name'] . "'  /></td>" . PHP_EOL;
                echo "<td width=15%><input type='text' name='last_name' value='" . $dato['last_name'] . "'  /></td>" . PHP_EOL;
                echo "<td width=20%><input type='text' name='email' value='" . $dato['email'] . "'  /></td>" . PHP_EOL;
                echo "<td width=20% ><input type='text' name='content' value='" . $dato['content'] . "'  /></td>" . PHP_EOL;
                echo "<td width=15%><input type='text' name='status' value='" . $dato['status'] . "'  /></td>" . PHP_EOL;
                echo "<td width=15%><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
                echo "<td><input type='submit' value='Responder' /></td>" . PHP_EOL;
                echo "</form></tr>" . PHP_EOL;
            }
            ?>
        </table>
</div>