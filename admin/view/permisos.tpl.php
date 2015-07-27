<?php

use en2portr3s\model\Account;

$account = new Account();
$datos = $account->get();
?>
<ul class="accordion" data-accordion>
    <h3> Registro </h3> 
    <?php
    foreach ($datos as $dato) {

        $date = DateTime::createFromFormat('Y-m-d H:i:s', $dato['since']);
        ?>
        <li class="accordion-navigation">
            <a href="#regis_id_<?= $dato['id'] ?>">
                <?= $dato['username'] ?>
            </a>
            <div id="regis_id_<?= $dato['id'] ?>" class="content">
                <?= $date->format('d/M/Y')?>
                <input type='text' id='kind' name='kind' value='<?= $dato['kind'] ?>'  />
                <input type='button' class='button tiny' data-id='<?= $dato['id'] ?>' id='actualizar' value='Actualizar' />
            </div>
        </li>
        <?php
    }
    ?>
</ul>