<?php
require_once("model/User.php");
//echo($_POST["email"]);

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    echo "Qui";

    $user::withEmailAndPassoword($_POST["email"], $_POST["password"]);
}



