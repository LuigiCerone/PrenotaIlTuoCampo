<?php
ini_set("display_errors", 0);
require_once('templateInit.php');
require_once('resources/src/model/Partner.php');
require_once('resources/src/model/User.php');

session_start();
$tpl = templateInit::Instance();
if (isset($_SESSION['admin']) && !isset($_SESSION['moderator'])) {
    $params = array('partners' => json_decode(Partner::getAllPartners()),
        'users' => json_decode(User::getAllAvailableUser()));
    $tpl->render('adminAccounts', $params);
} else
    $tpl->render('error');

