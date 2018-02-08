<?php
echo "logout";
session_start();

session_destroy();
$_SESSION = array();
