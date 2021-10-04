<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($urlPath) {
    case "/":
        require_once('../src/controller/home.php');
        break;
    case "/contact-us":
        require_once('../src/controller/contact-us.php');
        break;
    default:
        header('HTTP/1.1 404 Not Found');
}
