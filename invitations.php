<?php
require_once('templateInit.php');
require_once('resources/src/model/Invitation.php');
ini_set("display_errors", 0);

session_start();
$tpl = templateInit::Instance();

if (isset($_SESSION['id'])) {
    $params = array('sentInvitations' => json_decode(Invitation::getAllSentInvitation($_SESSION['id'])),
        'receivedInvitations' => json_decode(Invitation::getAllReceivedInvitation($_SESSION['id'])));
    $tpl->render('invitations', $params);
} else
    $tpl->render('error');
