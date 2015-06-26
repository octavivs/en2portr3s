<?php

use en2portr3s\admin\model\Account;

$account = new Account();
$list = $account->get();
?>
<div class="row">
    <div class="large-12 columns">
        <table class="responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Kind</th>
                    <th>Since</th>
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
    </div>
</div>
