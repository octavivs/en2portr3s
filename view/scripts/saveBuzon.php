<?php

use en2portr3s\model\Buzon;

$user_data = [
       'content' => $_POST['content']
];

$buzon = new Buzon();
$buzon->set($user_data);

echo $buzon->message;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space.'\\', $className),'' , $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../'.$route.$className.".php";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

