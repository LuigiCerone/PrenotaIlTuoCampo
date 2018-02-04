<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/User.php');

session_start();
$tpl = templateInit::Instance();


if (isset($_GET['token'])) {

    if (User::activateUser($_GET['token'])) {
        http_response_code(200);
        $tpl->render('activatedUserAccount');
    } else {
        http_response_code(501);
        $tpl->render('error');
    }
}