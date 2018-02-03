<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/User.php');

$tpl = templateInit::Instance();

// Here I can add some content if needed.
session_start();

if (isset($_SESSION['id']) && !isset($_SESSION['admin'])) {
    $tpl->render('index');
} else if (isset($_SESSION['id']) && isset($_SESSION['admin'])) {
    $user = new User();
    $user = User::withID($_SESSION["id"]);
    $params = array('user' => json_decode($user->to_json()));
    $tpl->render('index', $params);

} else
    $tpl->render('index');