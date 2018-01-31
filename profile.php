<?php
ini_set("display_errors",0);
require_once('templateInit.php');
require_once("resources/src/model/User.php");

session_start();
$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('reviews' => json_decode($json));
if ($_SESSION['id'] != null) {
    $user = new User();
    $user = User::withID($_SESSION["id"]);
    if ($user->getFirstName() != null) {
//        echo $user->to_json();
        $params = array('user' => json_decode($user->to_json()));
        $tpl->render('profile', $params);
    }
} else
    $tpl->render('error');


