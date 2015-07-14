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
                    echo "<tr>" . PHP_EOL;
                    echo "<td><input type='text' id='id' name='id' value='" . $dato['id'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text'id='username' name='username' value='" . $dato['username'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' id='pass' name='pass' value='" . $dato['pass'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' id='kind' name='kind' value='" . $dato['kind'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='text' id='since' name='since' value='" . $dato['since'] . "'  /></td>" . PHP_EOL;
                    echo "<td><input type='button' class='button tiny' data-id='" . $dato['id'] . "' id='actualizar' value='Actualizar' /></td>" . PHP_EOL;
                    //echo "<td><input type='button' id='elimimnar2' value='eliminar' /></td>" . PHP_EOL;
                    echo "</form></tr>" . PHP_EOL;
                }
                ?>
            </table>
        </div>
    </div>
</div>
