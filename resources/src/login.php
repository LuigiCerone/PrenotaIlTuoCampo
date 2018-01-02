<?php
require_once("model/User.php");
//echo($_POST["email"]);

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user = User::withEmailAndPassoword($_POST["email"], $_POST["password"]);
    if ($user->getFirstName() != null) {
        echo $user->to_json();
        session_start();
        $_SESSION['id'] = 4;
        echo $_SESSION['id'];
        exit();
    }
}



