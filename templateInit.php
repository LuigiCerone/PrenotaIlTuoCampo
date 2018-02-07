<?php
require_once('resources/libs/SMTemplate.php');


class templateInit
{
//    public static function Instance()
//    {
//        static $inst = null;
//        if ($inst == null) {
//            $inst = new SMTemplate();
//        }
//        return $inst;
//    }

    private static $instance = null;

    public static function Instance()
    {
        if (self::$instance == null) {
            self::$instance = new SMTemplate();
        }

        return self::$instance;
    }
}