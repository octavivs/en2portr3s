<?php

namespace en2portr3s\view\scripts;

use en2portr3s\model\Question;

spl_autoload_register(function ($qualified_class_name) {
    $vendor_name = "en2portr3s";
    $prefix = '';

    if (__NAMESPACE__) {
        $this_namespace = str_replace($vendor_name . '\\', '', __NAMESPACE__);
        $this_array = explode('\\', $this_namespace);
        for ($index = 0; $index < count($this_array); $index++) {
            $prefix .= '../';
        }
    }

    $class_name_position = strripos($qualified_class_name, '\\') + 1;
    $class_name = substr($qualified_class_name, $class_name_position);
    $namespaces = str_replace(array($vendor_name . '\\', $class_name), '', $qualified_class_name);
    $route = str_replace('\\', '/', $namespaces);

    //echo $prefix . $route . $class_name . ".php" . '<br />' . PHP_EOL;
    require $prefix . $route . $class_name . ".php";
});

$user_data = [
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'content' => $_POST['content'],
    'status' => 'Pendiente'
];

$question = new Question();
$question->set($user_data);

echo $question->message;
