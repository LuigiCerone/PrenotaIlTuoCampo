<?php
require_once('model/Match.php');

session_start();

if (isset($_SESSION["admin"]) && isset($_SESSION["id"]) && isset($_POST['matches'])) {
//    print_r($_POST['matches']);
    foreach ($_POST['matches'] as $value) {
        $match = new Match(intval($value['first_team_fk']), intval($value['second_team_fk']), intval($value['tournament']), intval($value['day']));
        echo "" . $match->to_json();
        $match->insert();
    }
}
