<?php

use en2portr3s\model\Account;

$account = new Account();
$list = $account->getFullInfo();
?>
<div id="permissions">
    <ul class="accordion" data-accordion>
        <h3>Permisos</h3>
        <?php
        foreach ($list as $data) {
            ?>
            <li class="accordion-navigation">
                <a href="#regis_id_<?= $data['id'] ?>">
                    <?= $data['first_name'] ?> <?= $data['last_name'] ?>
                </a>
                <div id="regis_id_<?= $data['id'] ?>" class="content">
                    <div class="row">
                        <div class="small-3 medium-1 columns">
                            <label>Tipo: </label>
                        </div>
                        <div class="small-9 medium-11 columns">
                            <input type='text' data-username='<?= $data['username'] ?>' value='<?= $data['kind'] ?>' />
                        </div>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
