<?php
require("Database.php");

class Booking
{
    private $id;
    private $date;
    private $time;
    private $user_fk;
    private $field_fk;

    /**
     * Booking constructor.
     * @param $id
     * @param $date
     * @param $time
     * @param $user_fk
     * @param $field_fk
     */
    public function __construct($id, $date, $time, $user_fk, $field_fk)
    {
        $this->id = $id;
        $this->date = $date;
        $this->time = $time;
        $this->user_fk = $user_fk;
        $this->field_fk = $field_fk;
    }

    public static function getAllBookingsForUser($user_fk)
    {
        $sql = "SELECT * FROM booking WHERE user_fk=? AND approved=1;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_fk);
        $stmt->execute();
        $result = $stmt->get_result();

        $partners = array();

        while ($row = $result->fetch_assoc()) {
            $partners[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($partners);
    }

    public static function changeValidation($user, $booking)
    {
        $sql = "UPDATE booking SET valid=FALSE WHERE user_fk=? AND id=?;";
        $b = false;
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $user, $booking);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function insert()
    {
        $sql = "INSERT INTO booking (id, date, time, user_fk, field_fk, approved, valid) "
            . " VALUES (NULL, ?, ?, ?, ?, FALSE, TRUE);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $this->date, $this->time, $this->user_fk, $this->field_fk);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }

    public function static delete()
    {
        $sql = "DELETE from booking WHERE approved = 1 AND valid = 0;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }


}