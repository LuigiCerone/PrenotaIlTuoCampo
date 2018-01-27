<?php
require_once('Database.php');

class Field
{
    private $id;
    private $partner_fk;
    private $sport_fk;
    private $outdoor;
    private $province_fk;

    /**
     * Field constructor.
     * @param $id
     * @param $partner_fk
     * @param $sport_fk
     * @param $outdoor
     * @param $province_fk
     */
    public function __construct($id, $partner_fk, $sport_fk, $outdoor, $province_fk)
    {
        $this->id = $id;
        $this->partner_fk = $partner_fk;
        $this->sport_fk = $sport_fk;
        $this->outdoor = $outdoor;
        $this->province_fk = $province_fk;
    }

    public static function getFieldsForSport($sport)
    {
        $sql = "SELECT province_fk, province.name AS province_name , partner_fk, partner.name AS partner_name
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
}