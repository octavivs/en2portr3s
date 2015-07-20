<?php

use en2portr3s\model\Page;

$page = new Page();
$list = $page->get();
$is_active;
?>
<div>
    <ul class="tabs" data-tab>
        <?php
        $is_active = true;
        foreach ($list as $item) {
            $id = $item['label'];
            if ($is_active) {
                echo "<li class='tab-title active'><a href='#$id'>$id</a></li>";
                $is_active = false;
            } else {
                echo "<li class='tab-title'><a href='#$id'>$id</a></li>";
            }
        }
        ?>
    </ul>

    <div class="tabs-content">
        <?php
        $is_active = true;
        foreach ($list as $item) {
            $id = $item['label'];
            if ($is_active) {
                echo "<div class='content active' id='$id'>";
                echo "<p>This is the $id panel of the basic tab example.</p>";
                echo "</div>";
                $is_active = false;
            } else {
                echo "<div class='content' id='$id'>";
                echo "<p>This is the $id panel of the basic tab example.</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</div>
