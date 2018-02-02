<?php
require_once("model/Tournament.php");

session_start();

if (isset($_SESSION['admin']) && isset($_POST['partner']) && isset($_POST['name'])
    && isset($_POST['sport']) && isset($_POST['start'])
    && isset($_POST['end'])) {

//    $name, $partner_fk, $startDate, $endSubscription, $teamNumber, $teamLeft, $sport_fk
    $tournament = new Tournament($_POST['name'], $_POST['partner'], $_POST['start'],
        $_POST['end'], 10, 10, $_POST['sport']);

    if ($tournament->insert())
        http_response_code(200);
    else
        http_response_code(500);
}