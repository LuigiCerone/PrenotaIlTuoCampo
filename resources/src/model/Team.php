<?php
require_once('Database.php');

class Team
{
    private $name;
    private $number;
    private $user_fk;
    private $team_players;
    private $tournament_fk;

    /**
     * Team constructor.
     * @param $name
     * @param $number
     * @param $user_fk
     */
    public function __construct($name, $number, $user_fk, $team_players, $tournament_fk)
    {
        $this->name = $name;
        $this->number = $number;
        $this->user_fk = $user_fk;
        $this->team_players = $team_players;
        $this->tournament_fk = $tournament_fk;
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

    public static function getAllTeamForTournament($tournament)
    {
        $sql = "SELECT id,name FROM team WHERE tournament_fk = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $tournament);
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

    public function insert()
    {
        $b = false;

        $sql = "INSERT INTO team (id, name, number, user_fk, players, tournament_fk) "
            . " VALUES (NULL, ?, ?, ?,?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siisi", $this->name, $this->number, $this->user_fk, $this->team_players, $this->tournament_fk);
        if ($stmt->execute()) $b = true;
        $id = $conn->insert_id;
        $stmt->close();
        Database::closeConnestion($conn);

        if ($b == true) {
            $sql = "UPDATE tournament SET teamLeft = teamLeft -1 WHERE id = ? AND teamLeft>0;";
            $conn = Database::getConnection();
            // prepare and bind
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $this->tournament_fk);
            $stmt->execute();
            $stmt->close();
            Database::closeConnestion($conn);
        }

        return $id;
    }
}