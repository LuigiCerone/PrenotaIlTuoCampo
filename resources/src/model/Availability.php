<?php
require_once("Database.php");

class Availability
{
    private $id;
    private $date;
    private $time;
    private $user_fk;
    private $partner_fk;
    private $sport_fk;

    /**
     * Availability constructor.
     * @param $date
     * @param $time
     * @param $user_fk
     * @param $partner_fk
     * @param $sport_fk
     */
    public function __construct($date, $time, $user_fk, $partner_fk, $sport_fk)
    {
        $this->date = $date;
        $this->time = $time;
        $this->user_fk = $user_fk;
        $this->partner_fk = $partner_fk;
        $this->sport_fk = $sport_fk;
    }

    public static function getAllAvailabilitiesForUser($user_fk)
    {
        $sql = "SELECT a.id, a.date, a.time, sport.name AS sport, partner.name AS partner FROM (availability AS a JOIN sport ON sport_fk = sport.id)  
                JOIN partner ON partner_fk = partner.id WHERE user_fk=? AND busy=FALSE;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_fk);
        $stmt->execute();
        $result = $stmt->get_result();

        $availabilities = array();

        while ($row = $result->fetch_assoc()) {
            $availabilities[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($availabilities);
    }

    public static function getAllAvailabilities($partner, $sport, $date, $time)
    {
        $sql = "SELECT user.id AS id, date, time, firstName, lastName, birthdate, gender
        FROM availability JOIN user ON user_fk = user.id WHERE partner_fk = ? 
        AND sport_fk=? AND STR_TO_DATE(?, '%d/%m/%Y') = date AND (time IS NULL OR time = ?) AND busy=FALSE;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiss", $partner, $sport, $date, $time);
        $stmt->execute();

        $result = $stmt->get_result();

        $availabilities = array();

        while ($row = $result->fetch_assoc()) {
            $availabilities[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($availabilities);
    }

    public static function setBusy($ava)
    {
        $b = false;
        $sql = "UPDATE availability "
            . " SET busy=TRUE WHERE id=?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ava);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }

    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO availability(id, user_fk, partner_fk, sport_fk, date, time) "
            . " VALUES(NULL,?,?,?,?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiss", $this->user_fk, $this->partner_fk, $this->sport_fk, $this->date, $this->time);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }

    public static function remove($id)
    {
        $b = false;
        $sql = "DELETE FROM availability "
            . " WHERE id = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);

        return $b;
    }
}