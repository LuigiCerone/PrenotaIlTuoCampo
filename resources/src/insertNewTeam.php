<?php
require_once("model/Team.php");

session_start();

if (isset($_SESSION['id']) && isset($_POST['tournament']) && isset($_POST['player'])) {
    $user = User::withID($_SESSION['id']);
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['id'])),
        'captain' => json_decode($user->to_json()));
    $tpl->render('team', $params);
} else {
    $tpl->render('error');
}