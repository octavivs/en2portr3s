<?php

use en2portr3s\model\Suggestion;

$user_data = [
    'content' => $_POST['buzon'],
    'status' => 'Pendiente'
];

$suggestion = new Suggestion();
$suggestion->set($user_data);

echo $suggestion->message;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../' . $route . $className . ".php";
}
