<?php
require_once("model/User.php");

session_start();

if (isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["birthDate"]) &&
    isset($_POST["gender"]) &&
    isset($_POST["telnumber"])) {

    if (User::isEmailAvailable($_POST['email']) == true) {
        http_response_code(200);
        // Then sign up.
        $user = new User();

        $user = User::signUp($_POST['email'], $_POST['password'], $_POST["firstName"], $_POST["lastName"], $_POST["birthDate"], $_POST["gender"], $_POST["telnumber"]);

    } else {
        // The email is already in use.
        http_response_code(409);
        $response['error'] = true;
        $response['error_msg'] = 'Email in use!';
    }
} else if (isset($_POST["old_pass"]) && isset($_POST["new_pass"]) && isset($_SESSION["id"])) {
    // Change user's password.
    if (User::changePassword($_SESSION["id"], $_POST["old_pass"], $_POST["new_pass"]))
        http_response_code(200);
    else
        http_response_code(500);
}

