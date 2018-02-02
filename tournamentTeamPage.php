<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');
require_once('resources/src/model/Team.php');
require_once('resources/src/model/User.php');
require_once('resources/src/model/Ranking.php');
require_once('resources/src/model/Match.php');

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
} else if (isset($_SESSION['id']) && isset($_POST['tournament']) && isset($_POST['team'])) {
    $user = User::withID($_SESSION['id']);
    $params = array('tournament' => json_decode(Tournament::getInfoForTournament($_POST['tournament'])),
        'captain' => json_decode($user->to_json()),
        'team' => json_decode(Team::loadById($_POST['team'])));

    if (json_decode(Ranking::getAllRankForTournament($_POST['tournament']) != ""))
        $params['ranks'] = json_decode(Ranking::getAllRankForTournament($_POST['tournament']));

    if (json_decode(json_decode(Match::getAllMatchesForTournament($_POST['tournament'])) != ""))
        $params['days'] = array_chunk(json_decode(Match::getAllMatchesForTournament($_POST['tournament'])), 5);

    $tpl->render('tournamentTeamPage', $params);
} else {
    $tpl->render('error');
}