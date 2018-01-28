<?php
require_once('model/Availability.php');

session_start();

if ($_SESSION["id"] != null && isset($_POST["availability"])) {
    if(Availability::remove($_POST["booking"]))
        http_response_code(200);
    else
        http_response_code(500);
}