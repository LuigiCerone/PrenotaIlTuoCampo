<?php
require_once("model/Partner.php");

if (isset($_POST["name"]) &&
    isset($_POST["description"]) &&
    isset($_POST["region"]) &&
    isset($_POST["area"]) &&
    isset($_POST["address"]) &&
    isset($_POST["email"]) &&
    isset($_POST["telnumber"])){

    $partner = new Partner($_POST["name"], $_POST["description"], $_POST["region"], $_POST["area"], $_POST["address"], $_POST["email"], $_POST["telnumber"]);
    $partner->insert();
}