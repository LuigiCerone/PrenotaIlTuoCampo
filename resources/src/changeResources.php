<?php
require_once('model/Resource.php');

session_start();

if (isset($_SESSION['admin'])) {
//    id, date, time, user_fk, field_fk, approved, valid
    if (isset($_POST['partner']) && isset($_POST['supply'])) {
        Resource::addSupplies($_POST['partner'], $_POST['supply']);
    }
} else {
    http_response_code(500);
}
