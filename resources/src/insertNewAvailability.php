<?php
session_start();
require_once("model/Availability.php");
if (isset($_SESSION['id']) &&
    isset($_POST["partner"]) &&
    isset($_POST["sport"]) &&
    isset($_POST["date"]) &&
    (isset($_POST["time"]) || isset($_POST["isAll"]))) {

    if (isset($_POST["time"])) {
//        $date, $time, $user_fk, $partner_fk, $sport_fk
        $availability = new Availability($_POST["date"], $_POST["time"], $_SESSION["id"], $_POST["partner"], $_POST["sport"]);
    } else if (isset($_POST["isAll"])) {
        $availability = new Availability($_POST["date"], null, $_SESSION["id"], $_POST["partner"], $_POST["sport"]);
    }
    if ($availability->insert())
        http_response_code(200);
    else
        http_response_code(500);
} else
    http_response_code(500);