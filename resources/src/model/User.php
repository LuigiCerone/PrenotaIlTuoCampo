<?php
require("Database.php");

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;


    public function __construct()
    {
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
        $sql = "INSERT INTO user (id, firstName, secondName) VALUES (null, ?, ?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $this->firstName, $this->lastName);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }


    public static function withID($id)
    {
        $instance = new self();
        $instance->loadByID($id);
        return $instance;
    }

    public static function withEmailAndPassoword($email, $password)
    {
        $instance = new self();
        $instance->loadByEmailAndPassword($email, $password);
        return $instance;
    }

    public static function withRow(array $row)
    {
        $instance = new self();
        $instance->fill($row);
        return $instance;
    }

    protected function loadByID($id)
    {
        // do query
        $row = $this->get_user_from_id($id);
        $this->fill($row);
    }

    protected function loadByEmailAndPassword($email, $password)
    {
        // do query
        $row = $this->get_user_from_email_password($email, $password);
        $this->fill($row);
    }

    protected function fill(array $row)
    {
        $this->firstName = $row['firstName'];
        $this->lastName = $row['secondName'];
        $this->email = $row['email'];
        $this->password = $row['password'];

        echo "Sono " . $this->toString();
    }

    function get_user_from_id($id)
    {
        $sql = "SELECT * FROM user WHERE user.id = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $stmt->close();
        Database::closeConnestion($conn);
        return $result->fetch_assoc();
    }

    function get_user_from_email_password($email, $password)
    {

        $sql = "SELECT * FROM user WHERE user.email = ? AND user.password = ?;";
        $conn = Database::getConnection();
        // prepare and bind

        echo "Qui";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

//        while ($row = $result->fetch_assoc()) {
//            // do something with $row
//        }

        $stmt->close();
        Database::closeConnestion($conn);

        return $result->fetch_assoc();
    }
}