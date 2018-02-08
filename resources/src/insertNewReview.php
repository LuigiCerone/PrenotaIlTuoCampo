<?php
require_once("model/Review.php");

if (isset($_POST["user"]) &&
    isset($_POST["text"]) &&
    isset($_POST["stars"])) {

    $review = new Review($_POST["user"], $_POST["text"], $_POST["stars"]);
    $review->insert();
}