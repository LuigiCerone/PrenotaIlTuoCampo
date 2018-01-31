<?php
ini_set("display_errors", 0);

require_once('templateInit.php');
require_once('resources/src/model/Tournament.php');

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['admin'])) {
// Here I can add some content if needed.
    $params = array('tournaments' => json_decode(Tournament::getAllAdminTournaments()));

    $tpl->render('adminTournaments', $params);
} else
    $tpl->render('error');
