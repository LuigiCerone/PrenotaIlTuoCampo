<?php

class Database
{
    protected static $servername = "localhost";
    protected static $username = "tdw";
    protected static $password = "tdw";
    protected static $dbname = "TDWProject";

    /**
     * Database constructor.
     * @param string $username
     */
    public function __construct()
    {
    }


    public static function getConnection()
    {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }

    public static function closeConnestion($conn)
    {
        mysqli_close($conn);
    }


}
