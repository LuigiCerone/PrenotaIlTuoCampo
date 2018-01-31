<?php
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');
require_once('resources/src/model/User.php');

session_start();
//$tpl = templateInit::Instance();
//
//// Here I can add some content if needed.
////$json = "{\"partners\":[{\"name\":\"Nome1\",\"number\":1},{\"name\":\"Nome2\",\"number\":2}]}";
//$params = array('tournaments' => json_decode(Tournament::getAllTournaments()));
//
//$tpl->render('tournamentTeamPage');

//print_r($_POST);


if (isset($_SESSION['id']) && isset($_POST["name"]) && isset($_POST["number"]) && isset($_POST['tournament']) && isset($_POST['player'])) {
    $user = User::withID($_SESSION['id']);

    $teamPlayers = "";

    foreach ($_POST['player'] as $item) {
        $teamPlayers .= $item['firstName'] . " " . $item['lastName'] . " <br>";
    }
    echo "" . $teamPlayers;

    $team = new Team($_POST["name"], $_POST["number"], $_SESSION['id'], $teamPlayers);
    $id = $team->insert();

    // Display page.
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['id'])),
        'captain' => json_decode($user->to_json()),
        'team' => json_decode(Team::loadById($id)));
    $tpl->render('tournamentTeamPage', $params);
} else {
    $tpl->render('error');
}