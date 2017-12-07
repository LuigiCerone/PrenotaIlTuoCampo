<?php

class Database
{
    private $servername = "localhost";
    private $username = "tdw";
    private $password = "tdw";
    private $dbname = "TDWProject";

    /**
     * Database constructor.
     * @param string $username
     */
    public function __construct()
    {
    }


    public function getConnection()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }
}
