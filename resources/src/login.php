<?php
require_once("model/User.php");
//echo($_POST["email"]);

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user = User::withEmailAndPassoword($_POST["email"], $_POST["password"]);
    if ($user['id'] != null) {
        echo $user->to_json();
    }
}



