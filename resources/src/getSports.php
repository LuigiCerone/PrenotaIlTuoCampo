<?php
require_once('model/Sport.php');

header('Content-type: application/json');
echo "" . Sport::getAllSports();