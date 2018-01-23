<?php
require_once("model/User.php");


if (isset($_POST["email"]) &&
    isset($_POST["password"]) &&
    isset($_POST["firstName"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["birthDate"]) &&
    isset($_POST["gender"])) {

    if (User::isEmailAvailable($_POST['email']) == true) {
        http_response_code(200);
        // Then sign up.
        $user = new User();
//                'email': email,
//                'password': password,
//                'firstName' : firstName,
//                'lastName' : lastName,
//                'birthDate' : birthDate,
//                'gender' : gender

        $user = User::signUp($_POST['email'], $_POST['password'], $_POST["firstName"], $_POST["lastName"], $_POST["birthDate"], $_POST["gender"]);

        // Send confirmation email.
        $user->sendConfirmationEmail();
    } else {
        // The email is already in use.
        http_response_code(409);
        $response['error'] = true;
        $response['error_msg'] = 'Email in use!';
    }
}

