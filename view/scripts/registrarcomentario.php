<?php

use en2portr3s\model\Comment;

$objcomment = new Comment();

$first_name = real_escape_string($_POST['nom']);
$last_name = real_escape_string($_POST['ape']);
$email = real_escape_string($_POST['ema']);
$content = real_escape_string($_POST['cont']);

$objcomment->set($first_name,$last_name,$email,$content);

echo $objcomment;