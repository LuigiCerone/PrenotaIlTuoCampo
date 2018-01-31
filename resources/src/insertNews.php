<?php
require_once("model/Novita.php");

if (isset($_POST["title"]) &&
    isset($_POST["date"]) &&
    isset($_POST["text"])){

    $novita = new Novita($_POST["title"], $_POST["date"], $_POST["text"]);
    $novita->insert();
}