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
           echo "<tr>". PHP_EOL;
             echo "<td><input type='text' id='id' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
            //echo "<td>" . $dato['id'] . "</td>" . PHP_EOL;
            echo "<td>" . $dato['content'] . "</td>" . PHP_EOL;
            
           // echo "<td>" . $dato['since'] . "</td>" . PHP_EOL;
            echo "<td width=20% ><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
            echo "<td><input type='button' id='eliminar' value='Eliminar' /></td></tr>" . PHP_EOL;
            echo "</tr>" . PHP_EOL;
            
        }
        ?>
    </table>
</div>

 <?php
function __autoload($qClassName) {
    $global_space = "en2portr3s\\admin";
   $lastNsPos = strripos($qClassName, '\\');
   $className = substr($qClassName, $lastNsPos + 1);
   $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);
 
    echo $route . $className . ".php" . '<br />';
    require '../' . $route . $className . ".php";
   
    
}