<?php
use en2portr3s\model\Page;

$page = new Page();
$list = $page->get();
$is_active = true;
?>
<div>
    <ul class="tabs" data-tab>
        <?php
        foreach ($list as $item) {
            $id = $item['label'];
            $name = ucfirst($id);
            if ($is_active) {
                echo "<li class = 'tab-title active'><a href = '#$id'>$name</a></li>";
                $is_active = false;
            } else {
                echo "<li class = 'tab-title'><a href = '#$id'>$name</a></li>";
            }
        }
        ?>
    </ul>

    <div class="tabs-content">
        <div class="content active" id="inicio">
            <p>This is the first panel of the basic tab example. You can place all sorts of content here including a grid.</p>
        </div>
        <div class="content" id="servicios">
            <p>This is the second panel of the basic tab example. This is the second panel of the basic tab example.</p>
        </div>
        <div class="content" id="conocenos">
            <p>This is the third panel of the basic tab example. This is the third panel of the basic tab example.</p>
        </div>
        <div class="content" id="contacto">
            <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
        </div>
        <div class="content" id="registro">
            <p>This is the fourth panel of the basic tab example. This is the fourth panel of the basic tab example.</p>
        </div>
    </div>
</div>
