<?php
require_once('Database.php');

class Sponsor
{
    private $name;
    private $type;

    /**
     * Sponsor constructor.
     * @param $name
     * @param $type
     */
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }


    public static function getAllSponsorForTournament($id)
    {
        $sql = "SELECT * FROM sponsor JOIN sponsor2tournament WHERE tournament_fk=?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $sponsors = array();
        while ($row = $result->fetch_assoc()) {
            $sponsors[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);
        return json_encode($sponsors);
    }


    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO sponsor (id, name, type) "
            . " VALUES (NULL, ?, ?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $this->name, $this->type);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }

    public function insertSponsorForTournament($sponsor, $tournament, $money, $date)
    {
        $b = false;
        $sql = "INSERT INTO sponsor2tournament (sponsor_fk, tournament_fk, money, date) "
            . " VALUES (?, ?, ?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiis", $sponsor, $tournament, $money, $date);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }
}