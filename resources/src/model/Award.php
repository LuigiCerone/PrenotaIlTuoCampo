<?php
require_once('Database.php');

class Award
{
    private $name;
    private $place;
    private $tournament_fk;

    /**
     * Award constructor.
     * @param $name
     * @param $place
     * @param $tournament_fk
     */
    public function __construct($name, $place, $tournament_fk)
    {
        $this->name = $name;
        $this->place = $place;
        $this->tournament_fk = $tournament_fk;
    }

    public static function getAllAwardsForTournament($id)
    {
        $sql = "SELECT * FROM award WHERE tournament_fk=? ORDER BY place ASC;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $awards = array();
        while ($row = $result->fetch_assoc()) {
            $awards[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);
        return json_encode($awards);
    }


    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO award (id, name, tournament_fk, place) "
            . " VALUES (NULL, ?, ?, ?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $this->name, $this->tournament_fk, $this->place);
        if ($stmt->execute()) $b = true;
        $id = $conn->insert_id;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }
}