<?php

use en2portr3s\admin\model\Question;

$question = new Question();
$datos = $question->get();
?>
<div id="tab">
    <div class="row collapse">
        <div class="large-12 columns">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>mensaje</th>
                    <th>fecha</th>
                    <th>responder</th>
                </tr>
                <?php
                foreach ($datos as $dato) {
                    echo "<tr><form action='resquestion' method='POST'>" . PHP_EOL;
                    echo "<td><input type='text' id='id2' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='first_name' value='" . $dato['first_name'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='last_name' value='" . $dato['last_name'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='email' value='" . $dato['email'] . "'  /></td>" . PHP_EOL;
                    echo "<td ><input type='text' name='content' value='" . $dato['content'] . "'  /></td>" . PHP_EOL;
                    // echo "<td><input type='text' name='status' value='" . $dato['status'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='submit' value='responder' /></td>" . PHP_EOL;
                    //echo "<td><input type='button' id='elimimnar2' value='eliminar' /></td>" . PHP_EOL;
                    echo "</form></tr>" . PHP_EOL;
                }
                ?>
            </table>
        </div>
    </div>
</div>
