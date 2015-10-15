<?php

use en2portr3s\model\Suggestion;

$suggestion = new Suggestion();
$list = $suggestion->select();
?>
<ul class="accordion" data-accordion>
    <h3>Sugerencias</h3>
    <?php
    foreach ($list as $data) {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $data['since']);
        ?>
        <li class="accordion-navigation">
            <a href="#question_id_<?= $data['id'] ?>">
                <?= $date->format('d/M/Y H:i:s') ?>
            </a>
            <div id="question_id_<?= $data['id'] ?>" class="content">
                <p><?= $data['content'] ?></p>
                <input type='button' class='button tiny' data-id='<?= $data['id'] ?>' id='eliminar' value='Eliminar' />
            </div>
        </li>
        <?php
    }
    ?>
</ul>
