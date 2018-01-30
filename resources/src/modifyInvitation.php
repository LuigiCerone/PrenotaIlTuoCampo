<?php
require_once('model/Invitation.php');

session_start();

if (isset($_SESSION["id"]) && isset($_POST["inv"]) && isset($_POST['status'])) {
    if (Invitation::changeStatus($_POST["inv"], $_POST['status']))
        http_response_code(200);
    else
        http_response_code(500);
}