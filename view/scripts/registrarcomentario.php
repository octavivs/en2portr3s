<?php

use en2portr3s\model\Comment;

$objcomment = new Comment();

$first_name = $_POST['nom'];
$last_name = $_POST['ape'];
$email = $_POST['ema'];
$content = $_POST['cont'];

$objcomment->set($first_name,$last_name,$email,$content);

echo $objcomment;

function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space.'\\', $className),'' , $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../'.$route.$className.".php";
}