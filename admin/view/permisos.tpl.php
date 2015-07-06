<?php

use en2portr3s\model\Account;

$account = new Account();
$datos = $account->get();
?>
<div id="tab">
    <div class="row collapse">
        <div class="large-12 columns">
            <table class="responsive">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Tipo</th>
                    <th>Registro</th>
                </tr>
                <?php
                foreach ($datos as $dato) {
                    echo "<tr><form action='' method='POST'>" . PHP_EOL;
                    echo "<td><input type='text' id='id2' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='username' value='" . $dato['username'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='pass' value='" . $dato['pass'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='kind' value='" . $dato['kind'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='submit' class='button tiny' value='Editar' /></td>" . PHP_EOL;
                    //echo "<td><input type='button' id='elimimnar2' value='eliminar' /></td>" . PHP_EOL;
                    echo "</form></tr>" . PHP_EOL;
                }
                ?>
            </table>
        </div>
    </div>
</div>
