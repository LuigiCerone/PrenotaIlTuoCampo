<?php
require_once("model/Invitation.php");

session_start();

if (isset($_SESSION['id']) && isset($_POST['to']) && isset($_POST['ava'])) {
//    $from_user_fk, $to_user_fk, $date, $accepted, $availability_fk
    $invitation = new Invitation($_SESSION['id'], $_POST['to'], 2, $_POST["ava"]);
    if ($invitation->insert())
        http_response_code(200);
    else
        http_response_code(500);
}