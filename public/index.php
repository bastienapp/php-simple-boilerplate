<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ('/' === $urlPath) {
    $title = "Home";
    $page = "home.php";
} elseif ('/contact-us' === $urlPath) {
    $title = "Contact us";
    if ("POST" === $method) {
        $page = "thanks.php";
    } else {
        $page = "contact-us.php";
    }
} else {
    header('HTTP/1.1 404 Not Found');
}
require_once('../src/_base.php');
