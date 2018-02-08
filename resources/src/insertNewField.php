<?php
require_once("model/Field.php");

session_start();

if ((isset($_SESSION['admin']) || isset($_SESSION['moderator'])) && isset($_POST['partner']) && isset($_POST['outdoor'])
    && isset($_POST['sport']) && isset($_POST['warmed']) && isset($_POST['number'])
    && isset($_POST['province']) && isset($_POST['type'])) {

    // $partner_fk, $sport_fk, $outdoor, $province_fk, $type, $warmed, $number
    $field = new Field($_POST['partner'], $_POST['sport'], $_POST['outdoor'], $_POST['province'], $_POST['type'], $_POST['warmed'], $_POST['number']);

    if ($field->insert())
        http_response_code(200);
    else
        http_response_code(500);
}