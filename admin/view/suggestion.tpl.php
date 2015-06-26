<?php

use en2portr3s\admin\model\Suggestion;

$suggestion = new Suggestion();
$datos = $suggestion->get();
?>
<div class="row">
    <div class="large-12 columns">
        <table class="responsive" border="5px" >
            <tr>
                <th>id</th>
                <th>mensaje</th>
                <th>fecha</th>
                <th>eliminar</th>
            </tr>
            <?php
            foreach ($datos as $dato) {
                echo "<tr>" . PHP_EOL;
                echo "<td ><input type='text' id='id' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
                //echo "<td>" . $dato['id'] . "</td>" . PHP_EOL;
                echo "<td >" . $dato['content'] . "</td>" . PHP_EOL;

                // echo "<td>" . $dato['since'] . "</td>" . PHP_EOL;
                echo "<td  ><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
                echo "<td ><input type='button' id='eliminar' value='Eliminar' /></td></tr>" . PHP_EOL;
                echo "</tr>" . PHP_EOL;
            }
            ?>
        </table>
    </div>
</div>
