<?php
require_once('resources/libs/SMTemplate.php');


class templateInit
{

    public static function Instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new SMTemplate();
        }
        return $inst;
    }
}