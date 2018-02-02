<?php
require_once('Database.php');

class Resource
{
    private $id;
    private $supply_fk;
    private $partner_fk;
    private $available;
    private $quantity;

    /**
     * Resource constructor.
     * @param $supply_fk
     * @param $partner_fk
     * @param $available
     * @param $quantity
     */
    public function __construct($supply_fk, $partner_fk, $available, $quantity)
    {
        $this->supply_fk = $supply_fk;
        $this->partner_fk = $partner_fk;
        $this->available = $available;
        $this->quantity = $quantity;
    }

    public function insert()
    {
        {
            $b = false;
            $sql = "INSERT INTO resource (id, supply_fk, partner_fk, available, quantity) 
            VALUES (NULL, ?, ?, ?, ?);";

            $conn = Database::getConnection();
            // prepare and bind
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("iiii", $this->supply_fk, $this->partner_fk, $this->available, $this->quantity);
            if ($stmt->execute()) $b = true;
            $stmt->close();
            Database::closeConnestion($conn);
            return $b;
        }
    }
}