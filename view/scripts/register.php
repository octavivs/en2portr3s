<?php

use en2portr3s\model\Person;
use en2portr3s\model\Account;

$user_data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['username'],
    'phone' => $_POST['phone'],
    'address' => $_POST['address'],
    'birthdate' => $_POST['birthdate']
];

$person = new Person();
$person->set($user_data);

$register_data = [
    'username' => $_POST['username'],
    'pass' => $_POST['pass'],
    'kind' => 'normal',
    'person_id' => $person->getId($user_data['email'])
];

$register = new Account();
$register->set($register_data);

echo $register->message;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../' . $route . $className . ".php";
}
