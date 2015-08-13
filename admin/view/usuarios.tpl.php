<?php

use en2portr3s\model\Account;

$title = array(
    'id' => 'Id',
    'first_name' => 'Nombres',
    'last_name' => 'Apellidos',
    'username' => 'Username',
    'kind' => 'Tipo',
    'since' => 'Registro'
);

$account = new Account();
$list = $account->getFullInfo();
?>
<div id="users">
    <ul class="accordion" data-accordion>
        <h3>Usuarios</h3>
        <?php
        foreach ($list as $data) {
            ?>
            <li class="accordion-navigation">
                <a href="#regis_id_<?= $data['id'] ?>">
                    <?= $data['first_name'] ?> <?= $data['last_name'] ?>
                </a>
                <div id="regis_id_<?= $data['id'] ?>" class="content">
                    <?php
                    foreach ($data as $name => $value) {
                        ?>
                        <div class="row">
                            <div class="small-3 medium-1 columns">
                                <?php
                                switch ($name) {
                                    case 'username':
                                    case 'kind':
                                    case 'since':
                                        echo "<label>$title[$name]: </label>";
                                        break;
                                    default:
                                        break;
                                }
                                ?>
                            </div>
                            <div class="small-9 medium-11 columns">
                                <?php
                                switch ($name) {
                                    case 'username':
                                    case 'kind':
                                        echo "<input type='text' value='$value' readonly />";
                                        break;
                                    case 'since':
                                        $date = DateTime::createFromFormat('Y-m-d H:i:s', $value);
                                        $formatted_date = $date->format('d/M/Y');
                                        echo "<input type='text' value='$formatted_date' readonly />";
                                        break;
                                    default:
                                        break;
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
