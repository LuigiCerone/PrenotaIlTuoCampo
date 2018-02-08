<?php
require_once("model/Award.php");

session_start();

if (isset($_SESSION['admin']) && isset($_POST['name']) && isset($_POST['tournament'])
    && isset($_POST['place'])) {
//    $name, $place, $tournament_fk
    $award = new Award($_POST['name'], $_POST['place'], $_POST['tournament']);
    $award->insert();
}