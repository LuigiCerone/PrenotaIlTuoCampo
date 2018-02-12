<?php
require_once("model/User.php");
//echo($_POST["email"]);

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user = User::withEmailAndPassoword($_POST["email"], $_POST["password"]);
    if ($user->getId() != null) {
        http_response_code(200);
        session_start();
        $_SESSION['id'] = $user->getId();
        if ($user->isAdmin() == 1)
            $_SESSION['admin'] = 1;
        if ($user->isModerator()) {
            $_SESSION['moderator'] = $user->getPartner();
        }
        exit();
    } else
        http_response_code(500);
}



