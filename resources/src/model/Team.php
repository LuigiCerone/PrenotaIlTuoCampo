<?php
require_once('Database.php');

class Team
{
    private $name;
    private $number;
    private $user_fk;

    /**
     * Team constructor.
     * @param $name
     * @param $number
     * @param $user_fk
     */
    public function __construct($name, $number, $user_fk)
    {
        $this->name = $name;
        $this->number = $number;
        $this->user_fk = $user_fk;
    }


    public static function getAllTeams()
    {
        $sql = "SELECT * FROM team;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $teams = array();

        while ($row = $result->fetch_assoc()) {
            $teams[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($teams);
    }
}