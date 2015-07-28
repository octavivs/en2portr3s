<?php

use en2portr3s\model\Question;

$question = new Question();
$datos = $question->select();
?>

<div id="question_admin">
    <ul class="tabs" data-tab>
        <li class="tab-title active"><a href="#pendientes">Pendientes</a></li>
        <li class="tab-title"><a href="#revisados">Revisados</a></li>
    </ul>
    <div class="tabs-content">
        <div class="content active" id="pendientes">
            <p> En esta parte se imprimen los mensajes pendientes.</p>
            <ul class="accordion" data-accordion >
                <?php
                foreach ($datos as $dato) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $dato['since']);
                    if ($dato['status'] === 'Pendiente') {
                        ?>
                        <li class="accordion-navigation">
                            <a href="#question_id_<?= $dato['id'] ?>">
                                <?= $dato['first_name'] ?> (<?= $date->format('d/M/Y') ?>)
                            </a>
                            <div id="question_id_<?= $dato['id'] ?>" class="content">
                                <p><?= $dato['content'] ?></p>
                                <input type='button' class='button tiny' data-id="<?= $dato['id'] ?>" data-fname="<?= $dato['first_name'] ?>" data-email="<?= $dato['email'] ?>" data-content="<?= $dato['content'] ?>" id="Reply" value='Responder' />
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="content" id="revisados">
            <p>En esta parte se imprimen los mensajes revisados y se podran eliminar.</p>
            <ul class="accordion" data-accordion>
                <?php
                foreach ($datos as $dato) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $dato['since']);
                    if ($dato['status'] === 'Revisado') {
                        ?>
                        <li class="accordion-navigation">
                            <a href="#question_id_<?= $dato['id'] ?>">
                                <?= $dato['first_name'] ?> (<?= $date->format('d/M/Y') ?>)
                            </a>
                            <div id="question_id_<?= $dato['id'] ?>" class="content">
                                <p><?= $dato['content'] ?></p>
                                <input type='button' class='button tiny' data-id="<?= $dato['id'] ?>" id="eli" value='Eliminar' />
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
           
        </div>
    </div>
</div>
