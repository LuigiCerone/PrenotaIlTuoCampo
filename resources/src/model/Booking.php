<?php
require_once("Database.php");

class Booking
{
    private $id;
    private $date;
    private $time;
    private $user_fk;
    private $field_fk;
    private $approved;
    private $valid;

    /**
     * Booking constructor.
     * @param $date
     * @param $time
     * @param $user_fk
     * @param $field_fk
     */
    public function __construct($date, $time, $user_fk, $field_fk)
    {
        $this->date = $date;
        $this->time = $time;
        $this->user_fk = $user_fk;
        $this->field_fk = $field_fk;
        $this->approved = false;
        $this->valid = true;
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
        $b = false;
        $sql = "INSERT INTO booking (id, date, time, user_fk, field_fk, approved, valid) "
            . " VALUES (NULL, ?, ?, ?, ?, FALSE, TRUE);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssii", $this->date, $this->time, $this->user_fk, $this->field_fk);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }


    public static function delete($id)
    {
        $sql = "DELETE FROM booking WHERE id = ?;";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }

    public static function getNotValidBookings()
    {
        $sql = "SELECT booking.id, date, time, user_fk, firstName, lastName, field_fk, approved, valid 
            FROM booking JOIN user ON booking.user_fk = user.id
                 WHERE  user.admin=0 AND booking.valid=0;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
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

    public static function getNotApprovedBookings()
    {
        $sql = "SELECT booking.id, date, time, user_fk, firstName, lastName, field_fk, approved, valid 
            FROM booking JOIN user ON booking.user_fk = user.id
                 WHERE  user.admin=0 AND booking.approved=0;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
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

    public static function approveBooking($booking)
    {
        $sql = "UPDATE booking SET approved=TRUE WHERE id=?;";
        $b = false;
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $booking);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }

    public function to_json()
    {
        return json_encode(array(
            'id' => $this->id,
            'date' => $this->date,
            'time' => $this->time,
            'user_fk' => $this->user_fk,
            'field_fk' => $this->field_fk,
            'approved' => $this->approved,
            'valid' => $this->valid
        ));
    }
}