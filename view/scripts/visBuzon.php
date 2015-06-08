<?php

use en2portr3s\model\Buzon;

$buzon = new Buzon();
$datos=$buzon->get();

foreach ($datos as $dato) {
echo "<tr><td>".$dato['id']."</td>";
echo "<td>".$dato['content']."</td>";
echo "<td>".$dato['state']."</td>";
echo "<td>".$dato['since']."</td>"."</tr>";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

