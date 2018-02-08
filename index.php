<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/User.php');
require_once('resources/src/model/Partner.php');

$tpl = templateInit::Instance();

session_start();

if (isset($_SESSION['id']) && !isset($_SESSION['admin']) && !isset($_SESSION['moderator'])) {
    $tpl->render('index');
} else if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {
    $user = new User();
    $user = User::withID($_SESSION["id"]);
    $params = array('user' => json_decode($user->to_json()));
    $tpl->render('index', $params);
} else if (isset($_SESSION['id']) && isset($_SESSION['moderator'])) {
    $user = new User();
    $user = User::withID($_SESSION["id"]);
    $params = array('user' => json_decode($user->to_json()),
        'partner' => json_decode(Partner::getPartnerById($_SESSION['moderator'])));
    $tpl->render('index', $params);
} else
    $tpl->render('index');