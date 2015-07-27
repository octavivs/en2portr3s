<?php

use en2portr3s\model\Suggestion;

$suggestion = new Suggestion();
$datos = $suggestion->select();
?>

<ul class="accordion" data-accordion>
    <h3> sugerencias</h3> 
    <?php
    foreach ($datos as $dato) {

        $date = DateTime::createFromFormat('Y-m-d H:i:s', $dato['since']);
        ?>
        <li class="accordion-navigation">
            <a href="#question_id_<?= $dato['id'] ?>">
              Sugerencia N°<?= $dato['id'] ?> (<?= $date->format('d/M/Y') ?>)
            </a>
            <div id="question_id_<?= $dato['id'] ?>" class="content">
                <p><?= $dato['content'] ?></p>
                <input type='button' class='button tiny' data-id='<?= $dato['id'] ?>' id='eliminar' value='Eliminar' />
            </div>
        </li>
        <?php
    }
    ?>
</ul>