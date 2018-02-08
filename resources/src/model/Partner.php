<?php
require_once("Database.php");

class Partner
{
    private $id;
    private $name;
    private $description;
    private $region;
    private $area;
    private $address;
    private $email;
    private $telnumber;


    public function __construct($name, $description, $region, $area, $address, $email, $telnumber)
    {
        $this->name = $name;
        $this->description = $description;
        $this->region = $region;
        $this->area = $area;
        $this->address = $address;
        $this->email = $email;
        $this->telnumber = $telnumber;
    }

    public static function getAllPartners()
    {
        $sql = "SELECT * FROM partner;";

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

    public static function getPartnerById($moderator)
    {
        $sql = "SELECT * FROM partner WHERE id = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $moderator);
        $stmt->execute();
        $result = $stmt->get_result();
        $partner = $result->fetch_assoc();
        return json_encode($partner);
    }

//    public static function getPaginatedPartners($page)
//    {
//        $start_from = $page == 1 ? 0 : (($page - 1) * 10 - 1);
//        $sql = "SELECT * FROM partner LIMIT ;";
//
//        $conn = Database::getConnection();
//        // prepare and bind
//        $stmt = $conn->prepare($sql);
//        $stmt->execute();
//        $result = $stmt->get_result();
//
//        $partners = array();
//
//        while ($row = $result->fetch_assoc()) {
//            $partners[] = $row;
//        }
//        $stmt->close();
//        Database::closeConnestion($conn);
//
//        return json_encode($partners);
//    }

    public function insert()
    {
        $sql = "INSERT INTO partner (id, name, description, region, area, address, email, telnumber) VALUES (NULL, ?, ?, ?, ?,?,?,?);";
        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $this->name, $this->description, $this->region, $this->area, $this->address, $this->email, $this->telnumber);
        $stmt->execute();
        $stmt->close();
        Database::closeConnestion($conn);
    }
}