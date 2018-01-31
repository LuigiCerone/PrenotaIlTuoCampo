<?php
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');
require_once('resources/src/model/User.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id']) && isset($_POST["name"]) && isset($_POST["number"]) && isset($_POST['tournament']) && isset($_POST['player'])) {
    $user = User::withID($_SESSION['id']);

    $teamPlayers = "";

    foreach ($_POST['player'] as $item) {
        $teamPlayers .= $item['firstName'] . " " . $item['lastName'] . " <br>";
    }

    $team = new Team($_POST["name"], $_POST["number"], $_SESSION['id'], $teamPlayers, $_POST['tournament']);
    $id = $team->insert();

    // Display page.
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['tournament'])),
        'captain' => json_decode($user->to_json()),
        'team' => json_decode(Team::loadById($id)));
    $tpl->render('tournamentTeamPage', $params);
} else {
    $tpl->render('error');
}