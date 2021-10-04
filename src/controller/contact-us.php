<?php

$title = "Contact us";

switch ($_SERVER['REQUEST_METHOD']) {
    case "POST":
        $page = "thanks.php";
        $errors = [];
        if (empty($_POST['contact_email'])) {
            $errors[] = "Title is required";
        }
        if (empty($_POST['contact_object'])) {
            $errors[] = "Object is required";
        }
        if (empty($_POST['contact_content'])) {
            $errors[] = "Content is required";
        }
        break;
    case "GET":
    default:
        $page = "contact-us.php";
}

$styles = ['contact-us.css'];
require_once('../templates/_base.php');
