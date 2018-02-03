<?php
require("Database.php");

class Invitation
{
    private $id;
    private $from_user_fk;
    private $to_user_fk;
    private $date;
    private $accepted;
    private $availability_fk;

    /**
     * Invitation constructor.
     * @param $id
     * @param $from_user_fk
     * @param $to_user_fk
     * @param $date
     * @param $accepted
     */
    public function __construct($from_user_fk, $to_user_fk, $accepted, $availability_fk)
    {
        $this->from_user_fk = $from_user_fk;
        $this->to_user_fk = $to_user_fk;
        $this->accepted = $accepted;
        $this->availability_fk = $availability_fk;
    }

    public static function getAllSentInvitation($from_user_fk)
    {
        $sql = "SELECT
                sport.name      AS sport,
                partner.name    AS partner,
                availability.date,
                availability.time,
                invitation.id,
               invitation.date AS invitationDate,
               status,
               firstName,
               lastName,
                user.email,
               user.telnumber
                FROM (((invitation
                 JOIN user ON from_user_fk = user.id) JOIN availability ON availability_fk = availability.id)
                 JOIN sport ON availability.sport_fk = sport.id) JOIN partner
                 ON partner.id = availability.partner_fk
                 WHERE from_user_fk = ?;";

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
        $sql = "SELECT
                invitation.availability_fk AS availabilityId,
                sport.name      AS sport,
                partner.name    AS partner,
                availability.date,
                availability.time,
                invitation.id,
               invitation.date AS invitationDate,
               status,
               firstName,
               lastName,
                user.email,
               user.telnumber
                FROM (((invitation
                 JOIN user ON from_user_fk = user.id) JOIN availability ON availability_fk = availability.id)
                 JOIN sport ON availability.sport_fk = sport.id) JOIN partner
                 ON partner.id = availability.partner_fk
                 WHERE to_user_fk = ?;";

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

    public static function changeStatus($id, $status)
    {
        $sql = "UPDATE invitation SET status=? WHERE id=?;";
        $b = false;
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $status, $id);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO invitation (id, from_user_fk, to_user_fk, date, status, availability_fk) "
            . " VALUES (NULL, ?, ?, NOW(),2, ?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $this->from_user_fk, $this->to_user_fk, $this->availability_fk);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }
}