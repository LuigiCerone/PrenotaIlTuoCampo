<?php
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');
require_once('resources/src/model/User.php');

$tpl = templateInit::Instance();
session_start();

if (isset($_SESSION['id']) && isset($_POST['id'])) {
    $user = User::withID($_SESSION['id']);
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['id'])),
        'captain' => json_decode($user->to_json()));
    $tpl->render('team', $params);
} else {
    $tpl->render('error');
}