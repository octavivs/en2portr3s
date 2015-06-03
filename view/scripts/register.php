<?php

use en2portr3s\model\Person;

$user_data = [];
$user_data['first_name'] = $_POST['first_name'];
$user_data['last_name'] = $_POST['last_name'];
$user_data['email'] = $_POST['username'];
$user_data['phone'] = $_POST['telephone'];
$user_data['address'] = $_POST['address'];
$user_data['birthdate'] = $_POST['birthdate'];

$person = new Person();
$person->set($user_data);
echo $person->message;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space.'\\', $className),'' , $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../'.$route.$className.".php";
}