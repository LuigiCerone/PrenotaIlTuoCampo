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