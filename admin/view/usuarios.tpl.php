<?php

use en2portr3s\model\Account;

$account = new Account();
$list = $account->get();
?>
<table class="responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Tipo</th>
            <th>Registro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $user) {
            echo '<tr>'
            . '<td>' . $user['id'] . '</td>'
            . '<td>' . $user['username'] . '</td>'
            . '<td>' . $user['pass'] . '</td>'
            . '<td>' . $user['kind'] . '</td>'
            . '<td>' . $user['since'] . '</td>'
            . '</tr>';
        }
        ?>
    </tbody>
</table>
