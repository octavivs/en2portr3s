<?php

use en2portr3s\model\Suggestion;

$suggestion = new Suggestion();
$datos = $suggestion->get();

foreach ($datos as $dato) {
    echo "<tr><td>" . $dato['id'] . "</td>";
    echo "<td>" . $dato['content'] . "</td>";
    echo "<td>" . $dato['status'] . "</td>";
    echo "<td>" . $dato['since'] . "</td>" . "</tr>";
}
