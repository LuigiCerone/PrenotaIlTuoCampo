<?php
require_once('model/Match.php');
require_once('model/Tournament.php');

session_start();

if (isset($_SESSION["admin"]) && isset($_SESSION["id"]) && isset($_POST['matches'])) {
//    print_r($_POST['matches']);
    foreach ($_POST['matches'] as $value) {
        $match = new Match(intval($value['first_team_fk']), intval($value['second_team_fk']), intval($value['tournament']), intval($value['day']));
        $match->insert();
    }
    if (Tournament::setScheduled($_POST['matches'][0]['tournament']))
        http_response_code(200);
    else
        http_response_code(500);
}
