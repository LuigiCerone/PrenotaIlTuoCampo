<?php
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');

$tpl = templateInit::Instance();
session_start();

if (isset($_SESSION['id']) && isset($_POST['id'])) {
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['id'])));
    $tpl->render('team', $params);
} else {
    $tpl->render('error');
}