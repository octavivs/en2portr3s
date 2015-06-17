<?php

use en2portr3s\admin\model\Suggestion;

$suggestion = new Suggestion();
$datos = $suggestion->get();
?>
<div class="row">
    <table  border="8px" width="100%" >
        <tr>
            <td>id</td>
            <td>mensaje</td>
            <td>fecha</td>
            <td>eliminar</td>
        </tr>
        <?php
        foreach ($datos as $dato) {
           echo "<tr><form action='eliminar' method='POST'>" . PHP_EOL;
             echo "<td><input type='text' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
            //echo "<td>" . $dato['id'] . "</td>" . PHP_EOL;
            echo "<td>" . $dato['content'] . "</td>" . PHP_EOL;
            
           // echo "<td>" . $dato['since'] . "</td>" . PHP_EOL;
            echo "<td width=20% ><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='submit' value='Eliminar' /></td></tr>" . PHP_EOL;
            echo "</form></tr>" . PHP_EOL;
            
        }
        ?>
    </table>
</div>
