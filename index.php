<?php

require 'config.php';
require 'library/Inflector.php';
require 'library/Response.php';
require 'library/View.php';
require 'library/Request.php';

if (empty($_GET['url'])) {
    $urlDelUsuario = "";
} else {
    $urlDelUsuario = $_GET['url'];
}
$request = new Request($urlDelUsuario);
$request->execute();
