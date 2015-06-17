<?php

use en2portr3s\admin\model\Suggestion;



 $id = [
    'id' => $_POST['id']
];
        
$suggestion = new Suggestion();
$datos = $suggestion->delete();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

