<?php
use en2portr3s\admin\model\Suggestion;

 $user_data = [
    'id' => $_POST['id'],
	'content' => $_POST['content'],
	'status' => $_POST['status'],
	'since' => $_POST['since']
];

$suggestion = new Suggestion();
$suggestion->edit($user_data);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

