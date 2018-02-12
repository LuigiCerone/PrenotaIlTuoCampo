<?php
require_once("model/User.php");

session_start();

if (isset($_SESSION['admin']) &&
    isset($_POST["user"]) &&
    isset($_POST["partner"])) {
    if (User::setModerator($_POST["user"], $_POST["partner"])) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(500);
}

