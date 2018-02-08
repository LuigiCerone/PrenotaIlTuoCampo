<?php

require_once('Database.php');

class Sport
{
    private $id;
    private $name;
    private $numberPlayers;

    /**
     * Sport constructor.
     * @param $id
     * @param $name
     * @param $numberPlayers
     */
    public function __construct($id, $name, $numberPlayers)
    {
        $this->id = $id;
        $this->name = $name;
        $this->numberPlayers = $numberPlayers;
    }


    public static function getAllSports()
    {
        $sql = "SELECT * FROM sport;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->get_result();

        $sports = array();
        while ($row = $result->fetch_assoc()) {
            $sports[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($sports);
    }


}