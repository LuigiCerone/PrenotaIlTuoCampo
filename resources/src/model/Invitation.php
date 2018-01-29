<?php
require("Database.php");

class Invitation
{
    private $id;
    private $from_user_fk;
    private $to_user_fk;
    private $date;
    private $accepted;

    /**
     * Invitation constructor.
     * @param $id
     * @param $from_user_fk
     * @param $to_user_fk
     * @param $date
     * @param $accepted
     */
    public function __construct($from_user_fk, $to_user_fk, $date, $accepted)
    {
        $this->from_user_fk = $from_user_fk;
        $this->to_user_fk = $to_user_fk;
        $this->date = $date;
        $this->accepted = $accepted;
    }

    public static function getAllSentInvitation($from_user_fk)
    {
        $sql = "SELECT invitation.id, date, accepted, firstName, lastName, email, telnumber FROM invitation JOIN user ON to_user_fk = user.id WHERE from_user_fk=? AND date >= NOW();";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $from_user_fk);
        $stmt->execute();
        $result = $stmt->get_result();

        $sent = array();

        while ($row = $result->fetch_assoc()) {
            $sent[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($sent);
    }

    public static function getAllReceivedInvitation($to_user_fk)
    {
        $sql = "SELECT  invitation.id,date, accepted, firstName, lastName, email, telnumber FROM invitation JOIN user ON from_user_fk = user.id WHERE to_user_fk=? AND date >= NOW();";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $to_user_fk);
        $stmt->execute();
        $result = $stmt->get_result();

        $received = array();

        while ($row = $result->fetch_assoc()) {
            $received[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($received);
    }

    public static function changeValidation($id)
    {
        $sql = "UPDATE invitation SET accepted=TRUE WHERE id=?;";
        $b = false;
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function insert()
    {
        $sql = "INSERT INTO invitation (id, from_user_fk, to_user_fk, date, accepted) "
            . " VALUES (NULL, ?, ?, NOW(),FALSE);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $this->from_user_fk, $this->to_user_fk);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }
}