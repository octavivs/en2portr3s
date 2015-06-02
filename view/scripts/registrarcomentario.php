<?php

use en2portr3s\model\Coment;

$objcoment = new Coment();

$nom = real_escape_string($_POST['nom']);
$ape = real_escape_string($_POST['ape']);
$Ema = real_escape_string($_POST['Ema']);
$Men = real_escape_string($_POST['Men']);

$objcoment->set($nom,$ape,$Ema,$Men);

