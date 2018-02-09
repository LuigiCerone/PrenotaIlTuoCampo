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
        $sql = "SELECT * FROM booking WHERE user_fk=? AND approved=1 AND date>=NOW();";

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

    public static function getNotValidBookingsForPartner($moderator)
    {
        $sql = "SELECT booking.id, date, time, user_fk, firstName, lastName, field_fk, approved, valid 
            FROM (booking JOIN user ON booking.user_fk = user.id) JOIN field ON booking.field_fk = field.id
                 WHERE  user.admin=0 AND booking.valid=0 AND field.partner_fk = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $moderator);
        $stmt->execute();
        $result = $stmt->get_result();

        $bookings = array();

        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($bookings);
    }

    public static function getNotApprovedBookingsForPartner($moderator)
    {
        $sql = "SELECT booking.id, date, time, user_fk, firstName, lastName, field_fk, approved, valid 
            FROM (booking JOIN user ON booking.user_fk = user.id) JOIN field ON booking.field_fk = field.id
                 WHERE  user.admin=0 AND booking.approved=0 AND field.partner_fk = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $moderator);
        $stmt->execute();
        $result = $stmt->get_result();

        $bookings = array();

        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($bookings);
    }

    public static function getLastBookings($id)
    {
        $sql = "SELECT booking.id, booking.date, booking.time, partner.name
        FROM booking
        JOIN field ON field_fk = field.id
        JOIN partner ON partner_fk = partner.id
        WHERE user_fk = ? AND approved = 1 AND valid = 1 AND date < NOW();";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
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

    public static function getInfoFromId($selectedBooking)
    {
        $sql = "SELECT partner.id AS selectedPartner, partner.name AS partner, field.province_fk AS selectedProvince, 
        province.name AS province, sport.id AS selectedSport, sport.name AS sport
        FROM (((booking
        JOIN field ON field_fk = field.id)
        JOIN partner ON partner_fk = partner.id)
        JOIN sport ON field.sport_fk = sport.id)
        JOIN province ON field.province_fk = province.sign
        WHERE booking.id = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $selectedBooking);
        $stmt->execute();
        $result = $stmt->get_result();
        $info = $result->fetch_assoc();

        return json_encode($info);
    }

    public static function getStats($id)
    {
        $sql = "SELECT
  COUNT(*) AS count,
 MONTH(booking.date) AS month
FROM booking
  JOIN user u ON booking.user_fk = u.id
WHERE u.admin = 0 AND booking.approved = 1 AND booking.valid = 1 AND u.id = ?
GROUP BY MONTH(booking.date);";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $stats = array();

        while ($row = $result->fetch_assoc()) {
            $stats[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($stats);
    }

    public static function getMoreStats($id)
    {
        $sql = "SELECT
  COUNT(*)            AS count,
  MONTH(booking.date) AS month,
  sport.name,
  sport.id            AS sportId
FROM ((booking
  JOIN user u ON booking.user_fk = u.id)
  JOIN field ON booking.field_fk = field.id)
  JOIN sport ON field.sport_fk = sport.id
WHERE u.admin = 0 AND booking.approved = 1 AND booking.valid = 1 AND u.id = ?
GROUP BY MONTH(booking.date), field.sport_fk;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        $stats = array();

        while ($row = $result->fetch_assoc()) {
            $stats[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($stats);
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