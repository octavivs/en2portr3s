<?php

use en2portr3s\model\Comment;

$user_data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'content' => $_POST['content'],
    'status' => 'Pendiente'
];

$coment = new Comment();
$coment->set($user_data);

echo $coment->message;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../' . $route . $className . ".php";
}
