<?php
require_once('Database.php');

class Match
{
    private $first_team_fk;
    private $second_team_fk;
    private $tournament_fk;
    private $date;
    private $time;
    private $field_fk;
    private $day;

    public function __construct($first_team_fk, $second_team_fk, $tournament_fk, $day)
    {
        $this->first_team_fk = $first_team_fk;
        $this->second_team_fk = $second_team_fk;
        $this->tournament_fk = $tournament_fk;
        $this->day = $day;

        $this->date = null;
        $this->time = null;
        $this->field_fk = null;
    }

    public static function getAllMatchesForTournament($id)
    {
        $sql = "SELECT `match`.id AS match_id, `match`.tournament_fk, t1.name AS first_team, t2.name AS second_team, day, `match`.date, `match`.time, field.number, partner.name AS partner, field.number AS number FROM
        (((`match` JOIN team AS t1 ON first_team_fk = t1.id) JOIN team AS t2 ON second_team_fk = t2.id)
        LEFT JOIN field ON field_fk = field.id) LEFT JOIN partner ON field.partner_fk = partner.id
        WHERE `match`.tournament_fk = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $matches = array();

        while ($row = $result->fetch_assoc()) {
            $matches[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($matches);
    }

    public static function updateInfo($match, $date, $time, $field)
    {
        $sql = "UPDATE `match` SET date=?, time=?, field_fk=? WHERE id = ?";
        $b = false;

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $date, $time, $field, $match);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO `match` (id, first_team_fk, second_team_fk, tournament_fk, date, time, field_fk, day) "
            . " VALUES (NULL, ?, ?,?,?,?,?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiissii", $this->first_team_fk, $this->second_team_fk, $this->tournament_fk, $this->date, $this->time, $this->field_fk, $this->day);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function to_json()
    {
        return json_encode(array(
            'first_team_fk' => $this->first_team_fk,
            'second_team_fk' => $this->second_team_fk,
            'tournament_fk' => $this->tournament_fk,
            'date' => $this->date,
            'time' => $this->time,
            'field_fk' => $this->field_fk,
            'day' => $this->day
        ));
    }


}