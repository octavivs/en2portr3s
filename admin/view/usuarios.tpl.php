<?php

use en2portr3s\model\Account;

$account = new Account();
$list = $account->get();
?>
<table class="responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>tipo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $user) {
            ?>
           <tr>
            <td><?= $user['id']?> </td>
            <td><?= $user['first_name']?> </td>
            <td><?= $user['last_name']?> </td>
            <td><?= $user['username']?> </td>
            <td><?= $user['kind']?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
