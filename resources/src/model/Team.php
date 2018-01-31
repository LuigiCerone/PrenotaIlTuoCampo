<?php
require_once('Database.php');

class Team
{
    private $name;
    private $number;
    private $user_fk;
    private $team_players;

    /**
     * Team constructor.
     * @param $name
     * @param $number
     * @param $user_fk
     */
    public function __construct($name, $number, $user_fk, $team_players)
    {
        $this->name = $name;
        $this->number = $number;
        $this->user_fk = $user_fk;
        $this->team_players = $team_players;
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

    public static function loadById($id)
    {
        $sql = "SELECT * FROM team WHERE id = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $team = $result->fetch_assoc();
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($team);
    }

    public function insert()
    {
        $sql = "INSERT INTO team (id, name, number, user_fk, players) "
            . " VALUES (NULL, ?, ?, ?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siis", $this->name, $this->number, $this->user_fk, $this->team_players);
        $stmt->execute();
        $id = $conn->insert_id;
        $stmt->close();
        Database::closeConnestion($conn);

        return $id;
    }
}