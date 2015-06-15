<?php

include 'autoloader.php';

use en2portr3s\admin\library\Request;

$received_url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

$url = empty($received_url) ? "" : $received_url;

$request = new Request($url);
$request->execute();
