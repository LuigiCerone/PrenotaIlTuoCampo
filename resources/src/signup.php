<?php
require_once("model/User.php");


if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (User::isEmailAvailable($_POST['email']) == true) {
        http_response_code(200);
        // Then sign up.
        $user = new User();
        $user = User::signUp($_POST['email'], $_POST['password']);
    } else {
        // The email is already in use.
        http_response_code(409);
        $response['error'] = true;
        $response['error_msg'] = 'Email in use!';
    }


}

