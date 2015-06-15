<?php

namespace en2portr3s\admin;

spl_autoload_register(function ($qualified_class_name) {
    $class_name_position = strripos($qualified_class_name, '\\') + 1;
    $class_name = substr($qualified_class_name, $class_name_position);
    $namespaces = str_replace(array(__NAMESPACE__ . '\\', $class_name), '', $qualified_class_name);
    $route = str_replace('\\', '/', $namespaces);

    //echo $route . $class_name . ".php" . '<br />';
    require $route . $class_name . ".php";
});
