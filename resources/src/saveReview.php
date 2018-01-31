<?php
require_once('model/Review.php');

session_start();

if (isset($_POST["id"])) {

    Review::approva($_POST["id"]);

}