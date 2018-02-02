<?php
require_once('Database.php');

class Ranking
{
    private $tournament_fk;
    private $team_fk;
    private $point;

    public function __construct($tournament_fk, $team_fk, $point)
    {
        $this->tournament_fk = $tournament_fk;
        $this->team_fk = $team_fk;
        $this->point = $point;
    }

    public static function getAllRankForTournament($id)
    {
        $sql = " SELECT ranking.id,ranking.tournament_fk,team_fk, point, team.name AS teamName FROM ranking JOIN team ON ranking.team_fk= team.id WHERE ranking.tournament_fk = ? ORDER BY point DESC;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $ranks = array();

        while ($row = $result->fetch_assoc()) {
            $ranks[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($ranks);
    }

    public static function updatePoint($team, $tournament, $point)
    {
        $sql = "UPDATE ranking SET point= ( point + ?) WHERE team_fk = ? AND tournament_fk = ?";
        $b = false;
        echo " " . $team;
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iii", $point, $team, $tournament);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public static function setUpRankForTournament($tournament)
    {
        // List of all team for the given tournament.
        $sql = "SELECT DISTINCT first_team_fk FROM `match` WHERE tournament_fk = ?;";
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
        $conn = Database::getConnection();

        $sql = "";
        print_r($teams);

        foreach ($teams as $team) {
            echo "team: " . $team['first_team_fk'];
            $sql .= " INSERT INTO ranking (id, tournament_fk, team_fk, point) " .
                " VALUES (NULL, '" . $tournament . "' ,'" . $team['first_team_fk'] . "'  , 0);";
        }
        $conn->multi_query($sql);

        Database::closeConnestion($conn);

    }
}