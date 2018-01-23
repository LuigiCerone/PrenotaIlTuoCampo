<?php
require_once ('model/User.php');

if(isset($_GET['token'])){
    User::activateUser($_GET['token']);
}