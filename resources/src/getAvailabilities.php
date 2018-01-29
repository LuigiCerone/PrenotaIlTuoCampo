<?php
session_start();
require_once("model/Availability.php");

if (isset($_SESSION['id']) &&
    isset($_POST["partner"]) &&
    isset($_POST["sport"]) &&
    isset($_POST["date"]) &&
    isset($_POST["time"])) {

    http_response_code(200);
    echo "" . Availability::getAllAvailabilities($_POST["partner"], $_POST["sport"], $_POST["date"], $_POST["time"]);
} else
    http_response_code(500);