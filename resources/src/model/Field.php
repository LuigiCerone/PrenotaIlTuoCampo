<?php
require_once('Database.php');

class Field
{
    private $id;
    private $partner_fk;
    private $sport_fk;
    private $outdoor;
    private $province_fk;
    private $type;
    private $warmed;
    private $number;

    /**
     * Field constructor.
     * @param $partner_fk
     * @param $sport_fk
     * @param $outdoor
     * @param $province_fk
     * @param $type
     * @param $warmed
     * @param $number
     */
    public function __construct($partner_fk, $sport_fk, $outdoor, $province_fk, $type, $warmed, $number)
    {
        $this->partner_fk = $partner_fk;
        $this->sport_fk = $sport_fk;
        $this->outdoor = $outdoor;
        $this->province_fk = $province_fk;
        $this->type = $type;
        $this->warmed = $warmed;
        $this->number = $number;
    }


    public static function getFieldsForSport($sport)
    {
        $sql = "SELECT DISTINCT province_fk, province.name AS province_name , partner_fk, partner.name AS partner_name
      FROM (field JOIN partner ON field.partner_fk = partner.id)
      JOIN province ON sign = province_fk 
      WHERE sport_fk = ?;";
        $conn = Database::getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $sport);
        $stmt->execute();
        $result = $stmt->get_result();
        $fields = array();

        while ($row = $result->fetch_assoc()) {
            $fields[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($fields);
    }

    public static function getAllAvailableFields($selectedSport, $selectedPartner, $date, $time)
    {
        $sql = "SELECT * FROM field AS f WHERE f.id NOT IN (
        SELECT DISTINCT field.id FROM booking JOIN field ON booking.field_fk = field.id 
        WHERE field.partner_fk = ? AND field.sport_fk = ? AND booking.date = ? AND booking.time=?);";

        $conn = Database::getConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiss", $selectedPartner, $selectedSport, $date, $time);
        $stmt->execute();
        $result = $stmt->get_result();
        $fields = array();

        while ($row = $result->fetch_assoc()) {
            $fields[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($fields);
    }

    public function insert()
    {
        $b = false;
        $sql = "INSERT INTO field (id, partner_fk,sport_fk, outdoor, province_fk, type, warmed, number) 
            VALUES (NULL, ?, ?, ?, ?,?,?,?);";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiiisii", $this->partner_fk, $this->sport_fk, $this->outdoor, $this->province_fk, $this->type, $this->warmed, $this->number);
        if ($stmt->execute()) $b = true;
        $stmt->close();
        Database::closeConnestion($conn);
        return $b;
    }
}