<?php

use en2portr3s\model\Page;

$page = new Page();
$list = $page->get();
$first_item = array_shift($list);
$firt_id = $first_item['label'];
?>
<div id="manager">
    <ul class="tabs" data-tab>
        <li class="tab-title active">
            <a href="#<?= $firt_id ?>"><?= $firt_id ?></a>
        </li>
        <?php
        foreach ($list as $item) {
            $id = $item['label'];
            echo '<li class="tab-title">';
            echo "<a href='#$id'>$id</a>";
            echo '</li>';
        }
        ?>
    </ul>
    <div class="tabs-content">
        <div class='content active' id='<?= $firt_id ?>'>
            <?php
            ${$firt_id} = new Page($firt_id);
            $content_list = ${$firt_id}->getContent();
            ?>
            <ul class="accordion" data-accordion>
                <?php
                foreach ($content_list as $content) {
                    ?>
                    <li class="accordion-navigation">
                        <a href="#Content_id_<?= $content['id'] ?>">Content_id_<?= $content['id'] ?></a>
                        <div id="Content_id_<?= $content['id'] ?>" class="content">
                            <?php
                            foreach ($content as $name => $value) {
                                ?>
                                <div class="row">
                                    <div class="small-3 medium-1 columns"><label><?= ucfirst($name) ?>: </label></div>
                                    <div class="small-9 medium-11 columns"><input type="text" value="<?= $value ?>" readonly /></div>
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
        <?php
        foreach ($list as $item) {
            $id = $item['label'];
            ?>
            <div class='content' id='<?= $id ?>'>
                <?php
                ${$id} = new Page($id);
                $content_list = ${$id}->getContent();
                ?>
                <ul class="accordion" data-accordion>
                    <?php
                    foreach ($content_list as $content) {
                        ?>
                        <li class="accordion-navigation">
                            <a href="#Content_id_<?= $content['id'] ?>">Content_id_<?= $content['id'] ?></a>
                            <div id="Content_id_<?= $content['id'] ?>" class="content">
                                <?php
                                foreach ($content as $name => $value) {
                                    ?>
                                    <div class="row">
                                        <div class="small-3 medium-1 columns"><label><?= ucfirst($name) ?>: </label></div>
                                        <div class="small-9 medium-11 columns"><input type="text" value="<?= $value ?>" readonly /></div>
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
            <?php
        }
        ?>
    </div>
</div>
