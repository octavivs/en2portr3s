<?php

use en2portr3s\model\Page;

$page = new Page();
$list = $page->get();
$first_item = array_shift($list);
$firt_id = $first_item['label'];
?>
<div>
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
            <p>This is the <?= $firt_id ?> panel of the basic tab example.</p>
        </div>
        <?php
        foreach ($list as $item) {
            $id = $item['label'];
            echo "<div class='content' id='$id'>";
            echo "<p>This is the $id panel of the basic tab example.</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>
