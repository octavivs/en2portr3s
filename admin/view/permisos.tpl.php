<?php

use en2portr3s\model\Account;

$account = new Account();
$datos = $account->select();
?>
<table class="responsive">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
         <th>Tipo</th>
        <th>Registro</th>
        <th>Actualizar</th>
    </tr>
    <?php
    foreach ($datos as $dato) {
        ?>
        <tr>
            <td id="id"> <?= $dato['id'] ?> </td> 
            <td id="username"> <?= $dato['username'] ?> </td>
            <td><input type='text' id= 'kind' name='kind' value='<?= $dato['kind']?>'  /></td>
            <td > <?= $dato['since'] ?> </td>
            <td><input type='button' class='button tiny' data-id='<?= $dato['id'] ?>' id='actualizar' value='Actualizar' /></td>

        </tr>
        <?php
    }
    ?>
</table>
