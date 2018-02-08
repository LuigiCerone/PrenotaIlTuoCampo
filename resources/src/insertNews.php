<?php
require_once("model/News.php");

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['admin']) &&
    isset($_POST["title"]) &&
    isset($_POST["date"]) &&
    isset($_POST["text"])) {

    $new = new News($_POST["title"], $_POST["date"], $_POST["text"], $_SESSION['id']);
    $new->insert();
}