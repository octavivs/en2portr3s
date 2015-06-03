<?php

use en2portr3s\model\Comment;


$user_data = [];
$user_data['first_name'] = $_POST['nom'];
$user_data['last_name'] = $_POST['ape'];
$user_data['email'] = $_POST['ema'];
$user_data['content'] = $_POST['cont'];

$cont = new Comment();

$cont->set($user_data);


/*$objcomment->set($first_name,$last_name,$email,$content);

echo $objcomment;
*/
function __autoload($qClassName) {
    $global_space = "en2portr3s";
    $lastNsPos = strripos($qClassName, '\\');
    $className = substr($qClassName, $lastNsPos + 1);
    $trimed = str_replace(array($global_space.'\\', $className),'' , $qClassName);
    $route = str_replace('\\', '/', $trimed);

    require '../../'.$route.$className.".php";
}