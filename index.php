<?php

define('PATH', __DIR__);
define("DOMAIN","http://".$_SERVER['HTTP_HOST']);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
	case '/' :
	case '' :
        require __DIR__ . '/views/top.php';
        break;
    case '/contact' :
        require __DIR__ . '/views/contact/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}