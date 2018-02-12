<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once("resources/src/model/User.php");

session_start();
$tpl = templateInit::Instance();

if ($_SESSION['id'] != null) {
    $user = new User();
    $user = User::withID($_SESSION["id"]);
    if ($user->getFirstName() != null) {
        $params = array('user' => json_decode($user->to_json()));
        // Stats param.
        $stats = json_decode(User::getFavouriteStats($_SESSION['id']));
        $stats->{'favDay'} = User::getFavouriteDay($_SESSION['id']);
        $stats->{'day'} = User::getLastBookingDateDiff($_SESSION['id']);
        $stats->{'captain'} = User::getCaptainNumber($_SESSION['id']);
//        print_r($favs);

        $params['stats'] = $stats;
        $tpl->render('profile', $params);
    }
} else
    $tpl->render('error');


