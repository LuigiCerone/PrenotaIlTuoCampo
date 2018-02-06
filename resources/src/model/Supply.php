<?php
require_once('Database.php');

class Supply
{
    private $name;
    private $description;

    /**
     * Supply constructor.
     * @param $name
     * @param $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public static function getAllSupplies()
    {
        $sql = "SELECT supply.id AS id, supply.name, supply.description, resource.available FROM supply LEFT JOIN resource ON supply.id = resource.supply_fk;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $supplies = array();

        while ($row = $result->fetch_assoc()) {
            $supplies[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($supplies);
    }

    public static function getAllSuppliesForPartner($selectedPartner)
    {
        $sql = "SELECT supply.id AS id, supply.name, supply.description, resource.available 
                FROM supply LEFT JOIN resource ON supply.id = resource.supply_fk 
                WHERE resource.partner_fk = ?;";

        $conn = Database::getConnection();
        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $selectedPartner);
        $stmt->execute();
        $result = $stmt->get_result();

        $supplies = array();

        while ($row = $result->fetch_assoc()) {
            $supplies[] = $row;
        }
        $stmt->close();
        Database::closeConnestion($conn);

        return json_encode($supplies);
    }

}