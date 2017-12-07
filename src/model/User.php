<?php
require("Database.php");

class User
{
    private $firstName;
    private $lastName;

    /**
     * User constructor.
     * @param $firstName
     * @param $lastName
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function toString()
    {
        return ("User's data : " . $this->firstName . " " . $this->lastName);
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function insert()
    {
        $sql = "INSERT INTO user (id, firstName, secondName) VALUES (null, '" . $this->firstName . "', '" . $this->lastName . "' );";
        echo $sql;
        $db = new Database();
        $conn = $db->getConnection();
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}