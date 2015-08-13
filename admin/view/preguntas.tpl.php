<?php

use en2portr3s\model\Question;

$question = new Question();
$list = $question->select();
?>
<div id="question_admin">
    <ul class="tabs" data-tab>
        <li class="tab-title active"><a href="#pendientes">Pendientes</a></li>
        <li class="tab-title"><a href="#revisados">Revisados</a></li>
    </ul>
    <div class="tabs-content">
        <div class="content active" id="pendientes">
            <ul class="accordion" data-accordion >
                <?php
                foreach ($list as $data) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $data['since']);
                    if ($data['status'] === 'Pendiente') {
                        ?>
                        <li class="accordion-navigation">
                            <a href="#question_id_<?= $data['id'] ?>">
                                <?= $data['first_name'] ?> (<?= $date->format('d/M/Y') ?>)
                            </a>
                            <div id="question_id_<?= $data['id'] ?>" class="content">
                                <p><?= $data['content'] ?></p>
                                <input type='button' class='button tiny' data-id="<?= $data['id'] ?>" data-fname="<?= $data['first_name'] ?>" data-email="<?= $data['email'] ?>" data-content="<?= $data['content'] ?>" id="Reply" value='Responder' />
                            </div>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
        <div class="content" id="revisados">
            <ul class="accordion" data-accordion>
                <?php
                foreach ($list as $data) {
                    $date = DateTime::createFromFormat('Y-m-d H:i:s', $data['since']);
                    if ($data['status'] === 'Revisado') {
                        ?>
                        <li class="accordion-navigation">
                            <a href="#question_id_<?= $data['id'] ?>">
                                <?= $data['first_name'] ?> (<?= $date->format('d/M/Y') ?>)
                            </a>
                            <div id="question_id_<?= $data['id'] ?>" class="content">
                                <p><?= $data['content'] ?></p>
                                <input type='button' class='button tiny' data-id="<?= $data['id'] ?>" id="eli" value='Eliminar' />
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
