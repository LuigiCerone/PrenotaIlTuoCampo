<?php
require_once ('model/Database.php');
require_once ('model/Field.php');

session_start();
if (isset($_SESSION['admin']) &&  isset($_POST['sport']) && isset($_POST['partner']) && isset($_POST['date']) && isset($_POST['time'])){
    echo "" . Field::getAllAvailableFields($_POST['sport'], $_POST['partner'], $_POST['date'], $_POST['time']);
} else {
    http_response_code(500);
    echo "Error";
}