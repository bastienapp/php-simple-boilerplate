<?php

$title = "Contact us";

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        $page = "thanks.php";
        break;
    case "GET":
    default:
        $page = "contact-us.php";
}

$styles = ['contact-us.css'];
require_once('../templates/_base.php');
