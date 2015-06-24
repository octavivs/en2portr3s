<?php

use en2portr3s\admin\model\Question;

 $id = $_POST['id'];
        
$question = new Question();
$question->delete($id);
echo $question->message;


function __autoload($qClassName) {
    $global_space = "en2portr3s\\admin";
   $lastNsPos = strripos($qClassName, '\\');
   $className = substr($qClassName, $lastNsPos + 1);
   $trimed = str_replace(array($global_space . '\\', $className), '', $qClassName);
    $route = str_replace('\\', '/', $trimed);
 
    //echo $route . $className . ".php" . '<br />';
    require '../../' . $route . $className . ".php";
   
    
}


