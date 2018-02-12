<?php
require_once("model/User.php");

session_start();

if (isset($_SESSION['admin']) &&
    isset($_POST["user"]) &&
    isset($_POST["partner"])) {
    if (User::setModerator($_POST["user"], $_POST["partner"])) {
        echo "OKKKK";
        http_response_code(200);
    } else {
        echo "NOT OKKKK";
        http_response_code(500);
    }
} else {
    http_response_code(500);
}

