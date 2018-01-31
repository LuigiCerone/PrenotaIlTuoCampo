<?php
require_once('model/Booking.php');

session_start();

if ($_SESSION["id"] != null && isset($_POST["booking"])) {
    if(Booking::changeValidation($_SESSION["id"], $_POST["booking"]))
        http_response_code(200);
    else
        http_response_code(500);
}
