<?php
require_once('model/Sport.php');
require_once('model/Field.php');

if (isset($_GET['sport'])) {
    // We need to get all the available fields for this sport.
    header('Content-type: application/json');
    echo "" . Field::getFieldsForSport($_GET['sport']);
} else {
    header('Content-type: application/json');
    echo "" . Sport::getAllSports();
}