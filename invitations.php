<?php
require_once('templateInit.php');
require_once('resources/src/model/Invitation.php');
ini_set("display_errors", 0);

session_start();

$tpl = templateInit::Instance();

// Here I can add some content if needed.
//$json = "{\"reviews\":[{\"username\":\"User1\",\"value\":1},{\"username\":\"User2\",\"number\":2}]}";
//$params = array('reviews' => json_decode($json));

if ($_SESSION['id'] != null) {
    $params = array('sentInvitations' => Invitation::getAllSentInvitation($_SESSION['id']),
        'receivedInvitations' => Invitation::getAllReceivedInvitation($_SESSION['id']));
    $tpl->render('invitations', $params);
} else
    $tpl->render('error');
