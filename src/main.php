<?php
    require ('model/User.php');

    echo "Hello world";
    $user = new User('Tizio', 'Caio');
    echo $user->toString();

    $user->insert();
