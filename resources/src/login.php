<?php
require_once("model/User.php");
//echo($_POST["email"]);

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user = User::withEmailAndPassoword($_POST["email"], $_POST["password"]);
    if ($user->getId() != null) {
        session_start();
        $_SESSION['id'] = $user->getId();
        exit();
    }
}



